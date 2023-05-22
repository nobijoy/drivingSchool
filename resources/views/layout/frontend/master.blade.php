<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    {{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/uploads/image/'.$gsetting->favicon)}}">--}}
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/styles.css?v1.0.3')}}">
    <style>
        .menu-img1 {
            background-image: url("{{ asset('/img/lowerSection1.jpg') }}");
            /*background-image: url(/img/lowerSection1.jpg) ;*/
            background-repeat: no-repeat;
            background-size: cover;
            height: 60vh;
            width: 100vw;
            overflow: hidden;
        }
    </style>
</head>

<body>

<input type="hidden" id="csrfToken" value="{{ csrf_token() }}">
<nav class="navbar fixed-top navbar-expand-md px-md-3 py-0">
    <div class="container-fluid px-md-5 py-0">
        <a class="navbar-brand py-0" href="">
            <img src="{{ asset('frontend/images/logo.jpg') }}" alt="" class="front-logo ">
            <!-- <h1>WILDWOOD</h1>
            <h6 class="text-center">PIZZA PASTA GRILL</h6> -->
        </a>
        <button class="navbar-toggler btn-rounded bg-white text-white m-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars nav-link round-border"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 text-white" href="">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 text-white" href="">Courses</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 text-white" href="">About Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 text-white" href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@extends('layout.frontend.header')

<!-- Banner Image  -->
@yield('body')

<!-- Footer -->


@extends('layout.frontend.footer')

<script src="{{asset('/frontend/js/jquery-3.6.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.35/sweetalert2.all.min.js"></script>
<script src="{{asset('/frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('/frontend/js/custom.min.js')}}"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');



    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 1) {
            // nav.classList.remove('py-md-4');
            nav.classList.add('primary-bg', 'shadow');
            $('.fixed-top').addClass('primary-bg');

        } else {
            // nav.classList.add('py-md-4');
            nav.classList.remove('primary-bg', 'shadow' );
            $('.fixed-top').removeClass('primary-bg');

        }
    });

</script>

@yield('script')
</body>

</html>
