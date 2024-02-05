<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
    public function index(){

        $students = Student::all();
        // $data = return response()->json($data,200);
    }
}
