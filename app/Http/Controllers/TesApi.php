<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesApi extends Controller
{
    function getData()
    {
        return [
            "nama" => "Saiful",
            "aktif" => 1
        ];
    }
}
