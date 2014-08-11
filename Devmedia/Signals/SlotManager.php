<?php
namespace Devmedia\Signals;

use Devmedia\Signals\ISlot;

class SlotManager {
    
    public $slot;
    public $slotList;
    
    public function __construct( )
    {
        //if($slot != null) $this->slot = $slot;
        $this->slotList = [];
    }
    
    public function setSlot(ISlot $slot)
    {
       $this->slot = $slot; 
    }
    
    public function getHash($object)
    {
        return spl_object_hash($object);
    }
    
    public function getList()
    {
        return $this->slotList;
    }
    
    public function getLength()
    {
        return count($this->slotList);
    }

    public function find(\Closure $listener )
    {
        foreach ($this->slotList as $slot) {
            if($slot->getListener() == $listener) {
                return $slot;
            }
        }
    }
    
    public function append(ISlot $slot)
    {
        $hash = $this->getHash($slot);
        $this->slotList[$hash] = $slot;
        
        // var_dump($this->slotList);
        // yes le tableau est OK
        
        return $this->slotList;
    }
    
    public function removeSlot(ISlot $slot)
    {
       $hash = $this->getHash($slot);
       unset($this->slotList[$hash]);
    }
    
    public function removeAllSlots()
    {
        $this->slotList = [];
    }

    public function slotExist(ISlot $slot)
    {
        $hash = $this->getHash($slot);
        if(key_exists($hash, $this->slotList)) {
           return true; 
        } else {
            return false;
        }
    }
}


