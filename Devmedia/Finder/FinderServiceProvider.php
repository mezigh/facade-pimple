<?php namespace Devmedia\Finder;

use Symfony\Component\Finder\Finder as SymfonyFinder;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class FinderServiceProvider extends ServiceProvider
{
	
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['finder'] = function() { return new SymfonyFinder; };
	}
}

