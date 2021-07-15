@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-danger text-dark">
                    <span>Agregar Producto</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre Producto</label>
                        <input type="text" id="nombreproduc-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo_produc-select" class="form-label">Tipo Producto</label>
                        <select class="form-select" id="tipo_produc-select">
                            <option value="comida">Comida</option>
                            <option value="limpieza">Limpieza</option>
                            <option value="medicamento">Medicamento</option>
                            <option value="electronico">Electronico</option>
                
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad-txt" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection