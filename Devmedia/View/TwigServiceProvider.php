<?php
namespace Devmedia\View;

use Devmedia\ServiceProvider;
use Devmedia\Application;

class TwigServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		\Twig_Autoloader::register();
        $viewpath = $this->app['paths']['app'].'/modules/cms/views/';
        $loader = new \Twig_Loader_Filesystem($viewpath);
        $this->app['twig'] = function() { return new \Twig_Environment($loader);}; 
	}
}
