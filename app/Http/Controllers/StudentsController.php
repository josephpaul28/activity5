<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
	public function index(){

	if (Request()->has('section_id')) {
		return DB::table('students')->where('section_id', Request()-> section_id)->get();
	}
		$students = DB::table('students')->get();
		return $students;
	}
    
}
