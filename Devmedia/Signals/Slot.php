<?php namespace Devmedia\Signals;

use Devmedia\Signals\ISlot;
use Devmedia\Signals\IOnceSignal;
    
	class Slot implements ISlot
	{
		protected $signal;//:IOnceSignal;
		protected $enabled = true;//:Boolean
		protected $listener;//:Function;
		//protected $once = false;//:Boolean
		//protected $priority = 0;
		protected $params;//:Array;
		
		
		public function __construct(\Closure $listener, IOnceSignal $signal)//, $once = false, $priority = 0
		{
			$this->listener = $listener;
			//$this->once = $once;
			$this->signal = $signal;
			//$this->priority = $priority;			
			$this->verifyListener($listener);
		}
		
		
		public function execute0()//:void
		{
			if (!$this->enabled) return;
			//if ($this->once) remove();
			if ($this->params && $this->params.length)
			{
				$this->listener.apply(null, $this->params);
				return;
			}
			$this->listener();
		}		
		
		public function execute1($value)//:void
		{
			if (!$this->enabled) return;
			//if ($this->once) remove();
            
			if ($this->params && $this->params.length)
			{
				$this->listener.apply(null, [$value].concat($this->params));
				return;
			}
			$this->listener($value);
		}		
		
		public function execute($valueObjects)//:void
		{
			
            if (!$this->enabled) return;
			//if ($this->once) remove();
			
			// If we have parameters, add them to the valueObject
			// Note: This could be expensive if we're after the fastest dispatch possible.
			if ($this->params && $this->params.length)
			{
				// >>>>>>>>>>>>>>> valueObjects = $valueObjects.concat($this->params);
			}
			
			// STRATEGY DESIGN PATTERN
			
			$numValueObjects = count($valueObjects);
			if ($numValueObjects == 0) {
				//var_dump('no argt');
                $fire = $this->getListener();
                $fire();
			}
			else if ($numValueObjects == 1) {
				//var_dump('single argt');
                $fire = $this->getListener($valueObjects[0]);
                $fire($valueObjects[0]);
			}
			else if ($numValueObjects == 2) {
				//var_dump('duo argt');
                $fire = $this->getListener();
				//var_dump($valueObjects[0]);
				//var_dump($valueObjects[1]);
                $fire($valueObjects[0],$valueObjects[1]);
			}
			else if ($numValueObjects == 3) {
				//var_dump('tri argt');
                $fire = $this->getListener();
                $fire($valueObjects[0],$valueObjects[1],$valueObjects[2]);
			} else {
				//$this->listener.apply(null, $valueObjects);
			}
		}

		
		public function getListener() { return $this->listener;}// :Function
		public function setListener(\Closure $value) {
			if($this->verifyListener($value)) {
                $this->listener = $value;
            } else {
                var_dump("verifyListener returns ALREADY EXISTS");
            }
		}

		//public function getOnce() { return $this->once; }//:Boolean
		//public function getPriority() { return $this->priority; }
		
		public function __toString()//:String
		{
			//return "[Slot listener: "+$this->listener+", once: "+$this->once + ", priority: "+$this->priority+", enabled: "+$this->enabled+"]";
            return get_class($this);
		}

		
		public function getEnabled() { return $this->enabled; }//:Boolean
		public function setEnabled($value) { $this->enabled = $value; }
			
		public function getParams() { return $this->params; } //:Array
		public function setParams($value) { $this->params = $value; }//:void
		
		
		public function remove()//:void
		{
			$this->signal.remove($this->listener);
		}

		protected function verifyListener(\Closure $listener)//: void
		{
			if ($listener == null)
			{
				return false;//throw new ArgumentError('Given listener is null.');
			}

			if ( $this->signal == null)
			{
				return false;//throw new Error('Internal signal reference has not been set yet.');
			}
			return true;
		}
	}