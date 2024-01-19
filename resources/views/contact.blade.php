{{-- .../fsminingsolutions/resources/views/contact.blade.php --}}

@if(session('success'))
    <div id="success-message" class="alert alert-success" style="position: absolute;z-index: 9999;width: 100%;text-align: center;">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.remove();
            }
        }, 3000);
    </script>
@endif

@if(session('error'))
    <div id="error-message" class="alert alert-danger" style="position: absolute;z-index: 9999;width: 100%;text-align: center;">
        {{ session('error') }}
    </div>
    <script>
        setTimeout(function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.remove();
            }
        }, 3000);
    </script>
@endif



@extends('layouts.landing')

    @section('head')

    @endsection

    @section('top-layer')
        <!-- el banner de arriba con la direccion y las redes sociales -->
        @component('_components.top-bar')
        @endcomponent
    @endsection

@section('banners')
    @component('_components.breadcrumb')
        @slot('title', 'Contacto')
        @slot('image', 'images/banner/banner1.jpg')
    @endcomponent

    {!! RecaptchaV3::initJs() !!}

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Descubre nuestra empresa</h2>
                    <h3 class="section-sub-title">Encuéntranos</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visita nuestras oficinas</h4>
                            <p>Dirección, Ciudad, Mendoza, Argentina</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Escríbenos</h4>
                            <p>info@fsminingsolutions.com.ar</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Llámanos</h4>
                            <p>(+99) 99-9999999</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="google-map">
                <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
            </div>


            <!--  <div class="gif-container" style="text-align: center;">
            <h2 class="gif-title" style="font-size: 24px; margin-bottom: 10px;">Mendoza, Argentina</h2>
            <img src="media/location2.gif" alt="Location GIF" style="display: block; margin: 0 auto; width: 100%; height: 100%;">
          </div>-->



            <div class="gap-40"></div>
            <section id="contact-area">

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="column-title">Consúltenos, estamos para ayudarle</h3>

                        <form id="contact-form" action="{{ route('contact.send') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="error-container"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control form-control-name" name="name" id="name"
                                            placeholder="Tu nombre" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input class="form-control" type="email" name="email" id="email"
                                            placeholder="ejemplo@mail.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control form-control-message" name="message" id="message"
                                    placeholder="Escribe tu mensaje aquí..." rows="10" required></textarea>
                            </div>
                            <div>
                                <span>Adjuntar archivo</span>
                                <input type="file" class="form-control-file" name="file" id="file" accept="image/*">
                            </div>
                            {!! RecaptchaV3::field('sendMail') !!}

                            <div class="text-right">
                                <button class="btn btn-danger solid blank" type="reset" onclick="resetForm()"><i class="fas fa-trash-alt"></i></button>
                                <button class="btn btn-primary solid blank" type="submit">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>

                </div><!-- Content row -->
        </div><!-- Conatiner end -->

    </section>

    </section><!-- Main container end -->

@endsection
