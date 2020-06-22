<?php
	
	namespace Pigeon\Dispatcher;
	
	
	abstract class AbstractDispatcher
	{
		/**
		 * @var
		 */
		protected $receiver;
		/**
		 * @var string
		 */
		protected $code;
		
		/**
		 * AbstractDispatcher constructor.
		 * @param $receiver
		 * @param string $code
		 */
		public function __construct($receiver, string $code)
		{
			$this->receiver = $receiver;
			$this->code = $code;
		}
		
		abstract public function send();
	}