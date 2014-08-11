<?php
namespace Devmedia\Routing;

use Symfony\Component\Routing\Generator\UrlGenerator;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class UrlGeneratorServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['url.generator'] = function() { 
            return new UrlGenerator( $this->app['routeCollection'],$this->app['request.context'] ); 
            
        }; 
	}
}