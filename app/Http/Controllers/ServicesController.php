<?php

namespace App\Http\Controllers;


class ServicesController extends Controller
{
	public function __construct(){
	}

    public function show(){

        return view('services');
    }


}
