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

namespace KodeKeep\Paddle\Api;

use KodeKeep\Paddle\Client;

abstract class AbstractApi
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
