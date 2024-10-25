<?php

declare(strict_types=1);

namespace MirandaCalls\Test\HelloWorld;

use MirandaCalls\HelloWorld\Example;

class ExampleTest extends TestCase
{
    public function testGreet(): void
    {
        $example = $this->mockery(Example::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }

    public function testFarewell(): void
    {
        $example = $this->mockery(Example::class);
        $example->shouldReceive('farewell')->passthru();

        $this->assertSame('Farewell, Friends!', $example->farewell('Friends'));
    }
}
