<?php

namespace Solidconcept\ContaoHelloWorldBundle\Test;

use Solidconcept\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();
        $this->assertInstanceOf('Solidconcept\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}