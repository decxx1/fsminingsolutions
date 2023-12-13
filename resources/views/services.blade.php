@extends('layouts.landing')

@php
    //Argumentos para service-card: directorio de la imagen, título y contenido del servicio
    $services = [
        [
            'directory' => asset('images/projects/project1.jpg'),
            'title' => 'Ingeniería',
            'content' => 'Ejecución de proyectos de ingeniería y construcción de 
            infraestructuras para la industria minera, con un enfoque en el uso eficiente de 
            recursos naturales y energías renovables.'
        ],
        [
            'directory' => asset('images/projects/project2.jpg'),
            'title' => 'Geología',
            'content' => 'Estudio y asesoramiento en la exploración de recursos minerales, 
            incluyendo los de factibilidad y evaluación de impacto ambiental.'
        ],
        [
            'directory' => asset ('images/projects/project3.jpg'),
            'title' => 'Seguridad',
            'content' => 'Asesoramiento en medidas de seguridad y prevención de riesgos en 
            proyectos mineros, incluyendo capacitación y seguimiento constante.'
        ],
        [
            'directory' => asset ('images/projects/project4.jpg'),
            'title' => 'Técnicas y procedimientos',
            'content' => 'Desarrollo e implementación de técnicas y procedimientos innovadores 
            para la extracción y procesamiento de minerales, con un enfoque en la sostenibilidad 
            y en la reducción del impacto ambiental.'
        ],
        [
            'directory' => asset ('images/projects/project5.jpg'),
            'title' => 'Investigación',
            'content' => 'Investigación y desarrollo de nuevas tecnologías y métodos para la 
            industria minera, con un enfoque en la eficiencia y sostenibilidad.'
        ],
        [
            'directory' => asset ('images/projects/project6.jpg'),
            'title' => 'Medio ambiente',
            'content' => 'Implementación de tecnologías y procesos amigables con el ecosistema
            en la actividad minera. Readaptación del terreno improductivo, para darle un 
            uso y valor sustentable, amigable con el medio ambiente y favoreciendo el desarrollo
            de la sociedad en general.'
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
            @slot('image', 'images/banner/banner1.jpg')
        @endcomponent
        <section id="main-container" class="main-container pb-2">
            <div class="container">
                <h2 style="color: black; text-align: center;">Nuestros servicios</h2>
                <div class="row">
                    @foreach ($services as $service)
                        @component('_components.services-page')
                            @slot('title', $service['title'] )
                            @slot('directory', $service['directory'] )
                            @slot('content', $service['content'] )
                        @endcomponent
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
@endsection
