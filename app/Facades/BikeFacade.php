<?php

namespace App\Facades;

class BikeFacade extends BaseFacade{

	protected static function getFacadeAccessor()
	{
		return 'bike';
	}
}