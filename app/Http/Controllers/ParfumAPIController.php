<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parfum;

class ParfumAPIController extends Controller
{
    //
    public function apiparfum(){
        $parfum= Parfum::orderby('id', 'desc')->get();
        return response()->json(
            [
                'succes' => true,
                'message' => "berhasil di tampilkan",
                'data' => $parfum
            ],200
        );
    }
}
