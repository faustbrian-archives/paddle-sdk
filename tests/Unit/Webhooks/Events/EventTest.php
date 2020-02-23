<?php

declare(strict_types=1);

/*
 * This file is part of Paddle.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Paddle\Tests\Unit\Webhooks\Events;

use Illuminate\Support\Str;
use KodeKeep\Paddle\Webhooks\Events\Event;
use KodeKeep\Paddle\Webhooks\Events\HighRiskTransactionCreated;
use KodeKeep\Paddle\Webhooks\Events\HighRiskTransactionUpdated;
use KodeKeep\Paddle\Webhooks\Events\LockerProcessed;
use KodeKeep\Paddle\Webhooks\Events\NewAudienceMember;
use KodeKeep\Paddle\Webhooks\Events\PaymentDisputeClosed;
use KodeKeep\Paddle\Webhooks\Events\PaymentDisputeCreated;
use KodeKeep\Paddle\Webhooks\Events\PaymentRefunded;
use KodeKeep\Paddle\Webhooks\Events\PaymentSucceeded;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionCancelled;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionCreated;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionPaymentFailed;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionPaymentRefunded;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionPaymentSucceeded;
use KodeKeep\Paddle\Webhooks\Events\SubscriptionUpdated;
use KodeKeep\Paddle\Webhooks\Events\TransferCreated;
use KodeKeep\Paddle\Webhooks\Events\TransferPaid;
use KodeKeep\Paddle\Webhooks\Events\UpdateAudienceMember;
use PHPUnit\Framework\TestCase;

/**
 * @covers \KodeKeep\Paddle\Webhooks\Events\Event
 */
class EventTest extends TestCase
{
    /** @test */
    public function it_can_handle_the_high_risk_transaction_created_event(): void
    {
        $this->assertEventIsHandled(HighRiskTransactionCreated::class);
    }

    /** @test */
    public function it_can_handle_the_high_risk_transaction_updated_event(): void
    {
        $this->assertEventIsHandled(HighRiskTransactionUpdated::class);
    }

    /** @test */
    public function it_can_handle_the_locker_processed_event(): void
    {
        $this->assertEventIsHandled(LockerProcessed::class);
    }

    /** @test */
    public function it_can_handle_the_new_audience_member_event(): void
    {
        $this->assertEventIsHandled(NewAudienceMember::class);
    }

    /** @test */
    public function it_can_handle_the_payment_dispute_closed_event(): void
    {
        $this->assertEventIsHandled(PaymentDisputeClosed::class);
    }

    /** @test */
    public function it_can_handle_the_payment_dispute_created_event(): void
    {
        $this->assertEventIsHandled(PaymentDisputeCreated::class);
    }

    /** @test */
    public function it_can_handle_the_payment_refunded_event(): void
    {
        $this->assertEventIsHandled(PaymentRefunded::class);
    }

    /** @test */
    public function it_can_handle_the_payment_succeeded_event(): void
    {
        $this->assertEventIsHandled(PaymentSucceeded::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_cancelled_event(): void
    {
        $this->assertEventIsHandled(SubscriptionCancelled::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_created_event(): void
    {
        $this->assertEventIsHandled(SubscriptionCreated::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_payment_failed_event(): void
    {
        $this->assertEventIsHandled(SubscriptionPaymentFailed::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_payment_refunded_event(): void
    {
        $this->assertEventIsHandled(SubscriptionPaymentRefunded::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_payment_succeeded_event(): void
    {
        $this->assertEventIsHandled(SubscriptionPaymentSucceeded::class);
    }

    /** @test */
    public function it_can_handle_the_subscription_updated_event(): void
    {
        $this->assertEventIsHandled(SubscriptionUpdated::class);
    }

    /** @test */
    public function it_can_handle_the_transfer_created_event(): void
    {
        $this->assertEventIsHandled(TransferCreated::class);
    }

    /** @test */
    public function it_can_handle_the_transfer_paid_event(): void
    {
        $this->assertEventIsHandled(TransferPaid::class);
    }

    /** @test */
    public function it_can_handle_the_update_audience_member_event(): void
    {
        $this->assertEventIsHandled(UpdateAudienceMember::class);
    }

    private function assertEventIsHandled(string $event): void
    {
        $file = realpath(__DIR__.'/../../../fixtures/webhooks/'.Str::snake(class_basename($event)).'.json');

        $fixture = \json_decode(\file_get_contents($file), true);

        $this->assertInstanceOf($event, Event::new($fixture));
    }
}
