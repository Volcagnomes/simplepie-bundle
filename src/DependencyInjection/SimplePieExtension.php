<?php

namespace Volcagnomes\SimplePieBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class SimplePieExtension extends Extension
{
	/**
	 * Loads a specific configuration.
	 *
	 * @param array            $configs
	 * @param ContainerBuilder $container
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new XmlFileLoader(
				$container,
				new FileLocator(__DIR__.'/../Resources/config')
			);

		$loader->load('services.xml');

		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);

		$container->setParameter('simple_pie.cache_location', $config['cache_location']);
	}

	public function getAlias()
	{
		return 'simple_pie';
	}

	public function getConfiguration(array $config, ContainerBuilder $container)
	{
		return new Configuration();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getNamespace()
	{
		return 'simple_pie';
	}
}
