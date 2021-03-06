@extends('layouts.app')
@section('outer')
    <form action=" {{route('bonos.add')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-lg-4">
            <label for="tienda">Tienda del descuento</label>
            <input type="text" name="tienda" class="form-control" id="last_name" placeholder="Tienda">
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Nombre del bono</label>
            <input type="text" name="nombre" class="form-control" id="last_name" placeholder="Nombre">
        </div>
        <div class="form-group col-lg-4">
            <label for="valor">Valor del bono</label>
            <input type="text" name="valor" class="form-control" id="last_name" placeholder="Valor">
        </div>
        <div class="col-lg-4 input_field_sections">
            <h5>Tipo de descuento</h5>
            <select class="form-control hide_search" tabindex="7" name="tipo">
                <option selected disabled>Elige uno</option>
                <option value="pesos">Total</option>
                <option value="porcentaje">Porcentual</option>
            </select>
        </div>
        <div class="col-sm-6 m-t-35">
            <h5>Imagen Evento</h5>
            <input id="input-21" type="file" accept="image/*" name="imagen">
        </div>
        <div class="form-group col-sm-6 m-t-35">
            <button class="btn btn-success" type="submit">AGREGAR</button>
        </div>
    </form>
@endsection

@section('css')
<link type="text/css" rel="stylesheet" href="{{asset('vendors/fileinput/css/fileinput.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/form_elements.css')}}"/>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('vendors/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/fileinput/js/theme.js')}}"></script>
@endsection