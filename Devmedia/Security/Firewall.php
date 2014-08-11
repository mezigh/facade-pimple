<?php

namespace Devmedia\Security;

/**
 * Repondre aux signaux envoyés depuis le kernel -> handle
 */

class Firewall
{
    protected $request;

    public function __construct()
    {
        
    }
    
    public function onRequestSignal($request)
    {
        $this->request = $request;
        //var_dump(__CLASS__." RECEIVED A SIGNAL");
        foreach($this->request as $key => $value)
        {
           // var_dump(">> ". $key." >>",$value);
        }
    }
    
    public function requestFirewall()
    {
        
    }

    
//    public function onKernelRequest(GetResponseEvent $event)
//    {
//        if (!$event->isMasterRequest()) {
//            return;
//        }
//
//        // register listeners for this firewall
//        list($listeners, $exception) = $this->map->getListeners($event->getRequest());
//        if (null !== $exception) {
//            $this->exceptionListeners[$event->getRequest()] = $exception;
//            $exception->register($this->dispatcher);
//        }
//
//        // initiate the listener chain
//        foreach ($listeners as $listener) {
//            $listener->handle($event);
//
//            if ($event->hasResponse()) {
//                break;
//            }
//        }
//    }
}
