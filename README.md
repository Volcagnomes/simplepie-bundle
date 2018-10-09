# simplepie-bundle
A Symfony bundle to ease SimplePie integration

## Installation

Add the library to your composer requirements :

`composer require volcagnomes/simplepie-bundle`

By default, this buncle creates a "simplepie" folder in your Symfony cache. You can change this by creating a "simple_pie.yaml" file in your config folder (/config/packages in SF 4.x).

This is an example :

```
simple_pie:
     cache_location: '%kernel.cache_dir%/../simplepie'
``` 

Note : If the cache folder doesn't exist, SimplePieBundle will try to create it.

## Usage

Simply inject a parameter of class `Volcagnomes\SimplePieBundle\SimplePieService` in your class constructor or your method. Call the createInstance() method on it and you'll have a working SimplePie instance ready to be used.