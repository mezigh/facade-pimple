<?php

class CmsMediator extends \Mediator
{
	public $context;
    public $viewPath;
	
	public function __construct()
	{
        $this->setContext("modules");
        $this->viewPath = __DIR__.'/../views/';
        parent::__construct();//$this->context = $context;
        View::setViewPath($this->viewPath);
	}
	
    public function setLayout(Devmedia\Application $app)
	{

        $roles = Role::all();
        return Response::setContent( View::make("cms",$roles,$this->viewPath )->with($roles) );
	}
    
    public function showUsers(Devmedia\Application $app)
    {
        $users = User::all();
        return Response::setContent( View::make("users",  $users , $this->viewPath)->with($users) );
    }
    
    public function showPages(Devmedia\Application $app)
    {
        $users = User::all();
        return Response::setContent( View::make("pages",  $users , $this->viewPath)->with($users) );
    }
   
    public function __toString()
    {
        return parent::__toString()."\\".get_class();
    }
    
}