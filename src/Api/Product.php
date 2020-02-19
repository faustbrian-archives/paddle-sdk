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

use KodeKeep\Paddle\Api\Endpoints\Product\Coupons;
use KodeKeep\Paddle\Api\Endpoints\Product\Licenses;
use KodeKeep\Paddle\Api\Endpoints\Product\PayLinks;
use KodeKeep\Paddle\Api\Endpoints\Product\Payments;
use KodeKeep\Paddle\Api\Endpoints\Product\Products;
use KodeKeep\Paddle\Api\Endpoints\Product\Transactions;

class Product extends AbstractApi
{
    public function coupons(): Coupons
    {
        return new Coupons($this->client);
    }

    public function licenses(): Licenses
    {
        return new Licenses($this->client);
    }

    public function payLinks(): PayLinks
    {
        return new PayLinks($this->client);
    }

    public function payments(): Payments
    {
        return new Payments($this->client);
    }

    public function products(): Products
    {
        return new Products($this->client);
    }

    public function transactions(): Transactions
    {
        return new Transactions($this->client);
    }
}
