<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

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
        $rules = array(
            "nama" => "required | min: 2 | max: 11"
        );

        $validator = Validator::make($request->all(), $rules);

        if( $validator->fails() ) {
            // return $validator->errors();
            return response()->json($validator->errors(), 401);
        }

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

    function update(Request $req)
    {
        $student = Student::find($req->id);
        $student->nama = $req->nama;
        $result = $student->save();

        if( $result ) {
            return ["message" => "success"];
        }
        else {
            return ["message" => "failed"];
        }
    }

    function search($name)
    {
        // return Student::where("nama", $name)->get();
        return Student::where("nama", "like", "%" . $name . "%")->get();
    }

    function delete($id)
    {
        $student = Student::find($id);
        $result = $student->delete();

        if( $result ) {
            return ["message" => "success"];
        }
        else {
            return ["message" => "failed"];
        }
    }
}
