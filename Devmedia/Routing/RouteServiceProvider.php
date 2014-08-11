<?php
namespace Devmedia\Routing;

use Devmedia\ServiceProvider;
use Devmedia\Routing\Route;
use Devmedia\Application;

class RouteServiceProvider extends ServiceProvider
{
	protected $app;
    
    public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
        $this->app['route'] = function() { return new Route($this->app['route.registered'],$this->app); };
        //$this->app['route']->routeCreateSignal = $this->app['signal'];
	}
    
    public function prepareSignal()
    {
        
    }
}