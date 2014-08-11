<?php
namespace Devmedia\Utility;

use Devmedia\ServiceProvider;
use Illuminate\Support\Collection;
use Devmedia\Application;

class CollectionServiceProvider extends ServiceProvider
{
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['collection'] = function() { return new Collection;}; 
	}
}
