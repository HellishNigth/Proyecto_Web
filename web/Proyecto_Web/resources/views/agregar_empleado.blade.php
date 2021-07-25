@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-dark">
                <span>Registro Empleados</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre Empleado</label>
                    <input type="text" id="nombre_empleado-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="puesto_empleado-select" class="form-label">Puesto Empleado</label>
                    <select class="form-select" id="puesto_empleado-select">
                        <option value="cajero">Cajero/a</option>
                        <option value="conserje">Conserje</option>
                        <option value="reponedor">Reponedor/a</option>
                        <option value="secretario">Secretario/a</option>
            
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sueldo-txt" class="form-label">Sueldo</label>
                    <input type="number" class="form-control" id="sueldo-txt">
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button class="btn btn-info">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection