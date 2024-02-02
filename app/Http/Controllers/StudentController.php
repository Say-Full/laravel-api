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

    function add(Request $request)
    {
        $student = new Student;
        $student->nama = $request->nama;
        $result = $student->save();

        if( $result ) {
            return ["message" => "success"];
        }
        else {
            return ["message" => "failed"];
        }
    }
}
