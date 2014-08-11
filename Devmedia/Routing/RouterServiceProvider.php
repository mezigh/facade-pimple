<?php
namespace Devmedia\Routing;

use Devmedia\Routing\Router;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class RouterServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
        $this->app['router'] = $this->app->share( function() { return new Router($this->app); } ); 
        //$this->app->share( function(){return new Router($app);});
	} 
}