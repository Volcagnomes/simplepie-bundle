<?php

	use Volcagnomes\SimplePieBundle\Exception\InvalidCachePathException;
	use PHPUnit\Framework\TestCase;

	class InvalidCachePathExceptionTest extends TestCase
	{
		public function testClass()
		{
			$exception = new InvalidCachePathException('This is a test');
			$this->assertInstanceOf("Volcagnomes\SimplePieBundle\Exception\InvalidCachePathException", $exception);
			$this->assertEquals('This is a test', $exception->getMessage());
		}
	}
