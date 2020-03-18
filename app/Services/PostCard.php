<?php

namespace App\Services;

class PostCard 
{
	/*
		* resolves the facade or class being bind to the app.
	*/

	public static function resolveFacade($name)
	{
		return app()[$name];
	}
	/*
		* when there is no static method exist from this class.
		* __callStatic methods will be called automatically, also known as magic method.
		* __callStatic methods accepts two arguments, the dynamic method na and its arguments.
	*/
	public static function __callStatic($method, $arguments)
	{
		/*
			* we cannot use this in a static perspective,
			* thats why we use self to represent as this.
			* use ( ... ) spread operator to copy the arguments of the method being binded
			* to the resolve facade
		*/
		return (self::resolveFacade('PostCard'))->$method(...$arguments);
	}
}