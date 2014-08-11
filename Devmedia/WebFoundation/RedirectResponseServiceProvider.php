<?php
namespace Devmedia\WebFoundation;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class RedirectResponseServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['redir.response'] = function() { return new RedirectResponse('http://dev-media.fr'); };
	}
	

}