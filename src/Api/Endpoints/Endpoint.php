<?php

declare(strict_types=1);

/*
 * This file is part of Paddle SDK.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Paddle\Api\Endpoints;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use KodeKeep\Paddle\Client;
use KodeKeep\Paddle\Exceptions\RequestException;

abstract class Endpoint
{
    protected string $baseUrl = 'https://vendors.paddle.com/api/';

    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get(string $path, array $data): array
    {
        return $this->sendRequest('get', $path, $data);
    }

    protected function post(string $path, array $data): array
    {
        return $this->sendRequest('post', $path, $data);
    }

    private function sendRequest(string $method, string $path, array $data): array
    {
        $data['vendor_id'] = $this->client->getVendorId();

        if ($method === 'post') {
            $data['vendor_auth_code'] = $this->client->getVendorAuthCode();
        }

        $response = Http::{$method}($this->baseUrl.ltrim($path, '/'), $data);

        if (! $response->failed()) {
            throw RequestException::unexpectedStatusCode($response->status());
        }

        $body = $response->json();

        if (Str::contains($path, '1.0')) {
            return $body;
        }

        if ($body['success'] === false) {
            throw RequestException::fromResponse($body);
        }

        if ($body['success'] === true && empty($body['response'])) {
            return [];
        }

        return $body['response'];
    }
}
