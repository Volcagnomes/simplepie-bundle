<?php

namespace Volcagnomes\SimplePieBundle\Tests;

use Volcagnomes\SimplePieBundle\SimplePieBundle;
use PHPUnit\Framework\TestCase;

class SimplePieBundleTest extends TestCase
{
	/**
	 * @test
	 */
	public function testBundle()
	{
		$bundle = new SimplePieBundle();
		$this->assertInstanceOf("Volcagnomes\SimplePieBundle\SimplePieBundle", $bundle);
	}
}
