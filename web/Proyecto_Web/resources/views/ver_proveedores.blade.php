@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-12 col-lg-6 mx-auto">
        <table class="table table-hover table-bordered table-striped table-responsive">
            <thead class="bg-info">
                <tr>
                    <td>Nombre Proveedor</td>
                    <td>Tipo Proveedor</td>
                    <td>Cantidad a Proveer</td>
                    <td>Acciones</td>
                </tr>
                <tbody id="tbody-proveedoor">

                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection