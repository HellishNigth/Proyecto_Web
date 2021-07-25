<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function getPuesto(){
        $puesto = array();
        $puesto[] = "Cajero/a";
        $puesto[] = "Concerje";
        $puesto[] = "Reponedor/a";
        $puesto[] = "Secretario/a";

        return $puesto;
    }
}
