@extends('layouts.landing')


@section('top-layer')
    <!-- el banner de arriba con la direccion y las redes sociales -->
    @component('_components.top-bar')
    @endcomponent
@endsection


@section('banners')
    <!-- el carrousel de fotos principal -->
    @component('_components.banner-carousel')
    @endcomponent
     <!-- la franja divisora celeste con el botón contacto -->
    @component('_components.banner-contact')
    @endcomponent
    <!-- el about us -->
    @component('_components.banner-features')
    @endcomponent
@endsection


@section('sections')
    <!-- Marcas -->
    @component('_components.marcas')
    @endcomponent
    <!-- que es lo que hacemos -->
    @component('_components.section-ts-service-area')
    @endcomponent
   <!-- minerales y publicidad -->
   @component('_components.extra-services')
   @endcomponent
@endsection
