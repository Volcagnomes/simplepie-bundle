<?php

namespace Volcagnomes\SimplePieBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
	use Volcagnomes\SimplePieBundle\Exception\InvalidCachePathException;

	class SimplePieService
	{
		private $container;

		/**
		 * SimplePieService constructor.
		 */
		public function __construct(ContainerInterface $container)
		{
			$this->container = $container;
		}

		/**
		 * Creates a SimplePie Instance.
		 *
		 * @return \SimplePie
		 *
		 * @throws InvalidCachePathException
		 */
		public function createInstance()
		{
			//Creating instance
			$simplePie = new \SimplePie();
			//Injecting the cache path
			$cache_path = $this->container->getParameter('simple_pie.cache_location');

			//Check if cache path exists and create it otherwise
			if (!file_exists($cache_path)) {
				try {
					mkdir($cache_path);
				} catch (Exception $e) {
					throw new InvalidCachePathException("Couldn't create SimplePie's cache path at ".$cache_path);
				}
			}

			//check if cache path is a folder
			if (!is_dir($cache_path)) {
				throw new InvalidCachePathException("SimplePie's cache path isn't a dir at ".$cache_path);
			}

			//check if cache path is writable
			if (!is_writable($cache_path)) {
				throw new InvalidCachePathException("Couldn't write to SimplePie's cache path at ".$cache_path);
			}

			$simplePie->set_cache_location($cache_path);

			return $simplePie;
		}
	}
