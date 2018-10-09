<?php

namespace Volcagnomes\SimplePieBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('simple_pie');

		$rootNode
				->children()
					->scalarNode('cache_location')->defaultValue('%kernel.cache_dir%/../simplepie')->end()
					->end()
				->end()
			;

		return $treeBuilder;
	}
}
