<?php

namespace Devmedia\Routing;

class ControllerSource
{
	protected $context;
	protected $pathForViews;
    protected $filters = array();
    
    
    public function __construct()
	{
        
	}
    
    public function getPathForView()
    {
        return $this->pathForViews;
    }
    
    public function setPathForView($viewpath)
    {
        $this->pathForViews = $viewpath;
    }

    public function getContext()
    {
        return $this->context;
    }
    
    public function setContext($context)
    {
        $this->context = $context;
    }
    
    public function getFilters()
    {
        return $this->filters;
    }
    
    public function addFilter($filter)
    {
        $this->filters[] = $filter;
    }
    
    public function filter()
    {
        // TODO implementation
    }
	
	public function __call($method,$args)
	{
		//return get_class($this->context) . " calling ".get_class($this) . " -> " . $method . "(ARGS)";
		$this->$method($args);
	}
    
    public function __toString()
    {
        return get_class();
    }
	
	
}