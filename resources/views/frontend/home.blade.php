@extends('layouts.frontend.master')
@section('title')
    Home
@endsection
@section('body')


    <div id="carouselHero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"
         data-bs-pause="false" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHero" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHero" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHero" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
{{--        @if ($home->carousel)--}}
{{--            @php--}}
{{--                $allCarsel = explode(',', $home->carousel);--}}
{{--            @endphp--}}
{{--            <div class="carousel-inner">--}}
{{--                @foreach($allCarsel as $key=>$carsel)--}}
{{--                    <div @if($key == 0) class="carousel-item active" @else class="carousel-item" @endif>--}}
{{--                        <img src="{{ asset('uploads/image/'.$carsel)}}" class="d-block w-100 img-fluid" alt="...">--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @else--}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/images/banner-1.jpg')}}" class="d-block w-100 shadow img-fluid vh-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder mb-2">Individually Tailored Driving Programs for Based on Skills</h1>
                    <hr class="custom-hr">
                    <p class=" mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled <i class="fa fa-arrow-right-long"></i></button>
                    <button class="btn primary-border text-white fw-bold">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/images/banner-2.jpg')}}" class="d-block w-100 img-fluid vh-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder mb-2">Individually Tailored Driving Programs for Based on Skills</h1>
                    <hr class="custom-hr">
                    <p class=" mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled <i class="fa fa-arrow-right-long"></i></button>
                    <button class="btn primary-border text-white fw-bold">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/images/banner-3.jpg')}}" class="d-block w-100 img-fluid vh-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder mb-2">Individually Tailored Driving Programs for Based on Skills</h1>
                    <hr class="custom-hr">
                    <p class="mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled <i class="fa fa-arrow-right-long"></i></button>
                    <button class="btn primary-border text-white fw-bold">Learn More <i class="fa fa-arrow-right-long"></i></button>
                </div>
            </div>
        </div>
{{--        @endif--}}
    </div>


{{--    Services Cards--}}

    <div class="container-sm mb-md-3">
        <div class="row mx-auto text-center">
            <div class="col-2"></div>
            <div class="col-2 px-0">
                <div class="services-card">
                    <div class="card p-md-4">
                        <div class="icon-rounded">
                            <img src="{{asset('frontend/images/icon-3.png')}}" class="" alt="...">
                        </div>
                        <h3 class="card-text">We give Free Informational Videos & Materials</h3>
                    </div>
                </div>
            </div>
            <div class="col-2 px-0">
                <div class="services-card">
                    <div class="card p-md-4 primary-bg">
                        <div class="icon-rounded">
                            <img src="{{asset('frontend/images/icon-4.png')}}" class="" alt="...">
                        </div>
                        <h3 class="card-text text-white">We give Free Informational Videos & Materials</h3>
                    </div>
                </div>
            </div>
            <div class="col-2 px-0">
                <div class="services-card">
                    <div class="card p-md-4" >
                        <div class="icon-rounded">
                            <img src="{{asset('frontend/images/icon-5.png')}}" class="" alt="...">
                        </div>
                        <h3 class="card-text">We give Free Informational Videos & Materials</h3>
                    </div>
                </div>
            </div>
            <div class="col-2 px-0">
                <div class="services-card">
                    <div class="card p-md-4">
                        <div class="icon-rounded">
                            <img src="{{asset('frontend/images/icon-6.png')}}" class="" alt="...">
                        </div>
                        <h3 class="card-text">We give Free Informational Videos & Materials</h3>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>




    <!-- Main Content Area -->


    <div class="container my-md-5 my-sm-3 my-2">
        <div class="row mb-md-3 pb-md-3">
            <div class="col-md-4 pe-md-3 pb-3 text-center">
                {{--                    @if ($home->section_img_3)--}}
                {{--                        <img src="{{ asset('uploads/image/'.$home->section_img_3)}}" class="d-grid w-100 h-100">--}}
                {{--                    @else--}}
                <img src="{{asset('/frontend/images/home-1.jpg')}}" class="d-grid w-100 h-100">
            {{--                    @endif--}}

            </div>
            <div class="col-md-8 mb-3 d-flex">
                <div class="container ">
                    <p class="fs-6 fw-bold">LEARN TO DRIVE SAFELY</p>
                    <hr class="custom-hr">
                    <h1 class="fw-bold">We’re an Experienced,
                        Trustworthy, Reliable &
                        Friendly Driving School</h1>
                    <div class="row pt-md-2">
                        <div class="col-md-6">
                            <p class="fs-6 fw-bold">Offering Special weekend Classes, Book Your’s Today!</p>
                        </div>
                        <div class="col-md-6">
                            <button class="btn primary-border primary-col rounded-pill">
                                <i class="fa fa-phone"></i>
                                +012-345678
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Menu Section -->

{{--    <section>--}}
{{--        <div class="pb-md-3">--}}
{{--            <div class="row mb-md-3 pb-3">--}}
{{--                <div class="col-md-8 pe-md-3 pb-3 text-center">--}}
{{--                    @if ($home->section_img_3)--}}
{{--                        <img src="{{ asset('uploads/image/'.$home->section_img_3)}}" class="d-grid w-100 h-100">--}}
{{--                    @else--}}
{{--                        <img src="{{asset('/frontend/images/home-1.jpg')}}" class="d-grid w-100 h-100">--}}
{{--                    @endif--}}
{{--                <!-- <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark">--}}
{{--                        Play--}}
{{--                      </button> -->--}}
{{--                </div>--}}
{{--                <div class="col-md-4 menu-con mb-3 align-items-center d-flex">--}}
{{--                    <div class="container text-center mx-md-auto ">--}}
{{--                        <h5 class="fs-6">FOOD & DRINK</h5>--}}
{{--                        <h1>MENU</h1>--}}
{{--                        <a href="" class="btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">VIEW ALL</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row pb-3 mb-md-3">--}}
{{--                <div class="col-md-4 menu-con mb-3 align-items-center d-flex">--}}
{{--                    <div class="container text-center mx-md-auto ">--}}
{{--                        <h5 class="fs-6">FIND YOUR NEAREST</h5>--}}
{{--                        <h1>RESTAURANT</h1>--}}
{{--                        <div class="justify-content-center">--}}
{{--                            <select class="form-select btn-rounded w-50 my-3 text-center gotourl" id="">--}}
{{--                                <option selected>Select</option>--}}
{{--                                @foreach ($restaurants as $type)--}}
{{--                                    <option value="">--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <a href="" class="btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">VIEW ALL</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-md-8 ps-md-3 pb-3">--}}
{{--                    @if ($home->section_img_4)--}}
{{--                        <img src="" class="d-grid w-100 h-100">--}}
{{--                    @else--}}
{{--                        <img src="img/menuSection1.jpg" class="d-grid w-100 h-100">--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    Courses Section--}}

    <div class="container my-md-5 my-sm-3 my-2">
        <h1 class="fw-bolder mb-2">Popular Courses</h1>
        <hr class="custom-hr">
        <div class="row align-items-center">
            <div class="col-12 col-carousel">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="card course-card">
                            <div class="card-header">
                                <img src="{{asset('frontend/images/image-3.jpg')}}" class="card-img-top" alt="Card Image 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3 Title</h5>
                                <hr class="custom-hr">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, quidem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card course-card">
                            <div class="card-header">
                                <img src="{{asset('frontend/images/image-4.jpg')}}" class="card-img-top" alt="Card Image 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3 Title</h5>
                                <hr class="custom-hr">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt?</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card course-card">
                            <div class="card-header">
                                <img src="{{asset('frontend/images/image-5.jpg')}}" class="card-img-top" alt="Card Image 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3 Title</h5>
                                <hr class="custom-hr">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card course-card">
                            <div class="card-header">
                                <img src="{{asset('frontend/images/image-6.jpg')}}" class="card-img-top" alt="Card Image 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3 Title</h5>
                                <hr class="custom-hr">
                                <p class="card-text">Card 3 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card course-card">
                            <div class="card-header">
                                <img src="{{asset('frontend/images/image-7.jpg')}}" class="card-img-top" alt="Card Image 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3 Title</h5>
                                <hr class="custom-hr">
                                <p class="card-text">Card 3 Description</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>

                <div class="custom-controls text-center">
                    <button class="custom-prev-btn btn primary-border"><i class="fa fa-chevron-left"></i></button>
                    <button class="custom-next-btn btn primary-border"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>



    <!-- Lower Section -->

    <section class="p-md-3 banner-2 align-items-center d-flex">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-5">
                    <div class="">
                        <h1 class="text-white">Book your lessons now</h1>
                        <div class="py-md-3">
                            <form action="" >
                                <div class="mb-md-2">
                                    <input type="name" class="form-control w-100" id="" name="first_name" placeholder="First Name">
                                </div>

                                <div class="my-md-2">
                                    <input type="name" class="form-control w-100" id="" name="last_name" placeholder="Last Name">
                                </div>

                                <div class="my-md-2">
                                    <input type="number" class="form-control w-100" id="" name="age" placeholder="Age">
                                </div>

                                <div class="my-md-2">
                                    <input type="email" class="form-control w-100" id="" name="email" placeholder="Email">
                                </div>

                                <div class="my-md-2">
                                    <input type="number" class="form-control w-100" id="" name="number" placeholder="Phone Number">
                                </div>

                                <div class="my-md-2">
                                    <select class="form-select form-control w-100" id="">
                                        <option value="">Select Course</option>
                                        <option value="">Course 1</option>
                                        <option value="">Course 2</option>
                                        <option value="">Course 3</option>
                                        <option value="">Course 4</option>
                                    </select>
                                </div>

                                <div class="my-md-2">
                                    <select class="form-select form-control w-100" id="">
                                        <option value="">Car Type</option>
                                        <option value="">Manual</option>
                                        <option value="">Auto</option>
                                    </select>
                                </div>

                                <div class="my-md-4">
                                    <button class="btn primary-bg text-white btn-rounded w-100 fw-semibold mb-md-5">Confirm <i class="fa fa-arrow-right-long"></i></button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 py-md-3">
                    <div class="container text-white">
                        <p class="fs-6 fw-bold">Get Appointment With
                            Qualified Instructors</p>
                        <hr class="custom-hr">
                        <h1 class="fw-bolder">We’re an Experienced, Trustworthy, Reliable & Friendly Driving School</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    Customer Testimonial--}}

    <div class="container py-md-5 my-md-5">
        <h1 class="fw-bolder mb-2">Customer Testimonials</h1>
        <p class="fw-bolder mb-2">WHAT OUR CLIENTS ARE SAYING</p>
        <hr class="custom-hr">
        <div class="row align-items-center">
            <div class="col-12 col-carousel">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <div class="overflow-hidden mx-auto d-inline-block">
                                        <img src="{{ asset('frontend/images/customer.jpg') }}" class="customer-img img-fluid" alt="Card Image 3">
                                    </div>
                                    <p class="fw-bold">Jane Doe</p>
                                    <p class="fw-bold">USA</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam aspernatur culpa cupiditate dolorum, esse eum facere laboriosam libero maiores modi necessitatibus quaerat repellendus repudiandae rerum similique sint soluta temporibus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <div class="overflow-hidden mx-auto d-inline-block">
                                        <img src="{{ asset('frontend/images/customer.jpg') }}" class="customer-img img-fluid" alt="Card Image 3">
                                    </div>
                                    <p class="fw-bold">Jane Doe</p>
                                    <p class="fw-bold">USA</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam aspernatur culpa cupiditate dolorum, esse eum facere laboriosam libero maiores modi necessitatibus quaerat repellendus repudiandae rerum similique sint soluta temporibus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <div class="overflow-hidden mx-auto d-inline-block">
                                        <img src="{{ asset('frontend/images/customer.jpg') }}" class="customer-img img-fluid" alt="Card Image 3">
                                    </div>
                                    <p class="fw-bold">Jane Doe</p>
                                    <p class="fw-bold">USA</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam aspernatur culpa cupiditate dolorum, esse eum facere laboriosam libero maiores modi necessitatibus quaerat repellendus repudiandae rerum similique sint soluta temporibus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <div class="overflow-hidden mx-auto d-inline-block">
                                        <img src="{{ asset('frontend/images/customer.jpg') }}" class="customer-img img-fluid" alt="Card Image 3">
                                    </div>
                                    <p class="fw-bold">Jane Doe</p>
                                    <p class="fw-bold">USA</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam aspernatur culpa cupiditate dolorum, esse eum facere laboriosam libero maiores modi necessitatibus quaerat repellendus repudiandae rerum similique sint soluta temporibus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>

{{--                <div class="custom-controls text-center">--}}
{{--                    <button class="custom-prev-btn btn primary-border"><i class="fa fa-chevron-left"></i></button>--}}
{{--                    <button class="custom-next-btn btn primary-border"><i class="fa fa-chevron-right"></i></button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <!-- Driving info section -->

    <div class="container py-md-5 my-md-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/frontend/images/image-77.jpg')}}" class="d-grid w-100 h-100">
            </div>
            <div class="col-md-6 ps-md-5">
                <p>COUNTLESS BENEFITS OF DRIVEGA</p>
                <hr class="custom-hr">
                <h2>Modern Technologies For Much Easier Driving</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('/frontend/images/icon-7.png')}}" class="d-grid w-50 h-50">
                    </div>
                    <div class="col-md-8">
                        <h3>Learn from Experienced Teachers</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('/frontend/images/icon-8.png')}}" class="d-grid w-50 h-50">
                    </div>
                    <div class="col-md-8">
                        <h3>Covering All Aspects of Safe Driving</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection
