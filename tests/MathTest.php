<?php

declare(strict_types=1);

namespace Kitm\Meetup5\Tests;

use Kitm\Meetup5\Math;
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertSame(5.0, Math::add(3, 2));
    }

    public function testSub(): void
    {
        $this->assertSame(3.0, Math::sub(5, 2));
    }

    public function testMul(): void
    {
        $this->assertSame(20.0, Math::mul(4, 5));
    }

    public function testDiv(): void
    {
        $this->assertSame(2.0, Math::div(10, 5));
    }
}
