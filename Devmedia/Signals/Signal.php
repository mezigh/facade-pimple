<?php namespace Devmedia\Signals;

	use Devmedia\Signals\ISignal;
    use Devmedia\Signals\OnceSignal;

	class Signal extends OnceSignal implements ISignal
	{

		public function __construct($valueClasses)
		{
			parent::__construct($valueClasses);
		}
		
		public function add(\Closure $listener)
		{
			return $this->registerListener($listener);
		}
        
        public function __invoke()
        {
            ;
        }
	}
