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
{{--    <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/frontend/css/styles.css?v1.0.7')}}">
    <style>
        .banner-2 {
            background-image: url("{{ asset('/frontend/images/car-banner.svg') }}");
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


        nav {
            width: 100%;
            /*!*height: 50px;*!*/
            /*background: rgba(0,0,0, .8);*/
            /*border-top: 1px solid rgba(255,255,255, .2);*/
            /*border-bottom: 1px solid rgba(255,255,255, .2);*/
            position: sticky !important;
            top: 0;
            z-index: 1000;
        }


    </style>
</head>

<body >

<header class="bg-dark text-white">
    <div class="container-fluid mx-md-5 px-md-5 ">
        <div class="row">
            <div class="col-md-9">
                <span class="topbar-item"><i class="fas fa-phone"></i> +1234567890</span>
                <span class="topbar-item"><i class="fas fa-map-marker-alt"></i> 123 Street, City</span>
                <span class="topbar-item"><i class="fas fa-envelope"></i> example@mail.com</span>
            </div>
            <div class="col-md-3 text-right">
                <!-- Add any additional content or social media links here -->
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-sm primary-bg py-0 shadow">
    <div class="container-fluid d-block mx-lg-5 px-lg-5 mx-sm-2 px-md-2 px-sx-0">
        <div class="row">
            <div class="col-5">
                <a class="navbar-brand py-0" href="{{route('home')}}">
                    <div class="front-logo-container">
                        <img src="{{ asset('frontend/images/logo.jpg') }}" alt="" class="front-logo">
                    </div>
                </a>
            </div>
            <div class="col-7 d-flex align-items-center justify-content-end">
                <button class="navbar-toggler btn-rounded text-white m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class=""><i class="fa fa-bars nav-link round-border"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item px-md-3">
                            <a class="nav-link text-white" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item px-md-3">
                            <a class="nav-link text-white" href="{{route('courses')}}">Courses</a>
                        </li>
                        <li class="nav-item px-md-3">
                            <a class="nav-link text-white" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item px-md-3">
                            <a class="nav-link text-white" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">


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
