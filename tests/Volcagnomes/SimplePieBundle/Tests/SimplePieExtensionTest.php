<?php

namespace Volcagnomes\SimplePieBundle\Tests;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Volcagnomes\SimplePieBundle\DependencyInjection\SimplePieExtension;

class SimplePieExtensionTest extends AbstractExtensionTestCase
{
	public function getContainerExtensions()
	{
		return [
				new SimplePieExtension(),
			];
	}

	/**
	 * @test
	 */
	public function testLoad()
	{
		$this->load();
		$this->assertContainerBuilderHasParameter('simple_pie.cache_location', '%kernel.cache_dir%/../simplepie');
		$this->assertContainerBuilderHasService('simplepiebundle.service', 'Volcagnomes\SimplePieBundle\Service\SimplePieService');
	}
}
