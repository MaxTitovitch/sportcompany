<?php

namespace App\Http\Controllers;

use App\Struct;
use App\Tableourstore;

class OurstoresController extends Controller
{
	public function index()
	{
		$last = 'maxBestNotIsSet';
		$structs = Struct::select(['title', 'text'])->get();
		$tableourstores = Tableourstore::select(['id', 'city', 'street', 'number'])->get();
		$tableourstores = $tableourstores->sortBy('city');
		
		return view ('ourstores')->with(['structs' => $structs[1], 'tableourstores' => $tableourstores, 'last' => $last]);
	}
}
