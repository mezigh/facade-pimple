<?php

namespace Devmedia\Auth;

use Illuminate\Auth\AuthManager;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class AuthServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['auth'] = $this->app->share( function() { return new AuthManager;} ); 
	}
}