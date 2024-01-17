@php

    $tilde = asset('images/icon-image/service-icon12.png');
    //Argumentos para _component/_subcomponents/ts-service-box: directorio de la imagen, título y contenido del servicio
    $services = [
        [
            //1-PRODUCCION MINERA
            'directory' => $tilde,
            'title' => 'Alquiler y venta de grupos electrogenos',
            'content' => 'Generadores diesel, modernos y ecológicos, son apropiados para aplicaciones de 
            potencia principal, potencia contínua o potencia de emergencia/standby. Los grupos electrógenos 
            diesel son la opción número uno para sistemas de energía de emergencia/stand by; son grupos 
            electrógenos capaces de arrancar y asumir la carga en menos de 10 segundos, y la aceptación del 
            100 % de la potencia de placa en un solo paso. Ofrecemos una amplia variedad de grupos electrógenos
             diesel y se encuentran disponibles en nuestra flota de alquiler de equipos, para venta nuevo y 
             venta usado.',
        ],
        [
            //2-INSUMOS PARA LA CONSTRUCCIÓN
            'directory' => $tilde,
            'title' => 'Alquiler y venta de torres luminarias',
            'content' => '',
        ],
        [
            //3-HIGIENE Y SEGURIDAD
            'directory' => $tilde,
            'title' => 'Alquiler de camionetas, autos y camiones',
            'content' => '',
        ],
        [
            //4-IMPORTACIONES
            'directory' => $tilde,
            'title' => 'Servicios de movimientos de suelo y proyectos de ingenieria.
',
            'content' => '',
        ],
        [
            //5-TRANSPORTE Y PROCESAMIENTO
            'directory' => $tilde,
            'title' => 'Venta de maquinaria vial y repuestos.
',
            'content' => '',
        ],
        [
            //6-ASISTENCIA
            'directory' => $tilde,
            'title' => 'Imprenta y carteleria',
            'content' => 'Brindamos servicios de impresión en papel, vinilo, carteleria plástica y carteleria 
            vial, entre otros.',
        ],
        [
            //7-RECURSOS HÍDRICOS
            'directory' => $tilde,
            'title' => 'Torneria y piezas mecanizas a medida',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Insumos de limpieza',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Bolsas y Big Bag',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Materiales de ferreteria y construcción',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Equipamiento y productos de seguridad',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Venta de Bentonita',
            'content' => '',
        ],
        [
            //8-ESTRUCTURAS PORTÁTILES
            'directory' => $tilde,
            'title' => 'Alquiler y venta de carpas',
            'content' => '',
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
                    <img loading="lazy" style="height: 700px !important;"
                        src="{{ asset('images/services/service-center.jpg') }}" alt="service-icon">
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
