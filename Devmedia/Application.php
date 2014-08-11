<?php

namespace Devmedia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Application extends \Pimple implements HttpKernelInterface, Visitable , \IteratorAggregate
{
    /**
     * TODO implémenter le $signalChannel;
     * protected $signalChannel;
     */
    
    //protected $resolvedInstances = array();
    //protected $registeredProviders = array();
    public $toolbox;
    public $requestSignal;

    public function __construct()
    {
        parent::__construct();
        //varD("AFTER ". __CLASS__ ." INSTANCIATION",$this);
    }
    public function accept(Visitor $visitor)
    {
       $visitor->visit($this); 
    }
    
    public function getIterator()
    {
        return new \ArrayIterator($this);
    }

    public function init()
    {   
        $config = function($item) { return $this['config']->getItem($item);};
        $this['debug'] = $config('app')['debug'];
        $this['paths'] = $config('paths');
        $this['base.url'] = $config('app')['url'];
        $this['base.url.dev'] = $config('app')['url.dev'];
        $this['providers'] = $config('app')['providers'];
        $this['aliases'] = $config('app')['aliases'];
        $this['auth'] = $config('auth');
        $this->makeAlias( $this['aliases'] );
        $this->registerProviders( $this['providers'] );
        $this['route.registered'] = function () { return $this['signal']; };
        $this->requestSignal = $this['signal'];
        //varD("AFTER " . __METHOD__, $this);
    }
    
    public function makeAlias($aliases)
    {
        foreach ($aliases as $original => $alias) {
            class_alias($original, $alias);
        }
    }
    
    public function registerProviders($providers)
    {
        foreach ($providers as $provider) {
            $injectee = new $provider($this);
            $injectee->register();
        }
    }
    
    /**
	 * Register an existing instance as shared in the container.
	 *
	 * @param  string  $abstract
	 * @param  mixed   $instance
	 * @return void
	 */
	public function instance($abstract, $instance)
	{	
        //varD("AFTER " . __CLASS__ . " registering an Instance of $instance in the container",$this);
        if (is_array($abstract))
		{
			list($abstract, $alias) = $this->extractAlias($abstract);
			$this->alias($abstract, $alias);
		}
		//$this->instances[$abstract] = $instance;
        $this[$abstract] = $instance;
	}
    
    public function bind($abstract, $implementation)
    {
        var_dump($abstract);
    }
    
    /**
	 * Alias a type to a shorter name.
	 *
	 * @param  string  $abstract
	 * @param  string  $alias
	 * @return void
	 */
	public function alias($abstract, $alias)
	{
		$this->aliases[$alias] = $abstract;
	}

	/**
	 * Extract the type and alias from a given definition.
	 *
	 * @param  array  $definition
	 * @return array
	 */
	protected function extractAlias(array $definition)
	{
		return array(key($definition), current($definition));
	}
    
    /** 
     * Boot the Routing System
     * this method is invoke by the newly created Route Object
     * add a Listener to the signal
     * @param type $signal
     */
    public function onRouteSignal($signal)
    {
        $signal->add(
           function($route, $url, $dmRoute) {
                 $this['router']->addToRouteCollection($url, $route);
            });
    }
       
    public function webFoundation($request)
    {
        $context = $this['request.context'];
        $context->fromRequest($request);

        $matcher = $this['url.matcher'];
        $matcher->setContext($context);
        $generator = $this['url.generator'];//insérer le port :8000 pour le dev
        //var_dump($generator->generate("/cms",array(),true));
        $request->attributes->add($matcher->match($request->getPathInfo()));
 
        //varD("AFTER ". __METHOD__ ,$this);

        $this->requestSignal->dispatch(array($request,$this));
        return $request;
        
    }

    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
    {
        try {
            return $this->handleRaw($request, $type);
        } catch (\Exception $e) {
            if (false === $catch) {
                throw $e;
            }
            return $this->handleException($e, $request, $type);
        }
    }

    private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
    {
        $resolver = $this['controller.resolver'];
        $controller = $resolver->getController($request);
        
        if(true ===$this['debug']) {
            //var_dump("DEBUG");
            //Inject debugBar
        }
        
        $controllerSignal = $this['signal'];
        
        if (is_array($controller)) {
            if ($controller[0] instanceof \Mediator) {
                $response = $controller[0]->$controller[1]($this);
            }
        } else {
            $response = call_user_func($controller, $request);
        }
        // return $this->filterResponse($response, $request, $type);
        
        $filterResponseSignal = $this['signal'];
        
        return $response;
    }

    
    public function __toString()
    {
        return get_class($this);
    }
   

//    private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
//    {
//        
//        $requestSignal = $this['signal'];
//         /*request
//        $event = new GetResponseEvent($this, $request, $type);
//        $this->dispatcher->dispatch(KernelEvents::REQUEST, $event);*/
//
//        /* if ($event->hasResponse()) {
//          return $this->filterResponse($event->getResponse(), $request, $type);
//          } */
//        
//        $controller = $this->resolver->getController($request);
//       // var_dump($controller);
//        /* if (false === $controller = $this->resolver->getController($request)) {
//          throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". Maybe you forgot to add the matching route in your routing configuration?', $request->getPathInfo()));
//          } */
//
//        $controllerSignal = $this['signal'];
//        
//        /*$event = new FilterControllerEvent($this, $controller, $request, $type);
//        $this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
//        $controller = $event->getController();*/
//        
//        if (is_array($controller)) {
//            if ($controller[0] instanceof \Mediator) {
//               // cas Controller
//               // $controller[0]->setContext($this); 
//                $response = $controller[0]->$controller[1]($this);
//            }
//        } else {
//            // cas Closure
//            $response = call_user_func($controller, $request);
//        }
//
//        /*$arguments = $this->resolver->getArguments($request, $controller);// controller arguments
//        $response = call_user_func_array($controller, $arguments);// call controller*/
//
//       /*  if (!$response instanceof $this['response']) {
//            $viewSignal = $this['signal'];
//            $event = new GetResponseForControllerResultEvent($this, $request, $type, $response);
//              $this->dispatcher->dispatch(KernelEvents::VIEW, $event);
//
//              if ($event->hasResponse()) {
//              $response = $event->getResponse();
//              }
//
//              if (!$response instanceof Response) {
//              $msg = sprintf('The controller must return a response (%s given).', $this->varToString($response));
//
//              // the user may have forgotten to return something
//              if (null === $response) {
//              $msg .= ' Did you forget to add a return statement somewhere in your controller?';
//              }
//              throw new \LogicException($msg);
//              } 
//        } else {
//            var_dump("THIS IS VIEW SIGNAL");
//        }*/
//        // return $this->filterResponse($response, $request, $type);
//        return $response;
//    }
    
}