<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducFaltController extends Controller
{
    public function getTipProducFalts(){
        $producfalt = array();
        $producfalt[] = "Comida";
        $producfalt[] = "Limpieza";
        $producfalt[] = "Medicamento";
        $producfalt[] = "Electronico";

        return $producfalt;
    }
}
