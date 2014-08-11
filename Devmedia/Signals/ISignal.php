<?php 
namespace Devmedia\Signals;

use Devmedia\Signals\IOnceSignal;
	
interface ISignal extends IOnceSignal
{

    function add( \Closure $listener);//:ISlot;
}

