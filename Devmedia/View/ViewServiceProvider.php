<?php
namespace Devmedia\View;

use Devmedia\ServiceProvider;
use Devmedia\View\View;
use Devmedia\Application;

class ViewServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['view'] = function() { return new View($this->app['paths']['view']);}; 
	}
}
