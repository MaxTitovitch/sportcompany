<?php

namespace App\Http\Controllers;

use App\Sporttable;
use App\Struct;

class WelcomeController extends Controller
{
	public function index()
	{
		$sporttables = Sporttable::select(['id', 'shorttext', 'text'])->get();
		$structs = Struct::select(['id', 'title', 'text'])->get();
		return view ('welcome')->with(['structs' => $structs, 'sporttables' => $sporttables]);
	}
}