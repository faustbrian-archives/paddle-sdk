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

namespace KodeKeep\Paddle\Webhooks\Events;

use Illuminate\Support\Str;
use InvalidArgumentException;
use JsonException;

abstract class Event
{
    private $data;

    private function __construct(array $data)
    {
        $this->data = $data;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function __get(string $key)
    {
        $value = $this->data[$key];

        if ($key === 'passthrough') {
            try {
                return \json_decode($value, true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
                return $value;
            }
        }

        return $value;
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    public static function new(array $data)
    {
        $event = Str::studly($data['alert_name']);

        $eventClass = __NAMESPACE__.'\\'.$event;

        if (! class_exists($eventClass)) {
            throw new InvalidArgumentException("Class [{$eventClass}] does not exist.");
        }

        return new $eventClass($data);
    }
}
