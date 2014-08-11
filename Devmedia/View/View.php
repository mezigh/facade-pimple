<?php
namespace Devmedia\View;

class View
{
    public $viewPath;
    private $params;
    private $viewName;
    public $builded;
    private $addViewParam;
       
    public function __construct($viewPath)
	{
        $this->viewPath = $viewPath;
        $this->builded = false;
	}
    
    public function getViewPath()
    {
        return $this->viewPath;
    }
    
    public function setViewPath($viewPath)
    {
        $this->viewPath = $viewPath;
    }
    
    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getViewName()
    {
        return $this->viewName;
    }

    public function setViewName($viewName)
    {
        $this->viewName = $viewName;
    }
    
    public function getAddViewParam()
    {
        return $this->addViewParam;
    }

    public function setAddViewParam($addViewParam)
    {
        $this->addViewParam = $addViewParam;
    }
	
    public function make($viewName,$data = array(),$asset=null)
	{   
        $this->preRender($viewName,$data,$asset);
        return $this;
	}
    
    public function preRender($viewName,$data = array(),$asset=null)
    {
        $this->setViewName($viewName);
        $this->setAddViewParam($asset);
        $this->setParams($data);
    }
	
	public function with($params)
    {  
        $this->setParams($params);
        $this->render($this->getViewName(),$this->getParams(),$this->getAddViewParam());
	}
    
    public function render($viewName,$with=array(),$asset )
	{
        ob_start();
        $roles = $with;
        
        require $this->viewPath."/".$viewName . '.php';
        
        if(isset($template)) {
            
            $content = ob_get_clean();
            
            $assetPath =  'http://localhost:8000/public/';
            
            require $this->viewPath."/layouts/".$template.".php";
            
            $response = $content;
            
        } else {
            
            $response = ob_get_clean();
            
        }
        
        $this->builded = true;
        
        return $response;
	}
    
    /*
    public function __get($name)
    {
        var_dump("__get says ".$name) ;
    }
    
    public function __set($name, $value)
    {
        var_dump("__set says ".$name) ;
        var_dump($value) ;  
    }
    */
    public function __toString()
    {
        return get_class($this);
    }
}