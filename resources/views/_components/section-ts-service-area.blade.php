@php
    //Argumentos para _component/_subcomponents/ts-service-box: directorio de la imagen, título y contenido del servicio
    $services = [
        [
            //1-PRODUCCION MINERA
            'directory' => asset('images/icon-image/service-icon1.png'),
            'title' => 'Producción minera',
            'content' => 'Suministro y venta de maquinaria, equipos, repuestos y herramientas especializadas.',
        ],
        [
            //2-INSUMOS PARA LA CONSTRUCCIÓN
            'directory' => asset('images/icon-image/service-icon2.png'),
            'title' => 'Insumos para la construcción',
            'content' => 'Venta de materiales para la construcción, de ferretería en general e insumos de limpieza.',
        ],
        [
            //3-HIGIENE Y SEGURIDAD
            'directory' => asset('images/icon-image/service-icon3.png'),
            'title' => 'Higiene y seguridad',
            'content' => 'Venta de elementos e insumos para garantizar el cumplimiento de los protocolos sanitarios y de seguridad.',
        ],
        [
            //4-IMPORTACIONES
            'directory' => asset('images/icon-image/service-icon4.png'),
            'title' => 'Importaciones',
            'content' => 'Incorporamos equipamiento de otros lugares para su posterior comercialización o alquiler.',
        ],
        [
            //5-TRANSPORTE Y PROCESAMIENTO
            'directory' => asset('images/icon-image/service-icon5.png'),
            'title' => 'Transporte y procesamiento',
            'content' => 'Alquiler de vehículos, maquinarias y equipamientos, con o sin chofer y/o operarios.',
        ],
        [
            //6-ASISTENCIA
            'directory' => asset('images/icon-image/service-icon6.png'),
            'title' => 'Asistencia',
            'content' => 'Construcción, movimientos de suelo, perforaciones, alquiler de equipos y tareas de voladura.',
        ],
        [
            //7-RECURSOS HÍDRICOS
            'directory' => asset('images/icon-image/service-icon7.png'),
            'title' => 'Recursos hídricos',
            'content' => 'Venta y distribución de agua a granel o envasada. Purificadores y tratadores. Dispensadores y filtros. Instalación y mantenimiento.',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => asset('images/icon-image/service-icon8.png'),
            'title' => 'Estructuras portátiles',
            'content' => 'Venta y alquiler de módulos habitacionales, carpas, generadores y todo lo necesario para adaptarse al terreno.',
        ],
        
    ];
@endphp








<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Todo lo que necesitas </h2>
                <h3 class="section-sub-title">Soluciones eficientes y confiables</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <!-- Aquí se mostrarán los primeros 4 servicios -->
                @foreach ($services as $index => $service)
                    @if ($index < 4)
                        @component('_components._subcomponents.ts-service-box')
                            @slot('directory', $service['directory'])
                            @slot('title', $service['title'])
                            @slot('content', $service['content'])
                        @endcomponent
                    @endif
                @endforeach
            </div> <!-- col end -->


            <div class="col-lg-4">
                <div class="ts-service-box-img">
                    <!-- Aquí se muestra la imagen del medio -->
                    <img loading="lazy" style="height: 700px !important;" src="{{asset('images/services/service-center.jpg') }}" alt="service-icon">
                </div>
            </div><!-- col end -->


            <div class="col-lg-4">
                <!-- Aquí se mostrarán los últimos 4 servicios -->
                @foreach ($services as $index => $service)
                    @if ($index >= 4)
                        @component('_components._subcomponents.ts-service-box')
                            @slot('title', $service['title'])
                            @slot('directory', $service['directory'])
                            @slot('content', $service['content'])
                        @endcomponent
                    @endif
                @endforeach
            </div><!-- col end -->
        </div><!-- row end -->

    </div><!-- container end -->
</section><!-- Service end -->



