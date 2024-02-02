<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // function list()
    // {
    //     return Student::all();
    // }

    // function getOne($id)
    // {
    //     return Student::find($id);
    // }

    function getOne($id = null) // Nilai default untuk optional parameter
    {
        return $id ? Student::find($id) : Student::all();
    }
}
