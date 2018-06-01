<?php

namespace App\Http\Controllers;

use App\Struct;
use App\Tableemployee;

class EmployeesController extends Controller
{
	public function index()
	{
		$last = 'maxBestNotIsSet';
		$structs = Struct::select(['title', 'text'])->get();
		$tableemployees = Tableemployee::select(['id', 'status', 'position', 'name', 'number'])->get();
		$tableemployees = $tableemployees->sortByDesc('status');
		
		return view ('employees')->with(['structs' => $structs[2], 'tableemployees' => $tableemployees, 'last' => $last]);
	}
}