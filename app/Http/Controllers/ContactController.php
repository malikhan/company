<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
	public function __construct(){
	}

    public function show(){

        return view('contact');
    }


}
