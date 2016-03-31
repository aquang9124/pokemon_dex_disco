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

	public function show() 
	{
		$poke_images = [];
		for ($i = 1; $i < 722; $i++):
			array_push($poke_images, 'http://pokeapi.co/media/img/' . $i . '.png');
		endfor;

		return $poke_images;
	}
}
