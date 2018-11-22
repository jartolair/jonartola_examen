<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelesController extends Controller
{
    public function dePrimera(){
    	$hoteles=Hotel::where('categoria',1)->get();
    	return view('hotel.index', array('hoteles'=>$hoteles));
    }
}
