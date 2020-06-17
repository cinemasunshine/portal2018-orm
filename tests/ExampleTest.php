<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Example test
 */
final class ExampleTest extends TestCase
{
    /**
     * test success
     *
     * @test
     * @return void
     */
    public function testSuccess()
    {
        $this->assertTrue(true);
    }

    /**
     * test failure
     *
     * @test
     * @return void
     */
    public function testFailure()
    {
        $this->assertTrue(false);
    }
}
