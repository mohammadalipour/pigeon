<?php
	
	namespace Pigeon\Helper;
	
	
	use Exception;
	
	class Code
	{
		
		/**
		 * @param int $length
		 * @return int
		 * @throws \Exception
		 */
		public function codeGenerator($length = 5)
		{
			$min = str_pad(1, $length, 0);
			$max = str_pad(9, $length, 9);
			try{
				return random_int($min, $max);
				
			}catch (Exception $exception){
				throw new Exception($exception->getMessage());
			}
		}
	}