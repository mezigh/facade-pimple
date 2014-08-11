<?php namespace Devmedia\Signals;

	
	interface IOnceSignal
	{
		
		//function getValueClasses();
		//function setValueClasses(Array $value);
		
		function getNumListeners();
		
		
		function addOnce( \Closure $listener);//:ISlot;

		
		function dispatch($valueObjects);
		
		
		function remove(\Closure $listener);//:ISlot;

		
		function removeAll();
	}

