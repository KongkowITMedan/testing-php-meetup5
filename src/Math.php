<?php

declare(strict_types=1);

namespace Kitm\Meetup5;

final class Math
{
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function sub(float $a, float $b): float
    {
        return $a - $b;
    }

    public static function mul(float $a, float $b): float
    {
        return $a * $b;
    }

    public static function div(float $a, float $b): float
    {
        return $a / $b;
    }
}
