<?php

namespace App\Http\Controllers;

use App\Struct;

class CompanyController extends Controller
{
   	public function index()
	{
		$structs = Struct::select(['title', 'text'])->get();
		return view ('company')->with('structs', $structs);
	}
}
