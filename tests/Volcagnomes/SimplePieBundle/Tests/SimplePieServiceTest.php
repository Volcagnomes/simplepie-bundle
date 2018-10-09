<?php

namespace Volcagnomes\SimplePieBundle\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SimplePieServiceTest extends KernelTestCase
{
	/**
	 * @test
	 */
	public function testCreateInstance()
	{
		$kernel = self::bootKernel();

		$simplepieService = new SimplePieService(self::$container);
		$simplePie = $simplepieService->createInstance();
		$this->assertInstanceOf("\SimplePie", $simplePie);
	}

	/**
	 * @test
	 */
	public function test__construct()
	{
		$kernel = self::bootKernel();

		$simplepieService = new SimplePieService(self::$container);
		$this->assertInstanceOf("Volcagnomes\SimplePieBundle\Service\SimplePieService", $simplepieService);
	}
}
