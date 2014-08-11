<?php

namespace Devmedia\Config;

class Configurator
{
    private $data = array();
    protected $configItems;
    protected $finder;
    
    public function __construct(\Symfony\Component\Finder\Finder $finder)
    {
        $this->finder = $finder;
    }
    
    public function buildConfig($path)
    {
        return $this->prepareLoadConfigFiles($path);
    }
    
    protected function prepareLoadConfigFiles($paths)
    {
         if(is_array($paths)) {
             foreach ($paths as $path) {
                  $this->loadConfigFiles($path);
             }
        } else {
            $this->loadConfigFiles($paths);
        }
        return $this->configItems;
    }
    
    protected function loadConfigFiles($path)
    {   
        $finder = $this->finder;
        $finder->files()->in($path);
        foreach ($finder as $file) {
            if($file->getRelativePathname()!== 'start.php' ) {
                $index = str_replace(".php","", $file->getRelativePathname() );
                $this->addItem($index , $file->getRealpath());
            }
        }
    }
    
    public function getItem($item)
    {
        return $this->configItems[$item];
    }
    
    public function getConfigItems()
    {
        return $this->configItems;
    }
    
    public function addItem($index,$item)
    {
        $this->configItems[$index] = require $item;
    }
    
    public function data()
    {
        return $this->data;
    }
    
    public function __get($name)
    {
        return $this->data[$name];
    }
    
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    
    public function __toString()
    {
        return get_class($this);
    }
    
  
}
