@extends('admin.pages.inicio.layout')

@section('header_left')
  <span>Landing Promocional > <b>Nueva Proyecto Landing</b></span>
@endsection

@section('header_center')
<div class="d-flex">
</div>
@endsection

@section('header_right')
<button type="button" class="btn btn-inactivo">
    Inactivo
</button>
@endsection

@section('inicio_dash')
<div class="row-show">
    <x-admin.menu-reg ruta="landing_promocional" />
    <div class="body-right">
        <h3>Configuración</h3>

    </div>
</div>
@endsection