<?php
namespace Devmedia\WebKernel;

use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class ControllerResolverServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['controller.resolver'] = $this->app->share( function() { return new ControllerResolver; });
	}
	
}