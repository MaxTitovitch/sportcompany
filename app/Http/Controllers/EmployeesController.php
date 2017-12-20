<?php

namespace App\Http\Controllers;

use App\Struct;
use App\Tableemployee;

class EmployeesController extends Controller
{
	public function index()
	{
		$last = 'maxBest';
		$structs = Struct::select(['title', 'text'])->get();
		$tableemployees = Tableemployee::select(['id', 'status', 'position', 'name', 'number'])->get();
		return view ('employees')->with(['structs' => $structs, 'tableemployees' => $tableemployees, 'last' => $last]);
	}
}
