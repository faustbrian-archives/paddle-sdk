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

namespace KodeKeep\Paddle\Api\Endpoints\Subscription;

use KodeKeep\Paddle\Api\Endpoints\Endpoint;

class Plans extends Endpoint
{
    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/plans/listplans
     */
    public function all(array $data = []): array
    {
        return $this->post('/2.0/subscription/plans', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/plans/createplan
     */
    public function create(array $data = []): array
    {
        return $this->post('/2.0/subscription/plans_create', $data);
    }
}
