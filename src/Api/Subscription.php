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

use KodeKeep\Paddle\Api\Endpoints\Endpoint;
use KodeKeep\Paddle\Api\Endpoints\Subscription\Modifiers;
use KodeKeep\Paddle\Api\Endpoints\Subscription\OneOffCharges;
use KodeKeep\Paddle\Api\Endpoints\Subscription\Payments;
use KodeKeep\Paddle\Api\Endpoints\Subscription\Plans;
use KodeKeep\Paddle\Api\Endpoints\Subscription\SubscriptionUsers;

class Subscription extends AbstractApi
{
    public function modifiers(): Endpoint
    {
        return new Modifiers($this->client);
    }

    public function oneOffCharges(): Endpoint
    {
        return new OneOffCharges($this->client);
    }

    public function payments(): Endpoint
    {
        return new Payments($this->client);
    }

    public function plans(): Endpoint
    {
        return new Plans($this->client);
    }

    public function subscriptionUsers(): Endpoint
    {
        return new SubscriptionUsers($this->client);
    }
}
