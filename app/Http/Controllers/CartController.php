<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\CartFacade;

class CartController extends Controller
{
    public function index()
    {
    	return CartFacade::remove('item - 01');
    }
}
