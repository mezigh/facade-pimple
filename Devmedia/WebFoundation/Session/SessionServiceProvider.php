<?php
namespace Devmedia\WebFoundation\Session;

use Symfony\Component\HttpFoundation\Session\Session as SymfonySession;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class SessionServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['session'] = function() { return new SymfonySession; };
	}
}