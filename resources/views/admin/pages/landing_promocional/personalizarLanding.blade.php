@extends('admin.pages.inicio.layout')


@section('header_left')
  <span>{{ $project->project_type->name }} > <b>{{ $project->nombre_promocion }}</b></span>
@endsection

@section('header_center')
<div class="d-flex">
</div>
@endsection

@section('header_right')
<button type="button" class="btn btn-alicorp">
    Guardar
</button>
@endsection

@section('inicio_dash')
<style>
.cursor {
    cursor: pointer;
}
</style>
<div class="row p-0 ps-1 w-100">
    <div class="col-3 border-end" style="overflow-y: scroll; height: 100vh;">
        <div class="d-block" id="menu_edit">
            <div class="border-bottom py-2">
                <span>Personalizar</span>
            </div>
            <div class="py-2 border-bottom cursor" id="encabezado-menu">
                <p class="mb-0"><b>Encabezado</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Encabezado</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/logo-imagen.svg')}}" alt="svg imagen">
                        <small>Logo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Titulos de navegación</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="principal-menu">
                <p class="mb-0"><b>Página principal</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección pagina principal</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/lapiz.svg')}}" alt="svg imagen">
                        <small>Texto</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/logo-imagen.svg')}}" alt="svg imagen">
                        <small>Imagen</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/boton.svg')}}" alt="svg imagen">
                        <small>Botón</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="participar-menu">
                <p class="mb-0"><b>Como participar</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Como participar</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Bloque participar</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/boton.svg')}}" alt="svg imagen">
                        <small>Botón</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="formulario-menu">
                <p class="mb-0"><b>Formulario Participar</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Formulario participar</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Bloque formulario</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/boton.svg')}}" alt="svg imagen">
                        <small>Botón</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="ganadores-menu">
                <p class="mb-0"><b>Ganadores</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Ganadores</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Bloque Lista ganadores</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="preguntas-menu">
                <p class="mb-0"><b>Preguntas Frecuentes</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Preguntas frecuentes</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Bloque preguntas</small>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom cursor" id="redes-menu">
                <p class="mb-0"><b>Redes Sociales</b></p>
                <ul class="list-unstyled ps-4">
                    <li>
                        <img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion">
                        <small>Sección Redes sociales</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion">
                        <small>Titulo</small>
                    </li>
                    <li>
                        <img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg imagen">
                        <small>Bloque redes sociales</small>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-none" id="pagina_principal">
            <div class="border-bottom py-2">
                <button class="border-0 w-100 text-start" style="background-color: #fff;" id="back_principal"><i class="fas fa-chevron-left"></i> Pagina Principal</button>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneHeader" aria-expanded="true" aria-controls="collapseOneHeader">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion"> <small>Sección Pagina principal</small></b></p>
                </button>
                <ul class="list-unstyled ps-4 mt-2 collapse show" id="collapseOneHeader" data-bs-parent="#accordionExample">
                    <li>
                        <p class="mb-1">Distribución</p>
                        <div class="d-flex justify-content-center" style="gap: 1.2em;">
                            <div>
                                <input hidden type="radio" name="distribucion" id="horizontal" value="1" class="distribucion" checked>
                                <label for="horizontal" class="d-flex align-items-center border border-3 p-2 cursor horizontal">
                                    <img src="{{asset('backend/svg/distri-horizontal.svg')}}" alt="">
                                </label>
                            </div>
                            <div>
                                <input hidden type="radio" name="distribucion" id="vertical" value="1" class="distribucion">
                                <label for="vertical" class="d-flex align-items-center border border-3 p-2 cursor vertical">
                                    <img src="{{asset('backend/svg/vertical.svg')}}" alt="">
                                </label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="mb-2">Banner</p>
                        <div class="img-subir">
                            <label for="banner-subir">
                                <div class="cursor">
                                    <div id="upload-banner">
                                        <img src="{{asset('backend/svg/ssubir.svg')}}" alt="">
                                        <h6>Click para Actualizar</h6>
                                        <p>PNG, JPG (max. 1,000x1,000px)</p>
                                    </div>
                                    <div>
                                        <img class="img-fluid" id="preview-banner">
                                    </div>
                                </div>
                            </label>
                            <input hidden type="file" name="banner-subir" id="banner-subir">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoHeader" aria-expanded="true" aria-controls="collapseTwoHeader">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/text.svg')}}" alt="svg seccion"> <small>Titulo</small></b></p>
                </button>
                
                <ul class="list-unstyled ps-4 collapse" id="collapseTwoHeader" data-bs-parent="#accordionExample">
                    <li class="my-2">
                        <p class="mb-1">Texto</p>
                        <div class="d-flex justify-content-start mb-2" style="gap: 1.2em;">
                            <div class="p-1 cursor bold">
                                <input hidden type="checkbox" name="bold-titulo-header" id="bold-titulo-header">
                                <label for="bold-titulo-header" class="d-flex align-items-center cursor">
                                    <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" id="svg_bold">
                                        <path d="M8.6 6.79C9.57 6.12 10.25 5.02 10.25 4C10.25 1.74 8.5 0 6.25 0H0V14H7.04C9.13 14 10.75 12.3 10.75 10.21C10.75 8.69 9.89 7.39 8.6 6.79ZM3 2.5H6C6.83 2.5 7.5 3.17 7.5 4C7.5 4.83 6.83 5.5 6 5.5H3V2.5ZM6.5 11.5H3V8.5H6.5C7.33 8.5 8 9.17 8 10C8 10.83 7.33 11.5 6.5 11.5Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="p-1 cursor italic">
                                <label for="italic-titulo-header" class="d-flex align-items-center cursor">
                                    <svg width="12" height="14" viewBox="0 0 12 14" xmlns="http://www.w3.org/2000/svg" id="svg_italic">
                                        <path d="M4 0V3H6.21L2.79 11H0V14H8V11H5.79L9.21 3H12V0H4Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                                <input hidden type="checkbox" name="italic-titulo-header" id="italic-titulo-header">
                            </div>
                        </div>
                        <input type="text" class="form-control p-2" id="input-titulo-header">
                    </li>
                    <li class="my-2">
                        <p class="my-1">Tamaño Texto</p>
                        
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="tamanoTitulo" id="tamanoTitulo1" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoTitulo1"><small><b>Chico</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoTitulo" id="tamanoTitulo2" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoTitulo2"><small><b>Mediano</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoTitulo" id="tamanoTitulo3" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="tamanoTitulo3"><small><b>Grande</b></small></label>
                        </div>

                    </li>
                    <li class="my-2">
                        <p class="my-1">Alineación</p>
                        
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="alineacionTitulo" id="alineacionTitulo1" autocomplete="off">
                            <label class="btn btn-outline-text" for="alineacionTitulo1"><small><b><i class="fas fa-align-left"></i></b></small></label>
                            
                            <input type="radio" class="btn-check" name="alineacionTitulo" id="alineacionTitulo2" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="alineacionTitulo2"><small><b><i class="fas fa-align-center"></i></b></small></label>
                            
                            <input type="radio" class="btn-check" name="alineacionTitulo" id="alineacionTitulo3" autocomplete="off">
                            <label class="btn btn-outline-text" for="alineacionTitulo3"><small><b><i class="fas fa-align-center"></i></b></small></label>
                        </div>

                    </li>
                    <li class="my-2">
                        <p class="my-1">Color</p>
                        
                        <div class="d-flex" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color-titulo-input" name="color-titulo-input" value="#FFFFFF">
                            <input type="color" class="form-control form-control-color p-0" id="color-titulo" value="#FFFFFF">
                        </div>

                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeHeader" aria-expanded="true" aria-controls="collapseThreeHeader">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/lapiz.svg')}}" alt="svg seccion"> <small>Texto</small></b></p>
                </button>
                <ul class="list-unstyled ps-4 collapse" id="collapseThreeHeader" data-bs-parent="#accordionExample">
                    <li class="my-2">
                        <p class="mb-1">Texto</p>
                        <div class="d-flex justify-content-start mb-2" style="gap: 1.2em;">
                            <div class="p-1 cursor bold">
                                <input hidden type="checkbox" name="bold-titulo-parrafo" id="bold-titulo-parrafo">
                                <label for="bold-titulo-parrafo" class="d-flex align-items-center cursor">
                                    <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" id="svg_bold_texto">
                                        <path d="M8.6 6.79C9.57 6.12 10.25 5.02 10.25 4C10.25 1.74 8.5 0 6.25 0H0V14H7.04C9.13 14 10.75 12.3 10.75 10.21C10.75 8.69 9.89 7.39 8.6 6.79ZM3 2.5H6C6.83 2.5 7.5 3.17 7.5 4C7.5 4.83 6.83 5.5 6 5.5H3V2.5ZM6.5 11.5H3V8.5H6.5C7.33 8.5 8 9.17 8 10C8 10.83 7.33 11.5 6.5 11.5Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="p-1 cursor italic">
                                <label for="italic-titulo-parrafo" class="d-flex align-items-center cursor">
                                    <svg width="12" height="14" viewBox="0 0 12 14" xmlns="http://www.w3.org/2000/svg" id="svg_italic_texto">
                                        <path d="M4 0V3H6.21L2.79 11H0V14H8V11H5.79L9.21 3H12V0H4Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                                <input hidden type="checkbox" name="italic-titulo-parrafo" id="italic-titulo-parrafo">
                            </div>
                        </div>
                        <input type="text" class="form-control p-2" id="texto-header">
                    </li>
                    <li class="my-2">
                        <p class="my-1">Tamaño Texto</p>
                        
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="tamanoTexto" id="tamanoTexto1" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="tamanoTexto1"><small><b>Chico</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoTexto" id="tamanoTexto2" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoTexto2"><small><b>Mediano</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoTexto" id="tamanoTexto3" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoTexto3"><small><b>Grande</b></small></label>
                        </div>

                    </li>
                    <li class="my-2">
                        <p class="my-1">Alineación</p>
                        
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="alineacionTexto" id="alineacionTexto1" autocomplete="off">
                            <label class="btn btn-outline-text" for="alineacionTexto1"><small><b><i class="fas fa-align-left"></i></b></small></label>
                            
                            <input type="radio" class="btn-check" name="alineacionTexto" id="alineacionTexto2" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="alineacionTexto2"><small><b><i class="fas fa-align-center"></i></b></small></label>
                            
                            <input type="radio" class="btn-check" name="alineacionTexto" id="alineacionTexto3" autocomplete="off">
                            <label class="btn btn-outline-text" for="alineacionTexto3"><small><b><i class="fas fa-align-center"></i></b></small></label>
                        </div>

                    </li>
                    <li class="my-2">
                        <p class="my-1">Color</p>
                        
                        <div class="d-flex" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color-texto-input" name="color-texto-input" value="#FFFFFF">
                            <input type="color" class="form-control form-control-color p-0" id="color-texto" value="#FFFFFF">
                        </div>

                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourHeader" aria-expanded="true" aria-controls="collapseFourHeader">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/logo-imagen.svg')}}" alt="svg seccion"> <small>Imagen</small></b></p>
                </button>

                <ul class="list-unstyled ps-4 collapse" id="collapseFourHeader" data-bs-parent="#accordionExample">
                    <li class="my-2">
                        <div class="img-subir">
                            <label for="imagen-subir">
                                <div id="upload-imagen">
                                    <img src="{{asset('backend/svg/ssubir.svg')}}" alt="">
                                    <h6>Click para Actualizar</h6>
                                    <p>PNG, JPG (max. 1,000x1,000px)</p>
                                </div>
                                <div>
                                    <img class="img-fluid" id="preview-imagen">
                                </div>
                            </label>
                            <input hidden type="file" name="imagen-subir" id="imagen-subir">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveHeader" aria-expanded="true" aria-controls="collapseFiveHeader">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/boton.svg')}}" alt="svg seccion"> <small>Botón</small></b></p>
                </button>

                <ul class="list-unstyled ps-4 collapse" id="collapseFiveHeader" data-bs-parent="#accordionExample">
                    <li class="my-2">
                        <p class="mb-1">Direccionar</p>
                        <select class="form-select" name="direccionar_boton_header" id="direccionar_boton_header">
                            <option value="#formulario-participar">Formulario Participar</option>
                            <option value="#ganadores">Ganadores</option>
                            <option value="#preguntas-frecuentes">Preguntas Frecuentes</option>
                        </select>
                    </li>
                    <li class="my-2">
                        <p class="mb-1">Texto</p>
                        <div class="d-flex justify-content-start mb-2" style="gap: 1.2em;">
                            <div class="p-1 cursor bold">
                                <input hidden type="checkbox" name="bold-boton-parrafo" id="bold-boton-header">
                                <label for="bold-boton-header" class="d-flex align-items-center cursor">
                                    <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" id="svg_bold_btn_header">
                                        <path d="M8.6 6.79C9.57 6.12 10.25 5.02 10.25 4C10.25 1.74 8.5 0 6.25 0H0V14H7.04C9.13 14 10.75 12.3 10.75 10.21C10.75 8.69 9.89 7.39 8.6 6.79ZM3 2.5H6C6.83 2.5 7.5 3.17 7.5 4C7.5 4.83 6.83 5.5 6 5.5H3V2.5ZM6.5 11.5H3V8.5H6.5C7.33 8.5 8 9.17 8 10C8 10.83 7.33 11.5 6.5 11.5Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="p-1 cursor italic">
                                <label for="italic-boton-header" class="d-flex align-items-center cursor">
                                    <svg width="12" height="14" viewBox="0 0 12 14" xmlns="http://www.w3.org/2000/svg" id="svg_italic_btn_header">
                                        <path d="M4 0V3H6.21L2.79 11H0V14H8V11H5.79L9.21 3H12V0H4Z" fill="#98A2B3"/>
                                    </svg>
                                </label>
                                <input hidden type="checkbox" name="italic-boton-header" id="italic-boton-header">
                            </div>
                        </div>
                        <input type="text" class="form-control p-2" id="titulo-boton-header" value="PARTICIPAR">
                    </li>
                    <li class="my-2">
                        <p class="my-1">Tamaño Texto</p>
                        
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="tamanoBotonHeader" id="tamanoBotonHeader1" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="tamanoBotonHeader1"><small><b>Chico</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoBotonHeader" id="tamanoBotonHeader2" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoBotonHeader2"><small><b>Mediano</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoBotonHeader" id="tamanoBotonHeader3" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoBotonHeader3"><small><b>Grande</b></small></label>
                        </div>

                    </li>
                    <li class="my-2">
                        <p class="my-1">Color</p>
                        
                        <div class="d-flex" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color-boton-header-input" name="color-boton-header-input" value="#cd0a10">
                            <input type="color" class="form-control form-control-color p-0" id="color-boton-header" value="#cd0a10">
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <div  class="d-none" id="encabezado">
            <div class="border-bottom py-2">
                <button class="border-0 w-100 text-start" style="background-color: #fff;" id="back_encabezado"><i class="fas fa-chevron-left"></i> Encabezado</button>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneNav" aria-expanded="true" aria-controls="collapseOneNav">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/vector-seccion.svg')}}" alt="svg seccion"> <small>Sección Encabezado</small></b></p>
                </button>
                <ul class="list-unstyled ps-4 mt-2 collapse show" id="collapseOneNav" data-bs-parent="#accordionExample">
                    <li>
                        <p class="mb-1">Distribución Menú</p>
                        <div class="d-flex justify-content-center" style="gap: 1.2em;">
                            <div class="d-none">
                                <input hidden type="radio" name="distribucion_menu" id="menu-left" value="1" class="distribucion_menu">
                                <label for="menu-left" class="d-flex align-items-center border border-3 p-2 cursor menu-left">
                                    <img class="img-fluid" src="{{asset('backend/svg/menu-left.svg')}}" alt="">
                                </label>
                            </div>
                            <div>
                                <input hidden type="radio" name="distribucion_menu" id="menu-right" value="1" class="distribucion_menu" checked>
                                <label for="menu-right" class="d-flex align-items-center border border-3 p-2 cursor menu-right">
                                    <img class="img-fluid" src="{{asset('backend/svg/menu-right.svg')}}" alt="">
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="my-2">
                        <p class="my-1">Color Menú</p>
                        
                        <div class="d-flex" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color-menu-input" name="color-menu-input" value="#000000">
                            <input type="color" class="form-control form-control-color p-0" id="color-menu" value="#000000">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoNav" aria-expanded="true" aria-controls="collapseTwoNav">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/logo-imagen.svg')}}" alt="svg seccion"> <small>Logo</small></b></p>
                </button>
                <ul class="list-unstyled ps-4 mt-2 collapse" id="collapseTwoNav" data-bs-parent="#accordionExample">
                    <li>
                        <p class="mb-1">Imagen Logo</p>
                        <div class="img-subir">
                            <label for="logo-subir">
                                <div class="cursor">
                                    <div id="upload-logo">
                                        <img src="{{asset('backend/svg/ssubir.svg')}}" alt="">
                                        <h6>Click para Actualizar</h6>
                                        <p>PNG, JPG (max. 1,000x1,000px)</p>
                                    </div>
                                    <div>
                                        <img class="img-fluid" id="preview-logo">
                                    </div>
                                </div>
                            </label>
                            <input hidden type="file" name="logo-subir" id="logo-subir">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="py-2 border-bottom">
                <button class="header-edit-web" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeNav" aria-expanded="true" aria-controls="collapseThreeNav">
                    <p class="mb-0"><b><img src="{{asset('backend/svg/cuadro-titulo.svg')}}" alt="svg seccion"> <small>Titulos de navegación</small></b></p>
                </button>
                <ul class="list-unstyled ps-4 mt-2 collapse" id="collapseThreeNav" data-bs-parent="#accordionExample">
                    <li>
                        <p class="mb-1">Configuración Navegación</p>
                        <div class="d-flex justify-content-start my-2" style="gap: 1.2em;">
                            <div class="d-flex justify-content-start mb-2" style="gap: 1.2em;">
                                <div class="p-1 cursor bold">
                                    <input hidden type="checkbox" name="bold-menu" id="bold-menu">
                                    <label for="bold-menu" class="d-flex align-items-center cursor">
                                        <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" id="svg_bold_menu">
                                            <path d="M8.6 6.79C9.57 6.12 10.25 5.02 10.25 4C10.25 1.74 8.5 0 6.25 0H0V14H7.04C9.13 14 10.75 12.3 10.75 10.21C10.75 8.69 9.89 7.39 8.6 6.79ZM3 2.5H6C6.83 2.5 7.5 3.17 7.5 4C7.5 4.83 6.83 5.5 6 5.5H3V2.5ZM6.5 11.5H3V8.5H6.5C7.33 8.5 8 9.17 8 10C8 10.83 7.33 11.5 6.5 11.5Z" fill="#98A2B3"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="p-1 cursor italic">
                                    <label for="italic-menu" class="d-flex align-items-center cursor">
                                        <svg width="12" height="14" viewBox="0 0 12 14" xmlns="http://www.w3.org/2000/svg" id="svg_italic_menu">
                                            <path d="M4 0V3H6.21L2.79 11H0V14H8V11H5.79L9.21 3H12V0H4Z" fill="#98A2B3"/>
                                        </svg>
                                    </label>
                                    <input hidden type="checkbox" name="italic-menu" id="italic-menu">
                                </div>
                            </div>
                        </div>
                        <div class="btn-group mb-2" role="group">
                            <input type="radio" class="btn-check" name="tamanoMenu" id="tamanoMenu1" autocomplete="off" checked>
                            <label class="btn btn-outline-text" for="tamanoMenu1"><small><b>Chico</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoMenu" id="tamanoMenu2" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoMenu2"><small><b>Mediano</b></small></label>
                            
                            <input type="radio" class="btn-check" name="tamanoMenu" id="tamanoMenu3" autocomplete="off">
                            <label class="btn btn-outline-text" for="tamanoMenu3"><small><b>Grande</b></small></label>
                        </div>
                        
                        <p class="my-1">Color Navegación</p>
                        <div class="d-flex my-2" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color_navegacion_input" name="color_navegacion_input" value="#FFFFFF">
                            <input type="color" class="form-control form-control-color p-0" id="color_navegacion" value="#FFFFFF">
                        </div>
                        
                        <p class="my-1">Color Navegación Activo</p>
                        <div class="d-flex my-2" role="group" style="gap: 0.4em;">
                            <input type="text" class="form-control" id="color_navegacion_input_hover" name="color_navegacion_input_hover" value="#fbbb01">
                            <input type="color" class="form-control form-control-color p-0" id="color_navegacion_hover" value="#fbbb01">
                        </div>
                    </li>



                    <li class="my-2">
                        <p class="my-2"><b>Navegación 1</b></p>
                        <p class="my-1">Texto</p>
                        <input type="text" class="form-control p-2" id="navegacion_1" value="¿CÓMO PARTICIPAR?">
                        <p class="my-1">Direccionar</p>
                        <select class="form-select" name="direccionar_1" id="direccionar_1">
                            <option value="#participar" selected>Como Participar</option>
                            <option value="#formulario-participar">Formulario Participar</option>
                            <option value="#ganadores">Ganadores</option>
                            <option value="#preguntas-frecuentes">Preguntas Frecuentes</option>
                            <option value="">Términos y condiciones</option>
                        </select>
                    </li>
                    <li class="my-2">
                        <p class="my-2"><b>Navegación 2</b></p>
                        <input type="text" class="form-control p-2" id="navegacion_2" value="PREGUNTAS FRECUENTES">
                        <p class="my-1">Direccionar</p>
                        <select class="form-select" name="direccionar_2" id="direccionar_2">
                            <option value="#participar">Como Participar</option>
                            <option value="#formulario-participar">Formulario Participar</option>
                            <option value="#ganadores">Ganadores</option>
                            <option value="#preguntas-frecuentes" selected>Preguntas Frecuentes</option>
                            <option value="">Términos y condiciones</option>
                        </select>
                    </li>
                    <li class="my-2">
                        <p class="my-2"><b>Navegación 3</b></p>
                        <input type="text" class="form-control p-2" id="navegacion_3" value="TÉRMINOS Y CONDICIONES">
                        <p class="my-1">Direccionar</p>
                        <select class="form-select" name="direccionar_3" id="direccionar_3">
                            <option value="#participar">Como Participar</option>
                            <option value="#formulario-participar">Formulario Participar</option>
                            <option value="#ganadores">Ganadores</option>
                            <option value="#preguntas-frecuentes">Preguntas Frecuentes</option>
                            <option value="#terminos_condiciones" selected>Términos y condiciones</option>
                        </select>
                    </li>
                    <li class="my-2">
                        <p class="my-2"><b>Navegación 4</b></p>
                        <input type="text" class="form-control p-2" id="navegacion_4" value="VER GANADORES">
                        <p class="my-1">Direccionar</p>
                        <select class="form-select" name="direccionar_4" id="direccionar_4">
                            <option value="#participar">Como Participar</option>
                            <option value="#formulario-participar">Formulario Participar</option>
                            <option value="#ganadores" selected>Ganadores</option>
                            <option value="#preguntas-frecuentes">Preguntas Frecuentes</option>
                            <option value="">Términos y condiciones</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-9 p-0 landing_page position-relative" id="landing_page" style="overflow-y: scroll; height: 100vh;">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            :root {
                --landing: #080808;
                --color-text1: #fff;
                --color-active-nav: #fbbb01;
                --popins: "Poppins", sans-serif;
                --bg-nav: #080808;
                --buttom-header: #cd0a10;
                --color-buttom-header: #fff;
                --border-participar: #fbbb01;
                --title-participar: #fbbb01;
                --buttom-participar: #fbbb01;
                --buttom-vermas: #fbbb01;
                --color-vermas: #fff;
                --bg-arccordion: #080808;
                --color-active-arccordion: #fbbb01;
                --color-text-arccordion: #fff;
            }

            .landing_page {
                color: var(--color-text1) !important;
                background-color: var(--landing);
                font-family: var(--popins) !important;
            }

            .nav-landing {
                background-color: var(--bg-nav);
            }

            .navbar a {
                color: var(--color-text1);
                font-weight: 500;
            }

            .navbar a:hover {
                color: var(--color-active-nav) !important;
                text-decoration: underline;
            }

            .navbar a.active {
                color: var(--color-active-nav) !important;
                text-decoration: underline;
            }

            header {
                min-height: 600px;
                background-size: cover;
                background-repeat: no-repeat;
                padding: 3em;
                padding-top: 8em;
            }

            .btn-landing {
                background-color: var(--buttom-header);
                color: var(--color-buttom-header);
                border-radius: 25px;
                font-weight: 500;
                padding-left: 2em;
                padding-right: 2em;
            }

            .btn-landing:hover {
                background-color: var(--buttom-header) !important;
            }

            section {
                position: relative;
                background-color: transparent;
                width: 90%;
                max-width: 1187px;
                margin: auto;
                border: 1px solid var(--border-participar);
                border-radius: 25px;
                padding: 2em 3.5em;
                margin-bottom: 5em;
                padding-bottom: 5em;
            }

            section .aside-row {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2em;
            }

            section .movil-aside {
                display: grid;
                grid-template-columns: 1fr !important;
                gap: 0em;
            }

            section .item-participar {
                width: 100%;
                height: 300px;
            }

            section .item-participar:first-child {
                border-top-left-radius: 10px;
            }

            section .item-participar:last-child {
                border-top-right-radius: 10px;
            }

            .title-participar {
                color: var(--title-participar);
                font-weight: 600;
                margin-bottom: 1.7rem;
            }

            section .btn-landing {
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translate(-50%, 50%);
            }

            .input-text {
                border-radius: 25px;
            }

            .btn-participar, .btn-ver-mas {
                background-color: var(--buttom-participar);
                color: var(--color-buttom-header);
                border-radius: 25px;
                font-weight: 500;
                padding-left: 2em;
                padding-right: 2em;
            }

            .btn-participar:hover {
                background-color: var(--buttom-participar) !important;
            }


            .landing_page table {
                color: var(--color-text1);
            }

            .btn-ver-mas {
                background-color: var(--buttom-vermas);
                color: var(--color-vermas);
            }

            .accordion-item {
                background-color: var(--bg-arccordion) !important;
                color: var(--color-text-arccordion);
            }

            .accordion-button {
                background-color: var(--bg-arccordion) !important;
                color: var(--color-text-arccordion);
            }

            .accordion-button:not(.collapsed) {
                color: var(--color-active-arccordion);
                background-color: var(--bg-arccordion) !important;
                box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
            }

            footer a {
                display: block;
                width: 50px;
                margin: 0px 2em;
            }


            @media (max-width: 575.98px) {
                .aside-row {
                    grid-template-columns: 1fr !important;
                    gap: 0em !important;
                }
            }


            @media (min-width: 576px) and (max-width: 767.98px) {
                .aside-row {
                    grid-template-columns: 1fr !important;
                    gap: 0em !important;
                }
            }


            @media (min-width: 768px) and (max-width: 991.98px) {
                .aside-row {
                    grid-template-columns: 1fr 1fr !important;
                    gap: 0em !important;
                }
            }


            @media (min-width: 992px) and (max-width: 1199.98px) {
                .aside-row {
                    grid-template-columns: 1fr 1fr !important;
                    gap: 0em !important;
                }
            }


            @media (min-width: 1200px) {

            }

            .nav-position {
                position: sticky;
                top: 0;
                z-index: 999;
            }

            .cursor {
                cursor: pointer;
            }

            .img-subir {
                display: block;
                width: 100%;
                padding: 1.2em;
                border: 1px solid #D0D5DD;
                border-radius: 8px;
                text-align: center;
                cursor: pointer;
            }

            .img-subir h6 {
                color: #027A48 !important;
            }

            .img-subir p {
                color: #868686;
                font-weight: 400;
                font-size: 12px;
                margin: 0;
            }

            .btn-outline-text {
                border: 1px solid #D0D5DD !important;
            }

            .btn-check:checked+.btn {
                background-color: #E620200D;
                border-color: #E62020 !important;
            }

            .header-edit-web {
                width: 100%;
                text-align: left;
                border: 0;
                background-color: #fff !important;
            }

            .distribucion:checked ~ .horizontal {
                border-color: #E62020 !important;
                background-color: #E620200D;
            }

            .distribucion:checked ~ .vertical {
                border-color: #E62020 !important;
                background-color: #E620200D;
            }

            .distribucion_menu:checked ~ .menu-left {
                border-color: #E62020 !important;
                background-color: #E620200D;
            }

            .distribucion_menu:checked ~ .menu-right {
                border-color: #E62020 !important;
                background-color: #E620200D;
            }

            .table thead tr th,  .table tbody tr td {
                background-color: transparent !important;
                color: #fff !important;
            }
        </style>
        <div class="container-fluid nav-landing nav-position px-5" id="nav-landing">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('backend/landing/img/Recurso 1.png')}}" alt="Bootstrap" id="logo-nav" style="width: 100px;">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars" style="color: #fff;"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex" style="gap: 3rem;">
                                    <li class="nav-item">
                                        <a class="nav-link active item_landing_menu" aria-current="page" href="#participar" id="navegacion_1_menu">¿CÓMO PARTICIPAR?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item_landing_menu" href="#preguntas-frecuentes" id="navegacion_2_menu">PREGUNTAS FRECUENTES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item_landing_menu" href="#" id="navegacion_3_menu">TÉRMINOS Y CONDICIONES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item_landing_menu" href="#ganadores" id="navegacion_4_menu">VER GANADORES</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="w-100">
            <header id="header" class="w-100 d-flex flex-column justify-content-center align-items-center" style="gap: 1.2rem;background-image: url({{asset('backend/landing/img/fondo-header.jpg')}});">
                <img class="img-fluid" src="{{asset('backend/landing/img/Objeto inteligente vectorial.png')}}" alt="" id="imagen-header">
                <p class="text-center fs-1 w-100" id="titulo_header"></p>
                <p class="text-center fs-6 w-100" id="parrafo-header"></p>
                <a href="#formulario-participar" class="btn btn-landing mt-5" id="btn_participar_header">PARTICIPAR</a>
            </header>
            <div class="pt-5" id="participar">
                <section>
                    <h1 class="text-center title-participar">¿Cómo participar?</h1>
                    <div class="aside-row">
                        <aside class="col-12 col-md-6 col-lg-4 item-participar">
                            <img class="img-fluid" src="{{asset('backend/landing/img/participar-1.png')}}" alt="">
                        </aside>
                        <aside class="col-12 col-md-6 col-lg-4 item-participar">
                            <img class="img-fluid" src="{{asset('backend/landing/img/participar-2.png')}}" alt="">
                        </aside>
                        <aside class="col-12 col-md-6 col-lg-4 item-participar">
                            <img class="img-fluid" src="{{asset('backend/landing/img/participar-3.png')}}" alt="">
                        </aside>
                    </div>
                    <button class="btn btn-landing">VER TÉRMINOS Y CONDICIONES</button>
                </section>
            </div>
            <div class="mt-5" id="formulario-participar">
                <section>
                    <h1 class="text-center title-participar">Formulario Participar</h1>
                    <form class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">Apellido</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">Tipo de documento</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">N° de documento</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">Edad (*Mayores de 18 años)</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">N° telefónico</label>
                            <input type="text" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">Correo Electronico</label>
                            <input type="email" class="form-control input-text">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name">N° de LOTE + foto de producto</label>
                            <input type="text" class="form-control input-text">
                            <input type="file" name="" id="" class="form-control mt-2">
                        </div>

                        <div class="col-12 row mt-3">
                            <div class="form-check col-12 col-md-6 col-lg-4">
                                <input class="form-check-input" type="checkbox" name="termino_condicion" id="termino_condicion">
                                <label class="form-check-label" for="termino_condicion">
                                    Acepto terminos y condiciones
                                </label>
                            </div>
                            <div class="form-check col-12 col-md-6 col-lg-4">
                                <input class="form-check-input" type="checkbox" name="datos_web" id="datos_web">
                                <label class="form-check-label" for="datos_web">
                                    Deseo usar mis datos para crear un usuario en plataforma web
                                </label>
                            </div>
                            <div class="form-check col-12 col-md-6 col-lg-4">
                                <input class="form-check-input" type="checkbox" name="politica_privacidad" id="politica_privacidad">
                                <label class="form-check-label" for="politica_privacidad">
                                    Acepto política de privacidad de datos
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-participar">PARTICIPAR</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="mt-5"  id="ganadores">
                <section>
                    <h1 class="text-center title-participar">Ganadores</h1>
                    <div class="w-100 table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>N° de documento</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                                <tr>
                                    <td>73897044</td>
                                    <td>Kevin Blas Huamán</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-ver-mas">Ver más</button>
                    </div>
                </section>
            </div>
            <div class="mt-5" id="preguntas-frecuentes">
                <section>
                    <h1 class="text-center title-participar">Preguntas Frecuentes</h1>
                    <div class="w-100">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="w-100 mb-5" id="redes">
            <footer>
                <h1 class="text-center title-participar mb-5">Redes Sociales</h1>
                <div class="d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid" src="{{asset('backend/svg/facebook-svgrepo-com.svg')}}" alt="">
                    </a>
                    <a href="">
                        <img class="img-fluid" src="{{asset('backend/svg/instagram-svgrepo-com.svg')}}" alt="">
                    </a>
                    <a href="">
                        <img class="img-fluid" src="{{asset('backend/svg/linkedin-linked-in-svgrepo-com.svg')}}" alt="">
                    </a>
                </div>
            </footer>
            </div>
        </div>

    </div>
</div>

<script>
    const menu_edit = document.getElementById("menu_edit");
    function retornoMenuEdit() {
        menu_edit.classList.remove('d-none'); 
        menu_edit.classList.add('d-block'); 
    }
    function retornoMenuEditNone() {
        menu_edit.classList.add('d-none'); 
        menu_edit.classList.remove('d-block'); 
    }
    const pagina_principal = document.getElementById("pagina_principal");
    const back_principal = document.getElementById("back_principal");
    const principal_menu = document.getElementById("principal-menu");
    
    principal_menu.addEventListener('click', function() {
        retornoMenuEditNone();
        pagina_principal.classList.add('d-block'); 
        pagina_principal.classList.remove('d-none'); 
    })

    back_principal.addEventListener('click', () => {
        pagina_principal.classList.remove('d-block'); 
        pagina_principal.classList.add('d-none'); 
        retornoMenuEdit();
    })

    const encabezado = document.getElementById("encabezado");
    const back_encabezado = document.getElementById("back_encabezado");
    const encabezado_menu = document.getElementById("encabezado-menu");
    
    encabezado_menu.addEventListener('click', function() {
        retornoMenuEditNone();
        encabezado.classList.add('d-block'); 
        encabezado.classList.remove('d-none'); 
    })
    back_encabezado.addEventListener('click', () => {
        encabezado.classList.remove('d-block'); 
        encabezado.classList.add('d-none'); 
        retornoMenuEdit();
    })
</script>
<script>

    const header = document.getElementById('header')
    const input_titulo_header = document.getElementById('input-titulo-header')
    const titulo_header = document.getElementById('titulo_header')
    const parrafo_header = document.getElementById('parrafo-header')

    document.getElementById('banner-subir').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const preview = document.getElementById('preview-banner');
                const upload = document.getElementById('upload-banner')
                const parentElement = preview.parentNode;
                preview.src = e.target.result; // Establece la fuente de la imagen
                preview.style.display = 'block'; // Muestra la imagen
                upload.classList.add("d-none")
                header.style.backgroundImage = `url(${e.target.result})`;
            };

            reader.readAsDataURL(file); // Lee la imagen como una URL de datos
        }
    });

    input_titulo_header.addEventListener('input', function(event) {
        titulo_header.innerText = event.target.value
    })

    //fs-1

    // tamaño titulo
    const tamanoTitulo1 = document.getElementById("tamanoTitulo1")
    const tamanoTitulo2 = document.getElementById("tamanoTitulo2")
    const tamanoTitulo3 = document.getElementById("tamanoTitulo3")

    tamanoTitulo1.addEventListener("change", function() {
        titulo_header.classList.remove('fs-1')
        titulo_header.classList.remove('fs-3')
        titulo_header.classList.add('fs-6')
    })
    tamanoTitulo2.addEventListener("change", function() {
        titulo_header.classList.remove('fs-1')
        titulo_header.classList.add('fs-3')
        titulo_header.classList.remove('fs-6')
    })
    tamanoTitulo3.addEventListener("change", function() {
        titulo_header.classList.add('fs-1')
        titulo_header.classList.remove('fs-3')
        titulo_header.classList.remove('fs-6')
    })

    // alineacion
    const alineacionTitulo1 = document.getElementById('alineacionTitulo1')
    const alineacionTitulo2 = document.getElementById('alineacionTitulo2')
    const alineacionTitulo3 = document.getElementById('alineacionTitulo3')

    alineacionTitulo1.addEventListener("change", function() {
        titulo_header.classList.remove('text-end')
        titulo_header.classList.remove('text-center')
        titulo_header.classList.add('text-start')
    })
    alineacionTitulo2.addEventListener("change", function() {
        titulo_header.classList.remove('text-end')
        titulo_header.classList.add('text-center')
        titulo_header.classList.remove('text-start')
    })
    alineacionTitulo3.addEventListener("change", function() {
        titulo_header.classList.add('text-end')
        titulo_header.classList.remove('text-center')
        titulo_header.classList.remove('text-start')
    })

    // color
    const color_titulo_input = document.getElementById('color-titulo-input')
    const color_titulo = document.getElementById('color-titulo')

    color_titulo_input.addEventListener("input", function(event) {
        color_titulo.value = event.target.value
        titulo_header.style.color = event.target.value
    })

    color_titulo.addEventListener('input', function(event) {
        color_titulo_input.value = this.value
        titulo_header.style.color = this.value
    })

    // estilo texto
    const bold_titulo_header = document.getElementById('bold-titulo-header')
    const italic_titulo_header = document.getElementById('italic-titulo-header')

    bold_titulo_header.addEventListener('change', function(event) {
        const svg_bold = document.querySelector('#svg_bold path')
        if (this.checked) {
            titulo_header.classList.add('fw-bold')
            svg_bold.setAttribute('fill', '#000');
        } else {
            titulo_header.classList.remove('fw-bold')
            svg_bold.setAttribute('fill', '#98A2B3');
        }
    })

    italic_titulo_header.addEventListener('change', function(event) {
        const svg_italic = document.querySelector('#svg_italic path')
        if (this.checked) {
            titulo_header.classList.add('fst-italic')
            svg_italic.setAttribute('fill', '#000');
        } else {
            titulo_header.classList.remove('fst-italic')
            svg_italic.setAttribute('fill', '#98A2B3');
        }
    })


    // parrafo titulo

    // estilo texto
    const titulo_parrafo = document.getElementById('parrafo-header')
    const input_text_header = document.getElementById('texto-header')
    const bold_titulo_parrafo = document.getElementById('bold-titulo-parrafo')
    const italic_titulo_parrafo = document.getElementById('italic-titulo-parrafo')

    bold_titulo_parrafo.addEventListener('change', function(event) {
        console.log(this.checked)
        const svg_bold = document.querySelector('#svg_bold_texto path')
        if (this.checked) {
            titulo_parrafo.classList.add('fw-bold')
            svg_bold.setAttribute('fill', '#000');
        } else {
            titulo_parrafo.classList.remove('fw-bold')
            svg_bold.setAttribute('fill', '#98A2B3');
        }
    })

    italic_titulo_parrafo.addEventListener('change', function(event) {
        const svg_italic = document.querySelector('#svg_italic_texto path')
        if (this.checked) {
            titulo_parrafo.classList.add('fst-italic')
            svg_italic.setAttribute('fill', '#000');
        } else {
            titulo_parrafo.classList.remove('fst-italic')
            svg_italic.setAttribute('fill', '#98A2B3');
        }
    })

    input_text_header.addEventListener('input', function(event) {
        titulo_parrafo.innerText = event.target.value
    })

    // tamaño titulo
    const tamanoTexto1 = document.getElementById("tamanoTexto1")
    const tamanoTexto2 = document.getElementById("tamanoTexto2")
    const tamanoTexto3 = document.getElementById("tamanoTexto3")

    tamanoTexto1.addEventListener("change", function() {
        titulo_parrafo.classList.remove('fs-1')
        titulo_parrafo.classList.remove('fs-3')
        titulo_parrafo.classList.add('fs-6')
    })
    tamanoTexto2.addEventListener("change", function() {
        titulo_parrafo.classList.remove('fs-1')
        titulo_parrafo.classList.add('fs-3')
        titulo_parrafo.classList.remove('fs-6')
    })
    tamanoTexto3.addEventListener("change", function() {
        titulo_parrafo.classList.add('fs-1')
        titulo_parrafo.classList.remove('fs-3')
        titulo_parrafo.classList.remove('fs-6')
    })

    // alineacion
    const alineacionTexto1 = document.getElementById('alineacionTexto1')
    const alineacionTexto2 = document.getElementById('alineacionTexto2')
    const alineacionTexto3 = document.getElementById('alineacionTexto3')

    alineacionTexto1.addEventListener("change", function() {
        titulo_parrafo.classList.remove('text-end')
        titulo_parrafo.classList.remove('text-center')
        titulo_parrafo.classList.add('text-start')
    })
    alineacionTexto2.addEventListener("change", function() {
        titulo_parrafo.classList.remove('text-end')
        titulo_parrafo.classList.add('text-center')
        titulo_parrafo.classList.remove('text-start')
    })
    alineacionTexto3.addEventListener("change", function() {
        titulo_parrafo.classList.add('text-end')
        titulo_parrafo.classList.remove('text-center')
        titulo_parrafo.classList.remove('text-start')
    })

    // color
    const color_texto_input = document.getElementById('color-texto-input')
    const color_texto = document.getElementById('color-texto')

    color_texto_input.addEventListener("input", function(event) {
        color_texto.value = event.target.value
        titulo_parrafo.style.color = event.target.value
    })

    color_texto.addEventListener('input', function(event) {
        color_texto_input.value = this.value
        titulo_parrafo.style.color = this.value
    })


    // Imagen
    

    document.getElementById('imagen-subir').addEventListener('change', function(event) {
        console.log('das')
        const file = event.target.files[0];
        if (file) {
            const reader2 = new FileReader();
            
            reader2.onload = function(e) {
                const preview2 = document.getElementById('preview-imagen');
                const upload2 = document.getElementById('upload-imagen')
                const imagen_header = document.getElementById('imagen-header')
                const parentElement = preview2.parentNode;
                preview2.src = e.target.result; // Establece la fuente de la imagen
                preview2.style.display = 'block'; // Muestra la imagen
                upload2.classList.add("d-none")
                imagen_header.src = e.target.result;
            };

            reader2.readAsDataURL(file); // Lee la imagen como una URL de datos
        }
    });

    // Boton header
    const direccionar_boton_header = document.getElementById("direccionar_boton_header");
    const btn_participar_header = document.getElementById("btn_participar_header");

    direccionar_boton_header.addEventListener('change', function(event) {
        btn_participar_header.setAttribute("href", event.target.value)
    });

    const bold_boton_header = document.getElementById("bold-boton-header")
    const italic_boton_header = document.getElementById("italic-boton-header")
    const titulo_boton_header = document.getElementById("titulo-boton-header")

    bold_boton_header.addEventListener('change', function(event) {
        const svg_bold = document.querySelector('#svg_bold_btn_header path')
        if (this.checked) {
            btn_participar_header.classList.add('fw-bold')
            svg_bold.setAttribute('fill', '#000');
        } else {
            btn_participar_header.classList.remove('fw-bold')
            svg_bold.setAttribute('fill', '#98A2B3');
        }
    })
    
    italic_boton_header.addEventListener('change', function(event) {
        const svg_italic = document.querySelector('#svg_italic_btn_header path')
        if (this.checked) {
            btn_participar_header.classList.add('fst-italic')
            svg_italic.setAttribute('fill', '#000');
        } else {
            btn_participar_header.classList.remove('fst-italic')
            svg_italic.setAttribute('fill', '#98A2B3');
        }
    })

    titulo_boton_header.addEventListener('input', function(event) {
        btn_participar_header.innerText = event.target.value
    })

    // tamaño texto boton
    const tamanoBotonHeader1 = document.getElementById("tamanoBotonHeader1")
    const tamanoBotonHeader2 = document.getElementById("tamanoBotonHeader2")
    const tamanoBotonHeader3 = document.getElementById("tamanoBotonHeader3")

    tamanoBotonHeader1.addEventListener("change", function() {
        btn_participar_header.classList.remove('fs-1')
        btn_participar_header.classList.remove('fs-3')
        btn_participar_header.classList.add('fs-6')
    })
    tamanoBotonHeader2.addEventListener("change", function() {
        btn_participar_header.classList.remove('fs-1')
        btn_participar_header.classList.add('fs-3')
        btn_participar_header.classList.remove('fs-6')
    })
    tamanoBotonHeader3.addEventListener("change", function() {
        btn_participar_header.classList.add('fs-1')
        btn_participar_header.classList.remove('fs-3')
        btn_participar_header.classList.remove('fs-6')
    })

    // color
    const color_boton_header_input = document.getElementById('color-boton-header-input')
    const color_boton_header = document.getElementById('color-boton-header')

    color_boton_header_input.addEventListener("input", function(event) {
        color_boton_header.value = event.target.value
        btn_participar_header.style.backgroundColor = event.target.value
    })

    color_boton_header.addEventListener('input', function(event) {
        color_boton_header_input.value = this.value
        btn_participar_header.style.backgroundColor = this.value
    })


</script>
<script>
    const logo_nav = document.getElementById('logo-nav')
    document.getElementById('logo-subir').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const preview = document.getElementById('preview-logo');
                const upload = document.getElementById('upload-logo')
                const parentElement = preview.parentNode;
                preview.src = e.target.result; // Establece la fuente de la imagen
                preview.style.display = 'block'; // Muestra la imagen
                upload.classList.add("d-none")
                logo_nav.src = e.target.result;
            };

            reader.readAsDataURL(file); // Lee la imagen como una URL de datos
        }
    });

    // COlor menu
    const color_menu_input = document.getElementById("color-menu-input");
    const color_menu = document.getElementById("color-menu");
    const nav_landing = document.getElementById("nav-landing");

    color_menu_input.addEventListener("input", function(event) {
        color_menu.value = event.target.value
        nav_landing.style.backgroundColor = event.target.value
    })

    color_menu.addEventListener('input', function(event) {
        color_menu_input.value = this.value
        nav_landing.style.backgroundColor = this.value
    })

    // estilo texto
    const bold_menu = document.getElementById('bold-menu')
    const italic_menu = document.getElementById('italic-menu')
    const item_landing_menu = document.querySelectorAll(".item_landing_menu");

    bold_menu.addEventListener('change', function(event) {
        const svg_bold = document.querySelector('#svg_bold_menu path')
        if (this.checked) {
            item_landing_menu.forEach(menu => {
                menu.classList.add('fw-bold')
            })
            svg_bold.setAttribute('fill', '#000');
        } else {
            item_landing_menu.forEach(menu => {
                menu.classList.remove('fw-bold')
            })
            svg_bold.setAttribute('fill', '#98A2B3');
        }
    })

    italic_menu.addEventListener('change', function(event) {
        const svg_italic = document.querySelector('#svg_italic_menu path')
        if (this.checked) {
            item_landing_menu.forEach(menu => {
                menu.classList.add('fst-italic')
            })
            svg_italic.setAttribute('fill', '#000');
        } else {
            item_landing_menu.forEach(menu => {
                menu.classList.remove('fst-italic')
            })
            svg_italic.setAttribute('fill', '#98A2B3');
        }
    })

    // tamaño navegacion
    const tamanoMenu1 = document.getElementById("tamanoMenu1")
    const tamanoMenu2 = document.getElementById("tamanoMenu2")
    const tamanoMenu3 = document.getElementById("tamanoMenu3")

    tamanoMenu1.addEventListener("change", function() {
        item_landing_menu.forEach(menu => {
            menu.classList.remove('fs-4')
            menu.classList.remove('fs-5')
            menu.classList.add('fs-6')
        })
    })
    tamanoMenu2.addEventListener("change", function() {
        item_landing_menu.forEach(menu => {
            menu.classList.remove('fs-4')
            menu.classList.add('fs-5')
            menu.classList.remove('fs-6')
        })
    })
    tamanoMenu3.addEventListener("change", function() {
        item_landing_menu.forEach(menu => {
            menu.classList.add('fs-4')
            menu.classList.remove('fs-5')
            menu.classList.remove('fs-6')
        })
    })

    // colores
    const color_navegacion_input = document.getElementById("color_navegacion_input");
    const color_navegacion = document.getElementById("color_navegacion");
    let root = document.documentElement;

    color_navegacion_input.addEventListener("input", function(event) {
        color_navegacion.value = event.target.value
        item_landing_menu.forEach(menu => {
            menu.style.color = event.target.value
        })
        
    })

    color_navegacion.addEventListener('input', function(event) {
        color_navegacion_input.value = this.value
        item_landing_menu.forEach(menu => {
            menu.style.color = this.value
        })
    })

    const color_navegacion_input_hover = document.getElementById("color_navegacion_input_hover");
    const color_navegacion_hover = document.getElementById("color_navegacion_hover");


    color_navegacion_input_hover.addEventListener("input", function(event) {
        color_navegacion_hover.value = event.target.value
        root.style.setProperty('--color-active-nav', `${event.target.value}`)
    })

    color_navegacion_hover.addEventListener('input', function(event) {
        color_navegacion_input_hover.value = this.value
        root.style.setProperty('--color-active-nav', `${this.value}`)
    })

    // Navegacion
    const navegacion_1 = document.getElementById("navegacion_1");
    const navegacion_2 = document.getElementById("navegacion_2");
    const navegacion_3 = document.getElementById("navegacion_3");
    const navegacion_4 = document.getElementById("navegacion_4");

    navegacion_1.addEventListener("input", function(event) {
        const item = document.getElementById("navegacion_1_menu")
        item.innerHTML = event.target.value
    })

    navegacion_2.addEventListener("input", function(event) {
        const item = document.getElementById("navegacion_2_menu")
        item.innerHTML = event.target.value
    })

    navegacion_3.addEventListener("input", function(event) {
        const item = document.getElementById("navegacion_3_menu")
        item.innerHTML = event.target.value
    })

    navegacion_4.addEventListener("input", function(event) {
        const item = document.getElementById("navegacion_4_menu")
        item.innerHTML = event.target.value
    })

    //direccionar
    const direccionar_1 = document.getElementById("direccionar_1");
    const direccionar_2 = document.getElementById("direccionar_2");
    const direccionar_3 = document.getElementById("direccionar_3");
    const direccionar_4 = document.getElementById("direccionar_4");

    direccionar_1.addEventListener('change', function(event) {
        const item = document.getElementById("navegacion_1_menu")
        item.setAttribute("href", event.target.value)
    });

    direccionar_2.addEventListener('change', function(event) {
        const item = document.getElementById("navegacion_2_menu")
        item.setAttribute("href", event.target.value)
    });

    direccionar_3.addEventListener('change', function(event) {
        const item = document.getElementById("navegacion_3_menu")
        item.setAttribute("href", event.target.value)
    });

    direccionar_4.addEventListener('change', function(event) {
        const item = document.getElementById("navegacion_4_menu")
        item.setAttribute("href", event.target.value)
    });
</script>
@endsection