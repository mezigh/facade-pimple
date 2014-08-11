<?php

namespace Devmedia\Routing;

use Symfony\Component\Routing\Route as SymfonyRoute;

class Route
{
    private $urlPath;
    private $symfonyRoute;
    public $initSignal;
    public $app;
    private $prefix;
    private $before;
    private $after;
    
    public function __construct($signal,$app)
    {
        $this->initSignal = $signal;
        $this->app = $app;
        $this->app->onRouteSignal( $this->getSignal() );
        //$this->initSignal->add( function($route,$url) use($app){ $app->addRoute($url,$route); } );
    }
    
    public function getSignal()
    {
        return $this->initSignal;
    }
    
    public function getUrlPath()
    {
        return $this->urlPath;
    }
    
    public function setUrlPath($path)
    {
        $this->urlPath=$path;
    }
    
    public function getPrefix()
    {
        return $this->prefix;
    }
    
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }
    
    public function getBefore()
    {
        return $this->before;
    }

    public function setBefore($before)
    {
        $this->before = $before;
    }

    public function getAfter()
    {
        return $this->after;
    }

    public function setAfter($after)
    {
        $this->after = $after;
    }
    
    public function before($key,$value)
    {
    
    }
    
    public function after()
    {
        
    }

    public function get($urlPath, $controller)
    {
        $this->toSymfonyRoute($urlPath, 'GET' ,$controller);
    }
    
    public function post($urlPath, $controller)
    {
        $this->toSymfonyRoute($urlPath, 'POST' ,$controller);
    }
    
    public function put($urlPath, $controller)
    {
       $this->toSymfonyRoute($urlPath, 'PUT' ,$controller);
    }
    
    public function delete($urlPath, $controller)
    {
       $this->toSymfonyRoute($urlPath, 'DELETE' ,$controller);
    }
    
    public function group(array $params,  \Closure $controller)
    {
        $this->setPrefix($params['prefix']);
        //$this->setBefore($params['before']);
        //$this->setAfter($params['after']);
        call_user_func($controller);
        $this->setPrefix('');
    }
    
    public function addToGroup($urlPath,$method,$controller)
    {
       $this->toSymfonyRoute($urlPath, $method ,$controller);  
    }
    
    public function toSymfonyRoute($urlPath, $method , $controller)
    {
        $prefix = $this->getPrefix();
        // $before = $this->getBefore();
        $this->symfonyRoute = new SymfonyRoute($prefix.$urlPath, array("_controller" => $controller , "_method"=>"GET"));
        $this->initSignal->dispatch(array($this->symfonyRoute,$prefix.$urlPath,$this));
        
        return $this->symfonyRoute;
        
    }
    
}
