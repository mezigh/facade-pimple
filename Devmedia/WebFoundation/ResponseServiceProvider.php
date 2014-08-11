<?php
namespace Devmedia\WebFoundation;

use Symfony\Component\HttpFoundation\Response;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class ResponseServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['response'] = function() { return new Response; };
	}
}