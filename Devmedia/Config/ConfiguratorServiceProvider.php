<?php
namespace Devmedia\Config;

use Devmedia\Config\Configurator;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class ConfiguratorServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['configurator'] = $this->app->share( function() { return new Configurator;} ); 
	}
}