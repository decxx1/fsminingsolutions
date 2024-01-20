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
                    <h2 class="section-title">Contacte con nosotros</h2>
                    <h3 class="section-sub-title">Encuéntrenos</h3>
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
                            <h4>Nuestras oficinas</h4>
                            <p><a class="text-white" href="https://maps.app.goo.gl/4jQmwQiRD43nskeN8" target="_blank">Toribio Tedin 77 - Salta Capital</a></p>
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
                            <h4>Llámenos</h4>
                            <p>(+99) 99-9999999</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10245.907068786364!2d-65.39770968532314!3d-24.779177177803824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3952f62fd97%3A0xddc15b0d2a62d19c!2sToribio%20Ted%C3%ADn%2077%2C%20Salta!5e0!3m2!1ses!2sar!4v1705772045899!5m2!1ses!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
