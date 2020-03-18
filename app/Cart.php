<?php

namespace App;

class Cart {

	public function add($items)
	{
		return 'adding '. $items .' to cart';
	}
	public function remove($item)
	{
		return 'removing '.$item.' to cart';
	}
}