<?php
namespace Devmedia\DataOrm;

use Illuminate\Database\Capsule\Manager as Capsule;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class CapsuleServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['capsule'] =  $this->app->share(function() { return new Capsule;}); 
        $this->boot();
	}
    /**
     * TODO ABSTRACTION TO A CAPSULE MANAGER
     */
    public function boot()
    {
        $driver = $this->app['config']->getItem('database')['default'];
        $dbConnexion = $this->app['config']->getItem('database')['connections'][$driver];
        $this->app['capsule']->addConnection($dbConnexion);
        $this->app['capsule']->bootEloquent();
    }
}