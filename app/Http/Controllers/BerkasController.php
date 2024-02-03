<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
    function uploadBerkas(Request $req)
    {
        $result = $req->file('berkas')->store('gambar'); // "berkas" adalah nama KEY di Postman dan lokasi penyimpanan gambarnya di storage/app/gambar

        return ["message" => $result];
    }
}
