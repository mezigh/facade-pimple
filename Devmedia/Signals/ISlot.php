<?php namespace Devmedia\Signals;

	
	interface ISlot
	{
		function getListener();//:Function;
		function setListener(\Closure $value);//:void;
		
		function getParams();//:Array;
		function setParams($value);//:void;

		//function getOnce();//:Boolean;
		//function getPriority();//:int;
		
		function getEnabled();//:Boolean;
		function setEnabled($value);//:void; $value :Boolean
		
		function execute0();//:void;		
        function execute1($value);//function execute1(value:Object);//:void;	
		function execute($valueObjects);//:void;
		
		function remove();//:void;
	}

