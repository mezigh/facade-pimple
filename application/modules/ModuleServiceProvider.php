<?php

use Devmedia\Application;
use Devmedia\ServiceProvider;

abstract class ModuleServiceProvider extends ServiceProvider
{
	protected $app;
    //protected $module;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	 public function buildRequest()
    {
        $module = $this->getModule(func_get_args());
        $this->package('app/' . $module, $module, $this->app['paths']['app'] . '/modules/' . $module);
    }
 
    public function register()
    {   
        $module = $this->getModule(func_get_args());
        
        /**
         * TODO
         * $this->app['config']->package('app/' . $module, app_path() . '/modules/' . $module . '/config');
         */
        
        $modulePath = $this->app['paths']['app'].'/modules/';
        $this->app['modules.config'] = $modulePath . $module .'/config/'.$module.'.config.php';
        $this->app['modules.routes'] = $modulePath . $module . '/routes.php';
        $this->app['modules.views'] = $modulePath . $module .'/views';
    }
 
    public function getModule($args)
    {
        $module = (isset($args[0]) and is_string($args[0])) ? $args[0] : null;
        return $module;
    }
}