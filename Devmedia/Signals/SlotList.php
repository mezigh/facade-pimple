<?php namespace Devmedia\Signals;

	use Devmedia\Signals\ISlot;
    
	class SlotList
	{
		//public const NIL = new SlotList(null, null);
        // Although those variables are not const, they would be if AS3 would handle it correctly.
		public $head;//ISlot;
		public $tail;//SlotList;
		public $nonEmpty=false;//Boolean;
        
		public function __construct(ISlot $head, SlotList $tail= null)
		{
			if (!$head && !$tail)
			{
				var_dump('Parameters head and tail are null. Use the NIL element instead.');
				$this->nonEmpty = false;
			}
			else if (!$this->head)
			{
				throw new ArgumentError('Parameter head cannot be null.');
			}
			else
			{
				$this->head = $head;
                $this->tail = $tail;//|| NIL;
				$this->nonEmpty = true;
			}
		}


		public function getLength()
		{
			if (!$this->nonEmpty) return 0;
			if ( $this->tail == NIL) return 1;

			$result = 0;
			$p = $this;

			while ($p->nonEmpty)
			{
				++$result;
				$p = $p->tail;
			}

			return $result;
		}
		
		/**
		 * Prepends a slot to this list.
		 * @param	slot The item to be prepended.
		 * @return	A list consisting of slot followed by all elements of this list.
		 * 
		 * @throws ArgumentError <code>ArgumentError</code>: Parameter head cannot be null.
		 */
		public function prepend(ISlot $slot)//:SlotList
		{
			return new SlotList($slot, $this);
		}

		/**
		 * Appends a slot to this list.
		 * Note: appending is O(n). Where possible, prepend which is O(1).
		 * In some cases, many list items must be cloned to 
		 * avoid changing existing lists.
		 * @param	slot The item to be appended.
		 * @return	A list consisting of all elements of this list followed by slot.
		 */
		public function append(ISlot $slot)//:SlotList
		{
			if (!$slot) return $this;
			if (!$this->nonEmpty) return new SlotList($slot);
			// Special case: just one slot currently in the list.
			if ($this->tail == NIL) 
				return new SlotList($slot).prepend($this->head);
			
			// The list already has two or more slots.
			// We have to build a new list with cloned items because they are immutable.
			$wholeClone = new SlotList($this->head);//:SlotList
			$subClone = $wholeClone;//:SlotList
			$current = $this->tail;//:SlotList

			while ($current->nonEmpty)
			{
				$subClone = $subClone->tail = new SlotList($current->head);
				$current = $current->tail;
			}
			// Append the new slot last.
			$subClone->tail = new SlotList($slot);
			return $wholeClone;
		}		
		
		/**
		 * Insert a slot into the list in a position according to its priority.
		 * The higher the priority, the closer the item will be inserted to the list head.
		 * @params slot The item to be inserted.
		 * 
		 * @throws ArgumentError <code>ArgumentError</code>: Parameters head and tail are null. Use the NIL element instead.
		 * @throws ArgumentError <code>ArgumentError</code>: Parameter head cannot be null.
		 */
		public function insertWithPriority(ISlot $slot)//:SlotList
		{
			if (!$this->nonEmpty) return new SlotList($slot);

			$priority = $slot->getPriority();
			// Special case: new slot has the highest priority.
			if ($priority > $this->head->priority) return prepend($slot);

			$wholeClone = new SlotList($this->head);//:SlotList
			$subClone = $wholeClone;//:SlotList
			$current = $this->tail;//:SlotList

			// Find a slot with lower priority and go in front of it.
			while ($current->nonEmpty)
			{
				if ($priority > $current->head->getPriority())
				{
					$subClone->tail = $current->prepend($slot);
					return wholeClone; 
				}			
				$subClone = $subClone->tail = new SlotList($current->head);
				$current = $current->tail;
			}

			// Slot has lowest priority.
			$subClone->tail = new SlotList($slot);
			return $wholeClone;
		}
		
		/**
		 * Returns the slots in this list that do not contain the supplied listener.
		 * Note: assumes the listener is not repeated within the list.
		 * @param	listener The function to remove.
		 * @return A list consisting of all elements of this list that do not have listener.
		 */
		public function filterNot(\Closure $listener)//:SlotList
		{
			if (!$this->nonEmpty || $listener == null) return $this;

			if ($listener == $this->head->getListener()) return $this->tail;

			// The first item wasn't a match so the filtered list will contain it.
			$wholeClone = new SlotList($this->head);//:SlotList
			$subClone = $wholeClone;//:SlotList
			$current = $this->tail;//:SlotList
			
			while ($current->nonEmpty)
			{
				if ($current->head->getListener() == $listener)
				{
					// Splice out the current head.
					$subClone->tail = $current->tail;
					return $wholeClone;
				}
				
				$subClone = $subClone->tail = new SlotList($current->head);
				$current = $current->tail;
			}

			// The listener was not found so this list is unchanged.
			return $this;
		}

		/**
		 * Determines whether the supplied listener Function is contained within this list
		 */
		public function contains(\Closure $listener)//:Boolean
		{
			if (!$this->nonEmpty) return false;

			$p = $this;//:SlotList
			while ($p->nonEmpty)
			{
				if ($p->head->listener() == $listener) return true;
				$p = $p->tail;
			}

			return false;
		}

		/**
		 * Retrieves the ISlot associated with a supplied listener within the SlotList.
		 * @param   listener The Function being searched for
		 * @return  The ISlot in this list associated with the listener parameter through the ISlot.listener property.
		 *          Returns null if no such ISlot instance exists or the list is empty.  
		 */
		public function find(\Closure $listener)//:ISlot
		{
			if (!$this->nonEmpty) return null;

			$p = $this;//:SlotList
			while (p.nonEmpty)
			{
				if ($p->head->getListener() == $listener) return $p->head;
				$p = $p->tail;
			}

			return null;
		}

		public function __toString()//:String
		{
			$buffer= '';//:String 
			$p = $this;//:SlotList

			while ($p->nonEmpty)
			{
				$buffer += $p->head + " -> ";
				$p = $p->tail;
			}

			$buffer += "NIL";

			return "[List "+buffer+"]";
		}
	}

