<?php
	
	namespace Pigeon;
	
	use Pigeon\Dispatcher\AbstractDispatcher;
	use Pigeon\Storage\AbstractPigeonStorage;
	
	class Pigeon
	{
		/**
		 * @var int
		 */
		protected $expiredAfterSecond = 120;
		
		/**
		 * @param int $expiredAfterSecond
		 * @return $this
		 */
		public function setExpiredAfterSecond(int $expiredAfterSecond)
		{
			$this->expiredAfterSecond = $expiredAfterSecond;
			
			return $this;
		}
		
		public function send(AbstractDispatcher $dispatcher)
		{
			return $dispatcher->send();
		}
		
		public function store(AbstractPigeonStorage $storage)
		{
			return $storage->store($this->expiredAfterSecond);
		}
		
		public function isValid(AbstractPigeonStorage $storage):bool
		{
			return $storage->isValid();
		}
		
		public function expire(AbstractPigeonStorage $storage)
		{
			return $storage->expire();
		}
	}