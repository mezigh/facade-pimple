<?php
namespace Devmedia\Core;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel implements HttpKernelInterface, TerminableInterface
{	
	
    protected $resolver;

    public function __construct(ControllerResolver $resolver)
    {
        $this->resolver = $resolver;
    }
	
	public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
    {
        return $this->handleRaw($request, $type);
		
		/* try {
            return $this->handleRaw($request, $type);
        } catch (\Exception $e) {
            if (false === $catch) {
                throw $e;
            }

            return $this->handleException($e, $request, $type);
        } */
    }

    public function terminate(Request $request, Response $response)
    {
        /* $this->dispatcher->dispatch(KernelEvents::TERMINATE, new PostResponseEvent($this, $request, $response)); */
    }
	
	private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
    {
	
//$requestSignal = new Signal("kernel.request");
		
		// request
        $event = new GetResponseEvent($this, $request, $type);
        $this->dispatcher->dispatch(KernelEvents::REQUEST, $event);

        if ($event->hasResponse()) {
            return $this->filterResponse($event->getResponse(), $request, $type);
        }

        // load controller
        if (false === $controller = $this->resolver->getController($request)) {
            throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". Maybe you forgot to add the matching route in your routing configuration?', $request->getPathInfo()));
        }
		
//$controllerSignal = new Signal("kernel.controller");
		
        $event = new FilterControllerEvent($this, $controller, $request, $type);
        $this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
        $controller = $event->getController();

        
        $arguments = $this->resolver->getArguments($request, $controller);// controller arguments
        $response = call_user_func_array($controller, $arguments);// call controller

        // view
		
		
		
        if (!$response instanceof Response) {
		
			// viewSignal
	
//$viewSignal = new Signal("kernel.view");
	
            $event = new GetResponseForControllerResultEvent($this, $request, $type, $response);
            $this->dispatcher->dispatch(KernelEvents::VIEW, $event);

            if ($event->hasResponse()) {
                $response = $event->getResponse();
            }

            if (!$response instanceof Response) {
                $msg = sprintf('The controller must return a response (%s given).', $this->varToString($response));

                // the user may have forgotten to return something
                if (null === $response) {
                    $msg .= ' Did you forget to add a return statement somewhere in your controller?';
                }
                throw new \LogicException($msg);
            }
        }
		
		// responseSignal
		
        return $this->filterResponse($response, $request, $type);
    }
	
	// Closures Listeners for Signals

}