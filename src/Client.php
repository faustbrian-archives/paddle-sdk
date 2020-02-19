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

namespace KodeKeep\Paddle;

use KodeKeep\Paddle\Api\Alert;
use KodeKeep\Paddle\Api\Checkout;
use KodeKeep\Paddle\Api\Product;
use KodeKeep\Paddle\Api\Subscription;

class Client
{
    private string $vendorId;

    private string $vendorAuthCode;

    public function __construct(string $vendorId, string $vendorAuthCode)
    {
        $this->vendorId       = $vendorId;
        $this->vendorAuthCode = $vendorAuthCode;
    }

    public function getVendorId(): string
    {
        return $this->vendorId;
    }

    public function getVendorAuthCode(): string
    {
        return $this->vendorAuthCode;
    }

    public function checkout(): Checkout
    {
        return new Checkout($this);
    }

    public function alert(): Alert
    {
        return new Alert($this);
    }

    public function product(): Product
    {
        return new Product($this);
    }

    public function subscription(): Subscription
    {
        return new Subscription($this);
    }
}
