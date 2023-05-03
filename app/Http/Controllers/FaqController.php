<?php

namespace App\Http\Controllers;


class FaqController extends Controller
{
	public function __construct(){
	}

    public function show(){

        return view('faq');
    }


}
