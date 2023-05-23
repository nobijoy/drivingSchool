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
    <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/frontend/css/styles.css?v1.0.6')}}">
    <style>
        .banner-2 {
            background-image: url("{{ asset('/frontend/images/car-banner.svg') }}");
            /*background-image: url(/img/lowerSection1.jpg) ;*/
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
            width: 100vw;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        header {
            padding: 10px 10px;
            box-sizing: border-box;
            z-index: 1000;
        }

        section {
            width: 100%;
            height: 100vh;
        }

        section.sec1 {
            background: url("https://images.pexels.com/photos/697243/pexels-photo-697243.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size: cover;
        }

        section.sec2 {
            padding: 100px;
            box-sizing: border-box;
            height: auto;
        }

        section.sec2 h2 {
            font-size: 3em;
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
        }

        section.sec2 p {
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        section.sec3 {
            background: url("https://images.pexels.com/photos/1267696/pexels-photo-1267696.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size: cover;
        }

        nav {
            width: 100%;
            height: 50px;
            background: rgba(0,0,0, .8);
            border-top: 1px solid rgba(255,255,255, .2);
            border-bottom: 1px solid rgba(255,255,255, .2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            display: flex;
            margin: 0;
            padding: 0 100px;
            justify-content: flex-end;
        }

        nav ul li {
            list-style: none;
        }

        nav ul li a {
            display: block;
            color: #fff;
            padding: 0 10px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            line-height: 50px; /**  Rarely used! **/
        }

        nav ul li a:hover,
        nav ul li a.active {
            background: #f00;

        }

    </style>
</head>

<body >



{{--<div class="fixed-top">--}}
{{--    <div class="topbar bg-dark text-white">--}}
{{--        <div class="container-fluid px-md-5 mx-md-5 py-0 ">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <span class="topbar-item"><i class="fas fa-phone"></i> +1234567890</span>--}}
{{--                    <span class="topbar-item"><i class="fas fa-map-marker-alt"></i> 123 Street, City</span>--}}
{{--                    <span class="topbar-item"><i class="fas fa-envelope"></i> example@mail.com</span>--}}
{{--                </div>--}}
{{--                <div class="col-md-8 text-right">--}}
{{--                    <!-- Add any additional content or social media links here -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--        <div class="container-fluid px-md-5 py-0 ">--}}
{{--            <div class="row" id="navRow">--}}
{{--                <a class="navbar-brand py-0" href="">--}}
{{--                    <img src="{{ asset('frontend/images/logo.jpg') }}" alt="" class="front-logo ">--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler btn-rounded bg-white text-white m-0" type="button" data-bs-toggle="collapse"--}}
{{--                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"--}}
{{--                        aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"><i class="fa fa-bars nav-link round-border"></i></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                    <div class="mx-auto"></div>--}}
{{--                    <ul class="navbar-nav fw-semibold">--}}
{{--                        <li class="nav-item px-3">--}}
{{--                            <a class="nav-link fs-5 text-white" href="">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item px-3">--}}
{{--                            <a class="nav-link fs-5 text-white" href="">Courses</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item px-3">--}}
{{--                            <a class="nav-link fs-5 text-white" href="">About Us</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item px-3">--}}
{{--                            <a class="nav-link fs-5 text-white" href="">Contact</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}

<header>
    <img src="./index_files/2824095.jpg" style="width: 50px">
</header>
<nav>
    <div>
        <a class="navbar-brand py-0" href="">
            <img src="{{ asset('frontend/images/logo.jpg') }}" alt="" class="front-logo" height="">
        </a>
    </div>
    <ul>
        <li><a href="index.html#" class="active">Home</a></li>
        <li><a href="index.html#">About</a></li>
        <li><a href="index.html#">Services</a></li>
        <li><a href="index.html#">Portfolio</a></li>
        <li><a href="index.html#">Team</a></li>
        <li><a href="index.html#">Contact</a></li>
    </ul>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })

    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: false,

        });

        // var customerOwl = $('.customer-owl-carousel');
        // owl.owlCarousel({
        //     items: 4,
        //     loop: true,
        //     margin: 20,
        //     autoplay: true,
        //     autoplayTimeout: 5000,
        //     autoplayHoverPause: true,
        //     nav: false,
        //
        // });

        // Custom Navigation
        $('.custom-next-btn').click(function() {
            owl.trigger('next.owl.carousel');
        });

        $('.custom-prev-btn').click(function() {
            owl.trigger('prev.owl.carousel');
        });
    });

</script>

@yield('script')
</body>

</html>
