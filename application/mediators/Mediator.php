<?php

use Devmedia\Routing\ControllerSource;
use Devmedia\Application;

class Mediator extends ControllerSource
{
	protected $context;
    protected $emplacement;
	
    public function __construct()
	{
		$this->setPathForView(__DIR__.'/../views/');
        //$this->setEmplacement = __DIR__.'/../views/';
	}
    
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    }
    
	protected function setLayout(Application $app)
	{
        var_dump(get_class_methods($this) );
        echo "[CLASS]".get_class($this)." is setting the layout";
	}
	
    public function __toString()
    {
        return parent::__toString()."\\".get_class();
    }
	
}