<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function chooseRandomPet(Request $request){
        switch ($request->pet) {
            case 0:
                echo 'Has elegido un perrito';
                break;
            case 1:
                echo 'Has elegido un gatito';
                break;
            case 2:
                echo 'Has elegido un hamster';
                break;
            default:
                echo 'No elegiste a nunguna mascota :c';
                break;

        }
    }
    public function addition(Request $request){
        $add = $request->num1 + $request->num2;
        echo $request->num1." + ".$request->num2." = ".$add;
    }
}
