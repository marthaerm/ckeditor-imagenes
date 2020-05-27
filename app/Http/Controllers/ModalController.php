<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function show(Request $request, $data){
        echo "inputa data: ".$request->dataModal."<br>";
        return "variable data: ".$data;
    }
}
