<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">

                    <h3 class="widget-title">Sobre Nosotros</h3>
                    <img loading="lazy" width="200px" class="footer-logo" src="{{ asset('images/logo-blanco.png') }}"
                        alt="Constra">
                    <p>Brindamos productos y servicios especializados para satisfacer las necesidades de la industria
                        minera, a nivel nacional e internacional</p>


                    <div class="footer-social">
                        <ul>
                            <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <!--  <li><a href="https://github.com/themefisher" aria-label="Github"><i
                                        class="fab fa-github"></i></a></li>-->
                        </ul>
                    </div><!-- Footer social end -->
                </div><!-- Col end -->



                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Nuestros horarios</h3>
                    <div class="working-hours">
                        Trabajamos 7 días a la semana, todos los días.
                        Contacta con nosotros si tienes alguna emergencia,
                        a través de nuestra línea de ayuda o completa el formulario.
                        <br>
                        <br> Lunes a Viernes: <span class="text-right"> 08:00 a 13:00 / 16:00 a 21:00 </span>
                        <br> Sabados: <span class="text-right">08:00 a 15:00</span>
                        <br> Domingos y feriados: <span class="text-right">Solo urgencias.</span>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Links</h3>
                    <ul class="list-arrow">
                        <li><a href={{ route('index') }}>Inicio</a></li>
                        <li><a href={{ route('services') }}>Servicios</a></li>
                        <li><a href={{ route('contact') }}>Contacto</a></li>

                    </ul>
                </div> <!--Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info">
                        <span>
                          Diseñado por <a href="https://manejoweb.com.ar/" target="_blank" style="color:white !important">ManejoWeb</a>
                        </span>
                    </div>
                </div>

                <div class="col-md-6">
                    
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
            <!-- TO DO modificar el número de whatsapp -->
            <!-- Whatsapp button -->
            <a class="float-button" target="_blank" href="https://wa.me/54">
                <i class="whbutton fab fa-whatsapp fa-fw" aria-hidden="true"></i>
                <span>Consultas<span>
            </a>
            <!-- END Whatsapp button -->


        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer><!-- Footer end -->
