<?php
namespace Devmedia\Routing;

use Symfony\Component\Routing\RequestContext;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class RequestContextServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['request.context'] = function() { return new RequestContext();}; 
	}
}