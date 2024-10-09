@extends('admin.pages.inicio.layout')

@section('header_left')
  <span><b>Landing Promocional</b></span>
@endsection

@section('header_center')
<div class="d-flex">
  <a href="{{ route('landing_promocional.index') }}" class="btn-proyecto btn-proyectos-left {{ request()->routeIs('landing_promocional.index') ? 'active' : '' }}">Todo los Proyectos</a>
  <a href="{{ route('landing_promocional.index.mio') }}" class="btn-proyecto btn-proyectos-right {{ request()->routeIs('landing_promocional.index.mio') ? 'active' : '' }}">Mis Proyectos</a>
</div>
@endsection

@section('inicio_dash')

<div class="container-fluid m-auto" style="width: 95%">
    <div class="row pt-4">
        <div class="col-12 my-2">
            <h4 class="mb-4">Landing Promocional</h4>
            <hr>
            <livewire:proyecto-lista :tipoProyecto="1" />
        </div>
    </div>
</div>
<livewire:modal-project :pageActual="Route::currentRouteName()" />
@endsection