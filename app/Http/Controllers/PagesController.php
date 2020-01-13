<?php

namespace Jcinema\Http\Controllers;

use Illuminate\Http\Request;
use Jcinema;

class PagesController extends Controller
{
    public function inicio(){
    	return view('jcinema');
    }

    public function indexp(){
    	return view('index');
    }
    public function app2(){
    	return view('principal');
    }
    public function indexprincipal(){
        $pel = Jcinema\Pelicula::all();
    	return view('welcome', compact('pel'));
    }
}
