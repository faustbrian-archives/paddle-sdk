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

use KodeKeep\Paddle\Api\Endpoints\Checkout\OrderInformation;
use KodeKeep\Paddle\Api\Endpoints\Checkout\Prices;
use KodeKeep\Paddle\Api\Endpoints\Checkout\UserHistory;
use KodeKeep\Paddle\Api\Endpoints\Endpoint;

class Checkout extends AbstractApi
{
    public function orderInformation(): Endpoint
    {
        return new OrderInformation($this->client);
    }

    public function prices(): Endpoint
    {
        return new Prices($this->client);
    }

    public function userHistory(): Endpoint
    {
        return new UserHistory($this->client);
    }
}
