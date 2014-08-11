<?php namespace Devmedia\FileSystem;

use Symfony\Component\Filesystem\Filesystem as SymfonyFilesystem;
use Devmedia\ServiceProvider;
use Devmedia\Application;

class FileSystemServiceProvider extends ServiceProvider
{
	
	protected $app;
	
	public function __construct(Application $app)
	{
		$this->app = $app;
	}
	
	public function register()
	{
		$this->app['file'] = function() { return new SymfonyFilesystem;};
	}
}