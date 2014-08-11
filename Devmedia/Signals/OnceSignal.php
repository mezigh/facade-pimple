<?php namespace Devmedia\Signals;

	use Devmedia\Signals\IOnceSignal;
    //use Signals\SlotList;
    use Devmedia\Signals\Slot;
    use Devmedia\Signals\SlotManager;
	
	
	class OnceSignal implements IOnceSignal
	{
		// protected $_valueClasses;// of Class
		// protected $slots:SlotList = SlotList.NIL;  renvoyer une instance de SlotList vide toute neuve
		protected $slots;
		
		public function __construct($valueClasses = "")
		{
			// Cannot use super.apply(null, valueClasses), so allow the subclass to call super(valueClasses).
			// $params = ($this->valueClasses.length == 1 && $this->valueClasses[0] is Array) ? $this->valueClasses[0] : $this->valueClasses;
			// $params = ($this->getValueClasses().length == 1 && is_array($this->getValueClasses()[0]) ) ? $this->getValueClasses()[0] : $this->getValueClasses();
			
			// $this->setValueClasses($params);
            $this->slots = new SlotManager();
		}
		
		public function getNumListeners() 
        {
            return $this->slots->getLength();
        }
		
		public function addOnce(\Closure $listener)
		{
            return $this->registerListener($listener);
		}
		
		public function remove(\Closure $listener)
		{
			$slot = $this->slots->find($listener);
			$this->slots->removeSlot($slot);
		}
		
		public function removeAll()
		{
			$this->slots->removeAllSlots();
		}
		
		public function dispatch($valueObjects)
		{   
			$slotsToProcess = $this->slots->getList();
			if(count($slotsToProcess) > 0) {
				foreach($slotsToProcess as $slot) {
					$slot->execute($valueObjects);
				}          
			}
		}

		protected function registerListener(\Closure $listener)
		{
			if ($this->registrationPossible($listener)) {
				$newSlot = new Slot($listener, $this);
                $this->slots->setSlot($newSlot);
                $this->slots->append($newSlot);
				return $newSlot;
			} else {
                return $this->slots->find($listener);
            }
		}

		protected function registrationPossible(\Closure $listener)
		{
			$existingSlot = $this->slots->find($listener);
			if (!$existingSlot) {
                return true;
            } else {
                return false;
            }
		}
	}
    