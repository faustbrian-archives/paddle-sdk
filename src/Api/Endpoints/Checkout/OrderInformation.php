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

namespace KodeKeep\Paddle\Api\Endpoints\Checkout;

use KodeKeep\Paddle\Api\Endpoints\Endpoint;

class OrderInformation extends Endpoint
{
    /**
     * @see https://developer.paddle.com/api-reference/checkout-api/order-information/getorder
     */
    public function show(array $data = []): array
    {
        return $this->get('/1.0/order', $data);
    }
}
