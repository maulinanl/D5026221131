<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
public function index(){
    $a = 3;
    $b = 7;
    $c = $a * $b;
    return "Hasil Perkalian = " . (string)$c . "</h1>";
}

}
