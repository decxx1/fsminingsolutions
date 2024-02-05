<div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url({{ asset ('images/slider-main/minera2.jpg') }}">
      <div class="slider-content">
          <div class="container h-100 pr-zindex">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft">Máquinas y herramientas para la</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">Industria minera</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="" class="slider btn btn-primary" id="nuestros-productos-btn">Nuestros productos</a>
                    <a href={{ route('contact') }} class="slider btn btn-primary border">Contáctanos</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="texture-carousel"></div>
      </div>
    </div>

    {{-- <div class="banner-carousel-item" style="background-image:url({{ asset ('images/slider-main/bg2.jpg') }})">
      <div class="slider-content text-left">
          <div class="container h-100 pr-zindex">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title-box" data-animation-in="slideInDown">Laying supplies</h2>
                  <h3 class="slide-title" data-animation-in="fadeIn">La solución completa para</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft">establecerse en el campo</h3>
                  <p data-animation-in="slideInRight">
                      <a href="" class="slider btn btn-primary border" id="nuestros-habitables-btn">Nuestros habitables</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="texture-carousel"></div>
      </div>
    </div> --}}

    <div class="banner-carousel-item" style="background-image:url({{ asset ('images/slider-main/bg6.jpg') }}">
      <div class="slider-content text-right">
          <div class="container h-100 pr-zindex" >
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInDown">Alquiler y venta</h2>
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">Camionetas, camiones y equipo vial</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight"></p>
                  <div data-animation-in="slideInLeft">
                      <a href={{ route('contact') }} class="slider btn btn-primary" aria-label="contact-with-us">Asesoramiento sin cargo</a>
                      <a href="" class="slider btn btn-primary border" aria-label="learn-more-about-us" id="conoce-mas-btn">Conoce mas</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="texture-carousel"></div>
      </div>
    </div>

  </div>
