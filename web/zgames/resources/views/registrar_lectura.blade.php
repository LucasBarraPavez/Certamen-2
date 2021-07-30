@extends('layouts.master')

@section('contenido')

  <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <span>Registrar Datos</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="fecha-txt" class="form-label">Fecha</label>
                    <input type="date"  id="fecha-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hora-txt" class="form-label">Hora</label>
                    <input type="text"  id="hora-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="medidor-select">Medidor</label>
                    <select  id="medidor-select" class="form-select">
                        <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                         <option value="10">10</option>
                    </select>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text"  id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="precio-txt" class="form-label">Valor</label>
                        <input type="number"  id="precio-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medida-select">Tipo de medida</label>
                        <select  id="medida-select" class="form-select">
                            <option value="1">Kilowats</option>
                             <option value="2">Watts</option>
                            <option value="3">Temperatura</option>
                        </select>
                    </div>

            <div class="card-footer d-grid gap-1">
                <button type="button" id="registrar-btn" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
<script src="{{asset('js/servicios/RegistroService.js')}}"></script>
<script src="{{asset('js/registro.js')}}"></script>
<script src="{{asset('js/registros2.js')}}"></script>
@endsection