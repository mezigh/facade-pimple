<?php
namespace Devmedia\Routing;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class UrlMatcherServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['url.matcher'] = function() { return new UrlMatcher($this->app['routeCollection'],$this->app['request.context'] );}; 
	}
}