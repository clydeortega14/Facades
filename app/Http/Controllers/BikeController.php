<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\BikeFacade;

class BikeController extends Controller
{
    public function index()
    {
    	return BikeFacade::start();
    }
}
