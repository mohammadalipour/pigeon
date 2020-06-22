<?php
	
	namespace Pigeon\tests\Dispatcher;
	
	
	use Pigeon\Dispatcher\AbstractDispatcher;
	
	class DispatchDriver extends AbstractDispatcher
	{
		
		public function send()
		{
			return ['code' => $this->code, 'receiver' => $this->receiver];
		}
	}