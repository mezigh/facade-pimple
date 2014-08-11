<?php
namespace Devmedia\Routing;

use Symfony\Component\Routing\RouteCollection;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class RouteCollectionServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['routeCollection'] = $this->app->share( function(){return new RouteCollection;});
	}
	

}