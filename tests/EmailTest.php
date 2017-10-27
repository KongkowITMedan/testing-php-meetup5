<?php

declare(strict_types=1);

namespace Kitm\Meetup5\Tests;

use Kitm\Meetup5\Email;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertSame(
            'user@example.com',
            (string) Email::fromString('user@example.com')
        );
    }
}