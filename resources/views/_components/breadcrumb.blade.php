<div id="banner-area" class="banner-area" style="background-image:url({{ $image }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">{{ $title }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center" style="background-color: inherit !important;">
                              <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>