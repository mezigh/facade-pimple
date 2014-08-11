<?php namespace Devmedia\Signals;

use Devmedia\Signals\Signal;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class SignalServiceProvider extends ServiceProvider
{
	/* const REQUEST = 'kernel.request';
	const EXCEPTION = 'kernel.exception';
	const VIEW = 'kernel.view';
	const CONTROLLER = 'kernel.controller';
	const RESPONSE = 'kernel.response';
	const TERMINATE = 'kernel.terminate';
	const FINISH_REQUEST = 'kernel.finish_request'; */
	
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['signal'] = function() { return new Signal("default");};
	}
}

