<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index() 
	{
		return view('welcome');	
	}

	public function show($ability) 
	{
		return $ability;
	}
}
