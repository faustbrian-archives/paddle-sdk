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

namespace KodeKeep\Paddle\Webhooks\Actions;

class VerifyWebhook
{
    public function execute(string $publicKey, string $signature, array $data): bool
    {
        ksort($data);

        foreach ($data as $key => $value) {
            if (! in_array(gettype($value), ['object', 'array'], true)) {
                $data[$key] = "$value";
            }
        }

        return openssl_verify(
            serialize($data),
            base64_decode($signature, true),
            openssl_get_publickey($publicKey),
            OPENSSL_ALGO_SHA1
        ) === 1;
    }
}
