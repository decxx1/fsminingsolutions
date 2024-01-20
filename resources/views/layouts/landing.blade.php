<!DOCTYPE html>
<html lang="es">

<!-- HEAD -->
<head>
@include('layouts._partials.head')
@yield('head')
</head>
<!-- END HEAD -->


<body>

    <div class="body-inner">


        <!-- HEADER -->
        @include('layouts._partials.header')
        <!-- END HEADER -->

        @yield('banners');
        @yield('sections')

        <!-- FOOTER -->
        @include('layouts._partials.footer')
        <!-- END FOOTER -->

    </div><!-- Body inner end -->

    <!-- JAVASCRIPT -->
    @include('layouts._partials.js')
    <!-- END JAVASCRIPT -->

</body>

</html>
