<?php

namespace App\Http\Controllers;

use App\Sporttable;

class My1Controller extends Controller
{	
	public function show($id)
	{
		$sporttables = Sporttable::select(['id', 'shorttext', 'text', 'image'])->where('id', $id)->first();
		
		return view ('my1')->with( ['sporttables' => $sporttables]);
	}
}