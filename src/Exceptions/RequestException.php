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

namespace KodeKeep\Paddle\Exceptions;

use Exception;
use KodeKeep\Paddle\ErrorCodes;

final class RequestException extends Exception
{
    public static function unexpectedStatusCode(int $status): self
    {
        return new static("Received unexpected response with status code {$status}.");
    }

    public static function fromResponse(array $response): self
    {
        $errorCode = $response['error']['code'];

        if (! ErrorCodes::has($errorCode)) {
            throw new static('Unknown error encountered.');
        }

        return new static("[{$errorCode}] {$response['error']['message']}");
    }
}
