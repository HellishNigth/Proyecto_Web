<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvProducsController extends Controller
{
    public function getProducProv(){
        $producprov = array();
        $producprov[] = "Comida";
        $producprov[] = "Limpieza";
        $producprov[] = "Medicamento";
        $producprov[] = "Electronico";

        return $producprov;
    }
}
