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

class ErrorCodes
{
    private static array

 $values = [
        100 => 'Unable to find requested license',
        101 => 'Bad method call',
        102 => 'Bad api key',
        103 => 'Timestamp is too old or not valid',
        104 => 'License code has already been utilized',
        105 => 'License code is not active',
        106 => 'Unable to find requested activation',
        107 => 'You don’t have permission to access this resource',
        108 => 'Unable to find requested product',
        109 => 'Provided currency is not valid',
        110 => 'Unable to find requested purchase',
        111 => 'Invalid authentication token',
        112 => 'Invalid verification token',
        113 => 'Invalid padding on decrypted string',
        114 => 'Invalid or duplicated affiliate',
        115 => 'Invalid or missing affiliate commision',
        116 => 'One or more required arguments are missing',
        117 => 'Provided expiration time is incorrect',
        118 => 'Price is too low',
        119 => 'Unable to find requested subscription',
        120 => 'Request failed due to internal error',
        121 => 'Unable to find requested payment',
        122 => 'Provided date is not valid',
        123 => 'Unable to find requested modifier',
        124 => 'Modifiers that have already been paid cannot be altered or deleted',
        125 => 'Main currency price was not provided',
        126 => 'A valid email address is required, please try again',
        127 => 'The given coupon type is not recognised. The only valid types are flat and percentage.',
        128 => 'The given percentage is not valid. The percentage must be a number less than 100.',
        129 => 'The given amount is not a valid flat amount. The amount must be a number equal to or greater than 0.01.',
        130 => 'The allowed uses must be a number.',
        131 => 'The given coupon code is invalid. The code must have at least 5 characters.',
        132 => 'The given coupon code has already been used for the product.',
        133 => 'The given coupon expiration date is invalid. The expected date format is “Y-m-d”.',
        134 => 'The given coupon currency is invalid. The currency must be one of the currencies of your product.',
        135 => 'Unable to find requested coupon',
        136 => 'Allowed uses cannot be less than times used.',
        137 => 'The allowed uses must be a number greater than or equal to 0.',
        138 => 'The expires at value must be either not provided or a future date in the format of Y-m-d.',
        139 => 'The given prices format is not valid. The prices must have the format of [‘currency:amount’, ‘currency:amount’, …].',
        140 => 'The given currency code is unknown to our checkout system.',
        141 => 'Either a product ID or a plan ID should be given, not both.',
        142 => 'The given recurring prices format is not valid. The recurring prices must have the format of [‘currency:amount’, ‘currency:amount’, …].',
        143 => 'Recurring price is too low',
        144 => 'Affiliate split sum must total less than 100%',
        145 => 'Recurring affiliate split must either be not set, or set to an integer equal to or greater than 1.',
        146 => 'The current invoice of this subscription is currently being processed, and cannot be updated at this time',
        147 => 'We were unable to complete the resubscription because we could not charge the customer for the resubscription',
        148 => 'The resubscription requires immediate billing so we cannot complete your request',
        149 => 'The plan interval is invalid',
        150 => 'Initial price is too low',
    ];

    public static function get(int $code): string
    {
        return static::$values[$code];
    }

    public static function has(int $code): bool
    {
        return ! empty(static::$values[$code]);
    }
}
