<?php
	
	namespace Tests;
	
	use PHPUnit\Framework\TestCase;
	use Pigeon\Pigeon;
	use Tests\Dispatcher\DispatchDriver;
	use Tests\Storage\StorageDriver;
	
	class PigeonTest extends TestCase
	{
		public function testSendOtpIsValid()
		{
			$dispatchDriver = new DispatchDriver('md.alipour91@gmail.com',1234);
			$pigeon = new Pigeon();
			
			$result = $pigeon->send($dispatchDriver);
			
			self::assertEquals($result['code'], 1234);
		}
		
		public function testSendOtpIsNotValid()
		{
			$dispatchDriver = new DispatchDriver('md.alipour91@gmail.com',1234);
			$pigeon = new Pigeon();
			
			$result = $pigeon->send($dispatchDriver);
			
			self::assertNotEquals($result['code'], 12345);
		}
		
		public function testSendReciverIsValid()
		{
			$dispatchDriver = new DispatchDriver('md.alipour91@gmail.com',1234);
			$pigeon = new Pigeon();
			
			$result = $pigeon->send($dispatchDriver);
			
			self::assertEquals($result['receiver'], 'md.alipour91@gmail.com');
		}

		public function testStoreOtp()
		{
			$storageDriver = new StorageDriver('md.alipour91@gmail.com',1234);
			$pigeon = new Pigeon();
			$pigeon->setExpiredAfterSecond(180);
			$result = $pigeon->store($storageDriver);
			
			self::assertEquals($result['receiver'], 'md.alipour91@gmail.com');
			self::assertEquals($result['code'], 1234);
			self::assertEquals($result['expired_after_second'], 180);
		}
		
		public function testIsValidOtp()
		{
			$storageDriver = new StorageDriver('md.alipour91@gmail.com',1234);
			$pigeon = new Pigeon();
			$result = $pigeon->isValid($storageDriver);
			
			self::assertIsBool($result);
			self::assertTrue($result);
		}
		
		
		public function testIsNotValidOtp()
		{
			$storageDriver = new StorageDriver('md.alipour91@gmail.com',1235);
			$pigeon = new Pigeon();
			$result = $pigeon->isValid($storageDriver);
			
			self::assertIsBool($result);
			self::assertFalse($result);
		}
	}
