<?php
namespace Devmedia\WebFoundation;

use Symfony\Component\HttpFoundation\JsonResponse;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class JsonResponseServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
        $this->app['json.response'] = function() {return new JsonResponse;};
	}
	

}