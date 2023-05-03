<?php

namespace App\Http\Controllers;


class TeamController extends Controller
{
	public function __construct(){
	}

    public function show(){

        return view('team');
    }


}
