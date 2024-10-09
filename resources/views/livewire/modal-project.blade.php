<div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <button type="button" class="close-modal true" data-bs-dismiss="modal">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#323232"/>
                            </svg>
                        </button>
                        <form wire:ignore wire:submit.prevent="submit" id="form-proyecto">
                            <!-- Progress bar -->
                            <div class="progressbar">
                                <div class="progress" id="progress"></div>
                                
                                <div
                                    class="progress-step progress-step-active"
                                    data-title="Promoción"
                                ></div>
                                <div class="progress-step" data-title="Datos"></div>
                                <div class="progress-step" data-title="Resumen"></div>
                            </div>
                        
                            <!-- Steps -->
                            <div class="form-step form-step-active">
                                <div class="container-modal-alicorp">
                                    <div class="w-100">
                                        <h4>¿Qué promoción necesitas?</h4>
                                        <p class="subtitle-modal">Selecciona una de los siguientes opciones para continuar con la creación</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <button type="button" class="img-tipo-proyecto" id="btn-landing" wire:click="changeProjecto(1)">
                                                <img class="img-fluid" src="{{asset('backend/img/proyecto-landing.png')}}" alt="Landing Promocional">
                                                <p>Landing Promocional</p>
                                            </button>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <button type="button" class="img-tipo-proyecto" id="btn-web" wire:click="changeProjecto(2)">
                                                <img class="img-fluid" src="{{asset('backend/img/proyecto-juego-web.png')}}" alt="Landing Promocional">
                                                <p>Juego Web</p>
                                            </button>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <button type="button" class="img-tipo-proyecto" id="btn-campana" wire:click="changeProjecto(3)">
                                                <img class="img-fluid" src="{{asset('backend/img/proyecto-juego-campana.png')}}" alt="Landing Promocional">
                                                <p>Juego Campaña</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-next width-50 ml-auto" id="next-first" disabled>Continuar</button>
                                </div>
                            </div>
                            <div class="form-step">
                                <div class="container-modal-alicorp">
                                    <div class="w-100 mb-4">
                                        <h4>Llena los datos</h4>
                                        <p class="subtitle-modal">Escribe los datos iniciales de la promoción <span class="tipo_promo_bold">Juego Web</span></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="nombrePromocion" class="form-label">Nombre del promoción</label>
                                            <input wire:model="nombre_promocion" name="nombre_promocion" type="text" id="nombrePromocion" class="form-control form-input-alicorp" placeholder="Escribir" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="descPromocion" class="form-label">Descripción de la promoción</label>
                                            <input wire:model="desc_promocion" type="text" id="descPromocion" name="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" required>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3" id="selectJuegoContent">
                                            <label for="selectJuego" class="form-label">Seleccionar Juego</label>
                                            <select wire:model="game_select" name="selectJuego" id="selectJuego" class="form-control form-input-alicorp">
                                                <option selected>-- Seleccionar --</option>
                                                @foreach ($game as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3" id="selectMarcaContent">
                                            <label for="selectMarca" class="form-label">Seleccionar Marca</label>
                                            {{-- <input type="text" id="nombrePromocion" class="form-control form-input-alicorp" placeholder="Escribir"> --}}
                                            <select class="form-select form-input-alicorp" id="selectMarca" data-placeholder="Escoja las marcas" multiple>
                                                <option>Christmas Island</option>
                                                <option>South Sudan</option>
                                                <option>Jamaica</option>
                                                <option>Kenya</option>
                                                <option>French Guiana</option>
                                                <option>Mayotta</option>
                                                <option>Liechtenstein</option>
                                                <option>Denmark</option>
                                                <option>Eritrea</option>
                                                <option>Gibraltar</option>
                                                <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option>Haiti</option>
                                                <option>Namibia</option>
                                                <option>South Georgia and the South Sandwich Islands</option>
                                                <option>Vietnam</option>
                                                <option>Yemen</option>
                                                <option>Philippines</option>
                                                <option>Benin</option>
                                                <option>Czech Republic</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns-group d-flex justify-content-between">
                                    <a href="#" class="btn btn-prev">Atras</a>
                                    <button type="button" class="btn btn-next btn-info-next" id="next-second">Continuar</button>
                                </div>
                            </div>
                            <div class="form-step">
                                <div class="container-modal-alicorp">
                                    <div class="w-100 mb-4">
                                        <h4>Resumen</h4>
                                        <p class="subtitle-modal">Revisa el resumen de la promoción creada </p>
                                    </div>
                                    <div class="w-100 resumen-modal">
                                        <div class="row mb-3">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <label>Tipo de Promoción</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-8">
                                                <input type="text" id="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" wire:model="tipoProyecto" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3 d-none" id="juego-resumen">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <label>Juego</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-8">
                                                <input type="text" id="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" wire:model="gameText" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <label>Nombre del promoción</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-8">
                                                <input type="text" id="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" wire:model="nombre_promocion" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <label>Descripción del promoción</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-8">
                                                <input type="text" id="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" wire:model="desc_promocion" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <label>Marca</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-8">
                                                <input type="text" id="descPromocion" class="form-control form-input-alicorp" placeholder="Escribir" readonly wire:model="marcas">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns-group d-flex justify-content-between">
                                    <a href="#" class="btn btn-prev">Atras</a>
                                    <button type="submit" class="btn btn-configuracion" id="next-fin">Crear promoción</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-none justify-content-center" id="form-success">
                        <button type="button" class="close-modal" data-bs-dismiss="modal" wire:click="cerrarModal">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#323232"/>
                            </svg>
                        </button>
                        <div class="content-success">
                            <div class="content-exito">
                                <h5>Creación Exitosa</h5>
                                <p class="subtitle-modal">El <span class="tipo_promo_bold">{{ $tipoProyecto }}</span> a sido creado</p>
                                <img src="{{ asset('backend/img/check.png') }}" alt="Check">
                                <p class="titulo-pro">{{ $nombreProyectoCreado }}</p>
                                <p class="id-pro"><b>ID: {{ $idProyecto }}</b></p>
                                <button type="button" class="btn btn-configuracion" data-bs-dismiss="modal" wire:click="redirectProyecto">Ir a Configuración del proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script src="{{ asset('backend/js/admin/step.js') }}"></script>
    @endsection
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('eventoLanding', () => {
                // Tu lógica de JavaScript aquí
                // tuFuncionEnJavaScript(); // Llama a tu función
                btnLandingPromocional()
            });
            Livewire.on('eventoWeb', () => {
                // Tu lógica de JavaScript aquí
                // tuFuncionEnJavaScript(); // Llama a tu función
                btJuegonWeb()
            });
            Livewire.on('eventoCampana', () => {
                // Tu lógica de JavaScript aquí
                // tuFuncionEnJavaScript(); // Llama a tu función
                btnJuegoCampana()
            });

            Livewire.on('eventoFinish', () => {
                // Tu lógica de JavaScript aquí
                // tuFuncionEnJavaScript(); // Llama a tu función
                finishCreate()
            });
        });
    </script>

    @section('script_jquery')
        <script>
            $( '#selectMarca' ).select2( {
                theme: "bootstrap-5",
                width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                placeholder: $( this ).data( 'placeholder' ),
                closeOnSelect: false,
                dropdownParent: $( '#selectMarca' ).parent(),
            } );
            // Escuchar el evento de cambio de Select2
            $('#selectMarca').on('change', function (e) {
                var data = $(this).val(); // Obtener los valores seleccionados
                @this.set('marcas', data.join(', ')); // Establecer la propiedad en Livewire
            });
        </script>
    @endsection
</div>
