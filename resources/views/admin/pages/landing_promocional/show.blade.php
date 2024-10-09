@extends('admin.pages.inicio.layout')

@section('header_left')
  <span>{{ $project["landing"]->project_type->name }} > <b>{{ $project["landing"]->nombre_promocion }}</b></span>
@endsection

@section('header_center')
<div class="d-flex">
</div>
@endsection

@section('header_right')
@if ($project["landing"]->status)
<button type="button" class="btn btn-inactivo">
    Activo
</button>
@else
<button type="button" class="btn btn-inactivo">
    Inactivo
</button>
@endif
@endsection


@section('inicio_dash')

    <div class="row-show">
        <x-admin.menu-reg ruta="{{$project['landing']->project_type->ruta_name}}" id="{{ $project['landing']->id }}" />
        <div class="body-right">
            <h3>Overview</h3>

            <div class="row">
                <div class="col-12">
                    <div class="card-w-full">
                        <div class="info-container">
                            <a href="{{ route('landing_promocional.show.overview', $project["landing"]->id ) }}"><img class="img-fluid" src="{{asset('backend/img/thumbnail.png')}}" alt=""></a>
                            <div class="info-card">
                                <p class="title-card"><a href="{{ route('landing_promocional.show.overview', $project["landing"]->id) }}">{{ $project["landing"]->nombre_promocion }}</a></p>
                                <p>{{ $project["landing"]->desc_promocion }}</p>
                                <p><small>Ultima actualización: {{ $project["landing"]->updated_at }}</small></p>
                                <p><small>Fecha creación: {{ $project["landing"]->created_at }}</small></p>
                            </div>
                        </div>
                        <div class="etapas-card">
                            <div class="item-etapa">
                                <span class="title-etapa"><b>Estado</b></span>
                                <div class="body-etapa">
                                    @if ($project["landing"]->status)
                                    <div class="bage-activo">
                                        Activo
                                    </div>
                                    @else
                                    <div class="bage-inactivo">
                                        Inactivo
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="item-etapa">
                                <span class="title-etapa"><b>Fecha Inicio</b></span>
                                <div class="body-etapa">
                                    <span>{{ $project["landing"]->fecha_ini_proyecto }}</span>
                                </div>
                            </div>
                            <div class="item-etapa">
                                <span class="title-etapa"><b>Fecha Fin</b></span>
                                <div class="body-etapa">
                                    <span>{{ $project->fecha_fin_proyecto ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="item-etapa">
                                <span class="title-etapa"><b>Participantes</b></span>
                                <div class="body-etapa">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                        <div class="accion-card">
                            <div class="item-accion">
                                <span class="title-accion"><b>Acciones</b></span>
                                <div class="body-accion">
                                    <a href="{{route('landing_promocional.show.personalizarLanding', $project["landing"]->id )}}" class="btn btn-outline-secondary">Personalizar</a>
                                    <button class="btn btn-alicorp">Publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="border-card card-right">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-4">Funnel</h5>

                            <div>
                                <select class="select-chart">
                                    <option value="" selected>Todo</option>
                                    <option value="">Enero</option>
                                    <option value="">Febrero</option>
                                    <option value="">Marzo</option>
                                    <option value="">Abril</option>
                                    <option value="">Mayo</option>
                                    <option value="">Junio</option>
                                    <option value="">Julio</option>
                                    <option value="">Agosto</option>
                                    <option value="">Setiembre</option>
                                    <option value="">Octubre</option>
                                    <option value="">Noviembre</option>
                                    <option value="">Diciembre</option>
                                </select>
                            </div>
                        </div>
                        <div class="chart">
                            <canvas></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="border-card card-right">
                        <h5 class="mb-4">Ultimos participantes</h5>

                        <div class="w-100 d-flex flex-column" style="gap: 0.4rem">
                            @foreach ($project["ultParticipantes"] as $ultParticipante)
                            <div class="row">
                                <div class="col-5 name-ganador">
                                    <span>{{ $ultParticipante->user->name }}</span>
                                </div>
                                <div class="col-3 documento-ganador">
                                    <span>{{ $ultParticipante->user->documento }}</span>
                                </div>
                                <div class="col-4 estado-ganador">
                                    @if ($ultParticipante->ganador == 1)
                                    <span class="estado-win">Gano</span>
                                    @else
                                    <span class="estado-lose">No Gano</span>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="w-100 d-flex justify-content-end mt-4">
                            <a href="" class="ver_mas">
                                Ver más <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="border-card card-right">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex mb-4 align-items-center" style="gap: 0.8em">
                                <h5 class="mb-0">Usuarios</h5> 
                                <span class="separate">|</span>
                                <span class="leyenda">
                                    <span class="leyenda-circle leyenda-success"></span>
                                    Visitas
                                </span>
                                <span class="leyenda">
                                    <span class="leyenda-circle leyenda-danger"></span>
                                    Participantes
                                </span>
                            </div>

                            <div>
                                <select class="select-chart">
                                    <option value="" selected>Todo</option>
                                    <option value="">Enero</option>
                                    <option value="">Febrero</option>
                                    <option value="">Marzo</option>
                                    <option value="">Abril</option>
                                    <option value="">Mayo</option>
                                    <option value="">Junio</option>
                                    <option value="">Julio</option>
                                    <option value="">Agosto</option>
                                    <option value="">Setiembre</option>
                                    <option value="">Octubre</option>
                                    <option value="">Noviembre</option>
                                    <option value="">Diciembre</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="border-card card-right">
                        <h5 class="mb-4">Ultimos ganadores</h5>

                        <div class="w-100 d-flex flex-column" style="gap: 0.4rem">
                            @foreach ($project["ultGanadores"] as $ultGanadores)
                            <div class="row">
                                <div class="col-5 name-ganador">
                                    <span>{{ $ultGanadores->users->name }}</span>
                                    <small>{{ $ultGanadores->created_at }}</small>
                                </div>
                                <div class="col-3 documento-ganador">
                                    <span>{{ $ultGanadores->users->documento }}</span>
                                </div>
                                <div class="col-4 estado-ganador">
                                    <span class="estado-win">Articulo 1</span>
                                    @if ($ultGanadores->ganador == 1)
                                    <span class="estado-win">Articulo 1</span>
                                    @else
                                    <span class="estado-lose">Articulo 1</span>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="w-100 d-flex justify-content-end mt-4">
                            <a href="" class="ver_mas">
                                Ver más <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Chart Funnel --}}
    <script>
        const data = [{
            "name": "Visitas",
            "value": {{ $project["NroVistas"] }},
            color: '#3AAAE3'
        }, {
            "name": "Participantes",
            "value": {{ $project["NroParticipantes"] }},
            color: '#3762D0'
        }, {
            "name": "Ganadores",
            "value": {{ $project["NroGanadores"] }},
            color: '#E62020'
        }];

        const canvas = document.querySelector('canvas');
        let ctx = canvas.getContext('2d');
        let height = 250;
        let width = 850;
        canvas.style.width = "100%";
        canvas.style.height = "100%";

        let scale = window.devicePixelRatio;
        canvas.width =  width * scale;
        canvas.height = height * scale;
        ctx.scale(scale, scale);

        let graphHeight = height - 100;

        let maxValue = Math.max.apply(Math, data.map(function(o) { return o.value; })) + 200;

        data.forEach(item => {
        item['height'] = (item.value / maxValue) * graphHeight
        })

        let boxes = data.length
        ctx.strokeStyle = "#eee";
        for(let i = 0; i < boxes; i++) {
            let x = Math.round(i*(width / boxes));

            // draw separation lines 
            ctx.beginPath();
            ctx.moveTo(x + 0.5, 0.5);
            ctx.lineTo(x, height - 20);
            ctx.stroke();

            // draw item area 
            ctx.fillStyle = data[i].color;
            ctx.beginPath();
            ctx.moveTo(x, height - 20 - data[i].height);
            ctx.lineTo(x + (width / boxes) + 0.5, height - 20 - (data[i+1] ? data[i+1].height : data[i].height));
            ctx.lineTo(x + (width / boxes) + 0.5, height - 20);
            ctx.lineTo(x, height - 20);
            ctx.closePath();
            ctx.fill();

            // draw header
            ctx.font = "normal 15px sans-serif";
            ctx.fillStyle = "#323232";
            ctx.fillText(data[i].name, x + 10, 20);

            ctx.font = "bolder 24px sans-serif";
            ctx.fillStyle = "#000";
            ctx.fillText(data[i].value, x + 10, 60);
        }
    </script>
@endsection

@section('script')
<script src="{{ asset('backend/js/admin/Chart.min.js') }}"></script>
{{-- Chart --}}
<script>
    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = document.querySelector('#areaChart').getContext('2d')

    var meses = '{{ $project["meses"] }}';
    var vistas = '{{ $project["vistas"] }}';
    var participantes = '{{ $project["participantes"] }}';

    var areaChartData = {
    labels  : meses.split('|'),
    datasets: [
        {
        label               : 'Digital Goods',
        backgroundColor     : '#FD000D1a',
        borderColor         : '#FD000D',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : participantes.split('|')
        },
        {
        label               : 'Electronics',
        backgroundColor     : '#78B92800',
        borderColor         : '#78B928',
        borderDash: [5, 5],
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : vistas.split('|')
        },
    ]
    }

    var areaChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
        gridLines : {
            display : false,
        }
        }],
        yAxes: [{
        gridLines : {
            display : false,
        }
        }]
    }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
    })
</script>
@endsection