<?php

namespace Devmedia\Routing;

use Devmedia\Application;

class Router
{
    protected $routes;
    


    public function __construct(Application $app)
    {
        $this->routes = $app['routeCollection'];
    }
    
    /**
     * Adding Route Object to RouteCollection
     * 
     * @param type $url
     * @param type $route
     */
    
    public function addToRouteCollection($url,$route)
    {
        $this->routes->add($url,$route);
    }
    
    public function getRoutes()
    {
        return $this->routes;
    }
    
}