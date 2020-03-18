<?php 


namespace App\Facades;

class BaseFacade {

	public static function __callStatic($method, $arguments)
	{			
		/* resolves the binding of the class then inject method*/
		return app()->make(static::getFacadeAccessor())->$method(...$arguments);
	}

	protected static function getFacadeAccessor()
	{
		//code...
	}
}