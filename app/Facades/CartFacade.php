<?php 


namespace App\Facades;

class CartFacade extends BaseFacade{

	protected static function getFacadeAccessor()
	{
		return 'cart';
	}
}