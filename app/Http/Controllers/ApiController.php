<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get(){
        $object = array (
            'id' => 1,
            'name' => "Martha",
            'lastname' => "Rodriguez",
        );
        return response()->json([
            'id' => $object["id"],
        ], 201);
    }
}
