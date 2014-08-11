<?php

namespace Devmedia;

use Illuminate\Support\Manager as LaravelManager;

abstract class Manager extends LaravelManager
{   
    protected $app;
    
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
    
    
    
}