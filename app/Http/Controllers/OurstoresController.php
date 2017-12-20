<?php

namespace App\Http\Controllers;

use App\Struct;
use App\Tableourstore;

class OurstoresController extends Controller
{
	public function index()
	{
		$last = 'maxBest';
		$structs = Struct::select(['title', 'text'])->get();
		$tableourstores = Tableourstore::select(['id', 'city', 'street', 'number'])->get();
		return view ('ourstores')->with(['structs' => $structs, 'tableourstores' => $tableourstores, 'last' => $last]);
	}
}
