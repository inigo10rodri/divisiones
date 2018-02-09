<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
    public function division(){
        $dividendo = request()->get('dividendo');
        $divisor = request()->get('divisor');
        $int1 = settype($dividendo,"integer");
        $int2 = settype($divisor,"integer");
        $resultado= $int1/$int2;
        $int3=settype($resultado,'double');

        $division = new Division();

        $division->dividendo = $int1;
        $division->divisor = $int2;
        $division->resultado=$int3;


        $division->save();


        return (view('/respuesta'));
    }
    public function __construct(){

        $this->middleware('divisionMiddleware');
    }
}
