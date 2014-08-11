<?php
namespace Devmedia\WebFoundation;

use Symfony\Component\HttpFoundation\Request;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class RequestServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['request'] = function() {return Request::createFromGlobals();};
	}
	

}