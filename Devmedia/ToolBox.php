<?php

namespace Devmedia;

class ToolBox implements \ArrayAccess  ,\Countable , \Serializable , Visitor
{
    protected $resolvedInstances = array();
    protected $registeredProviders = array();
    protected $container = array();
    protected $bag = array();
    protected $context;
    
    public function __construct($context)
    {
        $this['context'] = $context;
        //var_dump($this['context']);
    }

    public function visit(Visitable $visitee)
    {
        $this->watch($visitee);
    }
    
    public function watch($expression)
    {
        var_dump("XXX BEGIN WATCH XXX");
        var_dump( get_class($expression ));
        
        foreach($expression as $key => $value) {
            var_dump($key,$value);
        }

        $this->explore($expression);
        var_dump("XXX END WATCH XXX");
    }
    
    public function explore($elem)
    {
        $class = get_class($elem);
        var_dump("XXX BEGIN EXPLORE XXX");

        var_dump(get_class_methods($class));
        var_dump("XXX END EXPLORE XXX");
    }
    


    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function count()
    {
        return count($this->container);
    }
    
    public function serialize()
    {
        return serialize($this->container);
    }
    
    public function unserialize($data)
    {
        $this->container = unserialize($data);
    }
    
}