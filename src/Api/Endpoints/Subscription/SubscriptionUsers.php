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

class SubscriptionUsers extends Endpoint
{
    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/subscription-users/listusers
     */
    public function all(array $data = []): array
    {
        return $this->post('/2.0/subscription/users', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/subscription-users/updateuser
     */
    public function update(array $data = []): array
    {
        return $this->post('/2.0/subscription/users/update', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/subscription-users/previewupdate
     */
    public function preview(array $data = []): array
    {
        return $this->post('/2.0/subscription/preview_update', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/subscription-api/subscription-users/canceluser
     */
    public function cancel(array $data = []): array
    {
        return $this->post('/2.0/subscription/users_cancel', $data);
    }
}
