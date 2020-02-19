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

namespace KodeKeep\Paddle\Api\Endpoints\Product;

use KodeKeep\Paddle\Api\Endpoints\Endpoint;

class Coupons extends Endpoint
{
    /**
     * @see https://developer.paddle.com/api-reference/product-api/coupons/listcoupons
     */
    public function all(array $data = []): array
    {
        return $this->post('/2.0/product/list_coupons', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/product-api/coupons/createcoupon
     */
    public function create(array $data = []): array
    {
        return $this->post('/2.1/product/create_coupon', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/product-api/coupons/deletecoupon
     */
    public function update(array $data = []): array
    {
        return $this->post('/2.1/product/update_coupon', $data);
    }

    /**
     * @see https://developer.paddle.com/api-reference/product-api/coupons/deletecoupon
     */
    public function delete(array $data = []): array
    {
        return $this->post('/2.0/product/delete_coupon', $data);
    }
}
