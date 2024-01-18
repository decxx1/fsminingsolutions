@extends('layouts.landing')

@php
    //Argumentos para service-card: directorio de la imagen, título y contenido del servicio
    $services = [
        [
            'directory' => asset('images/services/grupo-electrogeno.jpg'),
            'icon' => '',
            'title' => 'Alquiler y venta de grupos electrogenos',
            'content' => 'Generadores diesel, modernos y ecológicos: son apropiados para aplicaciones de potencia principal, potencia contínua o potencia de emergencia/standby.
'
        ],
        [
            'directory' => asset('images/services/torre-luminaria.jpg'),
            'icon' => '',
            'title' => 'Alquiler y venta de torres luminarias.',
            'content' => 'Para brindar una iluminación potente y segura en entornos mineros. Contamos con equipos modernos, obtén la iluminación adecuada para maximizar la eficiencia y la seguridad en tu operación minera.'
        ],
        [
            'directory' => asset ('images/services/camiones.jpg'),
            'icon' => '',
            'title' => 'Alquiler de camionetas, autos y camiones',
            'content' => 'ofrecemos una amplia flota de vehículos disponibles para alquiler, adaptados a tus requerimientos de transporte en la industria minera.Ya sea que necesites vehículos robustos para terrenos difíciles o autos eficientes para desplazamientos urbanos'
        ],
        [
            'directory' => asset ('images/services/movimientos-de-suelo.jpg'),
            'icon' => '',
            'title' => 'Servicios de movimientos de suelo y proyectos de ingenieria',
            'content' => 'Nuestro equipo de ingenieros experimentados se encarga de planificar y ejecutar proyectos de movimiento de tierra de manera eficiente y segura. Ya sea que necesites nivelación de terrenos, excavaciones o rellenos, contamos con la maquinaria y el conocimiento necesario'
        ],
        [
            'directory' => asset ('images/services/maquinas-viales.jpg'),
            'icon' => '',
            'title' => 'Venta de maquinaria vial y repuestos.',
            'content' => 'Ofrecemos una amplia gama de equipos de alta calidad, incluyendo maquinaria pesada, excavadoras, cargadoras, camiones volquete y mucho más.'
        ],
        [
            'directory' => asset ('images/services/imprenta.jpg'),
            'icon' => '',
            'title' => 'Imprenta y carteleria',
            'content' => 'Contamos con tecnología de vanguardia y un equipo de diseñadores y expertos en impresión que se asegurarán de que tus materiales impresos y carteles cumplan con los más altos estándares de calidad.'
        ],
        [
            'directory' => asset ('images/services/limpieza.jpg'),
            'icon' => '',
            'title' => 'Insumos de limpieza',
            'content' => 'Insumos de limpieza diseñados específicamente para la industria minera. Entendemos la importancia de mantener un entorno limpio y seguro en tus instalaciones mineras,'
        ],
        [
            'directory' => asset ('images/services/bolsas.jpg'),
            'icon' => '',
            'title' => 'Bolsas y Big Bag',
            'content' => 'Bolsas ideales para el empaque de productos a granel, como minerales, fertilizantes, arena y otros materiales utilizados en la industria minera. También ofrecemos Big Bags, que son contenedores de gran capacidad diseñados para facilitar la carga, descarga y transporte de materiales voluminosos.'
        ],
        [
            'directory' => asset ('images/services/ferreteria.jpg'),
            'icon' => '',
            'title' => 'Materiales de ferreteria y construcción',
            'content' => 'herramientas manuales y eléctricas, equipos de seguridad, accesorios de sujeción, productos de soldadura y una ámplia variedad de materiales para la construcción.'
        ],
        [
            'directory' => asset ('images/services/epp.jpg'),
            'icon' => '',
            'title' => 'Equipamiento y productos de seguridad',
            'content' => 'Nuestro catálogo incluye equipos de protección personal (EPP) como cascos, guantes, gafas de seguridad, calzado de seguridad y ropa de trabajo resistente. Estos productos están diseñados para cumplir con los estándares de seguridad más rigurosos y brindar la máxima protección a los trabajadores en el entorno minero.'
        ],
        [
            'directory' => asset ('images/services/bentonita.jpg'),
            'icon' => '',
            'title' => 'Venta de Bentonita',
            'content' => 'Un mineral ampliamente utilizado en la industria minera y otras aplicaciones industriales. La bentonita es una arcilla de origen natural con propiedades únicas, como su capacidad de absorción de agua y su plasticidad.'
        ],
        [
            'directory' => asset ('images/services/carpas.jpg'),
            'icon' => '',
            'title' => 'Alquiler y venta de carpas',
            'content' => 'Ya sea que necesites un espacio adicional para alojamiento, oficinas, comedores, áreas de descanso o cualquier otra aplicación, nuestras carpas son la solución perfecta.'
        ],
        // ... Agrega los valores para los otros servicios
    ];
@endphp

@section('top-layer')
    <!-- el banner de arriba con la direccion y las redes sociales -->
    @component('_components.top-bar')
    @endcomponent


    @section('banners')
        @component('_components.breadcrumb')
            @slot('title', 'Servicios')
            @slot('image', 'images/banner/banner2.jpg')
        @endcomponent
        <section id="main-container" class="main-container pb-2">
            <div class="container">
                <h2 class="mb-5" style="color: black; text-align: center;">Nuestros servicios</h2>
                <div class="row">
                    @foreach ($services as $service)
                        @component('_components.services-page')
                            @slot('title', $service['title'] )
                            @slot('icon', $service['icon'] )
                            @slot('directory', $service['directory'] )
                            @slot('content', $service['content'] )
                        @endcomponent
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
@endsection
