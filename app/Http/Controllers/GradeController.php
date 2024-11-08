<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();

        return view('grade', [
            'title' => 'Grades',
            'grades' => $grades->load('students')
        ]);
    }
}
