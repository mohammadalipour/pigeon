<?php
	
	namespace Pigeon\tests\Storage;
	
	
	use Pigeon\Storage\AbstractPigeonStorage;
	
	class StorageDriver extends AbstractPigeonStorage
	{
		
		public function store(int $expiredAtSecond)
		{
			return ['code' => $this->code, 'receiver' => $this->receiver, 'expired_after_second' => $expiredAtSecond];
		}
		
		public function isValid(): bool
		{
			$code = '1234';
			$receiver = 'md.alipour91@gmail.com';
			
			return ($this->code === $code && $this->receiver===$receiver);
		}
		
		public function expire()
		{
			return true;
		}
	}