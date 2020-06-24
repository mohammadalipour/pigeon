![alt text](https://cdn1.bbcode0.com/uploads/2020/6/24/e8bab57e77aedeba3892eeddb35ac45e-full.png)

# Pigeon , PHP simple OTP package

Pigeon is a simple interface for dispatch, store, validate and expire one-time password


# Installation 

You can install this bundle by the following command: 

``` bash
$ composer require mdap/pigeon
```


# Usage

### Dispatcher Driver

```php
<?php
	
	namespace foo\Dispatcher;
	
	
	use Pigeon\Dispatcher\AbstractDispatcher;
	
	class DispatchDriver extends AbstractDispatcher
	{
		
		public function send()
		{
      //TODO: send OTP message with different ways, such as : E-mail,SMS,and etc ...
		}
	}
```


#### In your controller

```php
<?php
namespace foo\Controller;

use foo\Dispatcher;

class FooController extends Controller
{
    public function index()
    {
        $dispatchDriver = new DispatchDriver('md.alipour91@gmail.com',1234);
			  $pigeon = new Pigeon();
			
			  $result = $pigeon->send($dispatchDriver);
    }
}
```

