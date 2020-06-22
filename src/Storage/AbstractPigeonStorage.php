<?php
	
	namespace Pigeon\Storage;
	
	
	abstract class AbstractPigeonStorage
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
		 * AbstractPigeonStorage constructor.
		 * @param $receiver
		 * @param string $code
		 */
		public function __construct($receiver, string $code)
		{
			$this->receiver = $receiver;
			$this->code = $code;
		}
		
		abstract public function store(int $expiredAtSecond);
		
		abstract public function isValid():bool ;
		
		abstract public function expire();
	}