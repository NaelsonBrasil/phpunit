<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;


final class DependencyFailureTest extends TestCase
{
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo(): void
    {
        $this->assertTrue(true);
    }
}
