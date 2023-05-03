<?php

namespace App\Http\Controllers;


class ProjectsController extends Controller
{
	public function __construct(){
	}

    public function show(){

        return view('projects');
    }


}
