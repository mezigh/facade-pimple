<?php namespace Devmedia\Hashing;

use Illuminate\Hashing\BcryptHasher;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class HashingServiceProvider extends ServiceProvider
{
	
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['hash'] = function() { return new BcryptHasher;};
	}
}

