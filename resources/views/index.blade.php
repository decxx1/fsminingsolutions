@extends('layouts.landing')
@section('head')
    @component('_components.seo')
        @slot('titlePage', 'FS Mining Solutions SRL - Inicio' )
        @slot('canonnical', 'https://fsminingsolutions.com.ar' )
        @slot('metaTitle', 'FS Mining Solutions - Servicios para la minería' )
        @slot('metaDescription', 'Prestamos servicios especializados y comercializamos productos destinados a satisfacer las necesidades de la industria minera, a nivel nacional e internacional.' )
        @slot('metaImage', 'https://fsminingsolutions.com.ar/images/slider-main/minera2.jpg' )
    @endcomponent
@endsection
@php
    //Argumentos para service-card: directorio de la imagen, título y contenido del servicio
    $services = [
        [
            'directory' => asset('images/projects/project1.jpg'),
            'icon' => '',
            'title' => 'Ingeniería',
            'content' => 'Ejecución de proyectos de ingeniería y construcción de
            infraestructuras para la industria minera, con un enfoque en el uso eficiente de
            recursos naturales y energías renovables.'
        ],
        // [
        //     'directory' => asset('images/projects/project2.jpg'),
        //     'icon' => '',
        //     'title' => 'Geología',
        //     'content' => 'Estudio y asesoramiento en la exploración de recursos minerales,
        //     incluyendo los de factibilidad y evaluación de impacto ambiental.'
        // ],
        [
            'directory' => asset ('images/projects/project3.jpg'),
            'icon' => '',
            'title' => 'Seguridad',
            'content' => 'Asesoramiento en medidas de seguridad y prevención de riesgos en
            proyectos mineros, incluyendo capacitación y seguimiento constante.'
        ],
        // [
        //     'directory' => asset ('images/projects/project4.jpg'),
        //     'icon' => '',
        //     'title' => 'Técnicas y procedimientos',
        //     'content' => 'Desarrollo e implementación de técnicas y procedimientos innovadores
        //     para la extracción y procesamiento de minerales, con un enfoque en la sostenibilidad
        //     y en la reducción del impacto ambiental.'
        // ],
        [
            'directory' => asset ('images/projects/project5.jpg'),
            'icon' => '',
            'title' => 'Investigación',
            'content' => 'Investigación y desarrollo de nuevas tecnologías y métodos para la
            industria minera, con un enfoque en la eficiencia y sostenibilidad.'
        ],
        [
            'directory' => asset ('images/projects/sustentable.jpg'),
            'icon' => '',
            'title' => 'Medio ambiente',
            'content' => 'Implementación de tecnologías y procesos amigables con el ecosistema
            en la actividad minera. Readaptación del terreno improductivo, para darle un
            uso y valor sustentable, amigable con el medio ambiente y favoreciendo el desarrollo
            de la sociedad en general.'
        ],
        // ... Agrega los valores para los otros servicios
    ];
@endphp


@section('banners')
    <!-- el carrousel de fotos principal -->
    @component('_components.banner-carousel')
    @endcomponent
     <!-- la franja divisora celeste con el botón contacto -->
    @component('_components.banner-contact')
    @endcomponent
    <!-- el about us -->
   {{-- @component('_components.banner-features')--}}
    @component('_components.banner-features2')
    @endcomponent
@endsection


@section('sections')
    <!-- Marcas -->
    @component('_components.intro')
    @endcomponent
    <!-- que es lo que hacemos -->
    @component('_components.section-ts-service-area')
        @section('titles-service-area')
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Todo lo que necesitas</h2>
                    <h3 class="section-sub-title">Soluciones eficientes y confiables</h3>
                </div>
            </div>
        @endsection
    @endcomponent
    {{-- @component('_components.section-ts-service-area2')
    @endcomponent--}}
    <!-- Separador -->
    <div class="container" style="border-top: 10px solid var(--color-oscuro-1); margin-top: 10px; "></div>
    <!-- Servicios -->
    <section id="main-container" class="main-container pb-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Nos destacamos</h2>
                    <h3 class="section-sub-title">Innovación y desarrollo</h3>
                </div>
            </div>
            <h2 class="mb-5" style="color: black; text-align: center;"></h2>
            <div class="row justify-content-center">
                @foreach ($services as $service)
                    @component('_components.services-page2')
                        @slot('title', $service['title'] )
                        @slot('icon', $service['icon'] )
                        @slot('directory', $service['directory'] )
                        @slot('content', $service['content'] )
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>
   <!-- Separador -->
   <div class="container mt-5 mb-5" style="border-top: 10px solid var(--color-oscuro-1); margin-top: 10px; "></div>
   <!-- minerales y publicidad -->
    @component('_components.extra-services')
        @section('titles-extra')
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Soluciones Completas</h2>
                    <h3 class="section-sub-title">Servicios adicionales</h3>
                </div>
            </div>
        @endsection
    @endcomponent
@endsection

<script>
    // Obtén una referencia a los botones por sus identificadores
    const botonProductos = document.getElementById('nuestros-productos-btn');
   //  var botonHabitables = document.getElementById('nuestros-habitables-btn');
   //  var botonConoceMas = document.getElementById('conoce-mas-btn');

    // Agrega un evento de clic a cada botón
    botonProductos.addEventListener('click', scrollToSection);
   //  botonHabitables.addEventListener('click', scrollToSection);
   //  botonConoceMas.addEventListener('click', scrollToSection);

    // Función de desplazamiento hacia la sección de destino
    function scrollToSection(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace

        // Obtén una referencia a la sección de destino
        const seccionProductos = document.querySelector('#ts-service-area');

        // Desplázate hacia la sección de destino utilizando smooth scrolling
        seccionProductos.scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
