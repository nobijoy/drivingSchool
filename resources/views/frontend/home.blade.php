@extends('layout.frontend.master')
@section('title')
    Home
@endsection
@section('body')


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"
         data-bs-pause="false" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
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
                    <p class="fw-bold mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled</button>
                    <button class="btn primary-bg text-white fw-bold">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/images/banner-2.jpg')}}" class="d-block w-100 img-fluid vh-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder mb-2">Individually Tailored Driving Programs for Based on Skills</h1>
                    <hr class="custom-hr">
                    <p class="fw-bold mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled</button>
                    <button class="btn primary-bg text-white fw-bold">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/images/banner-3.jpg')}}" class="d-block w-100 img-fluid vh-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                    <h1 class="fw-bolder mb-2">Individually Tailored Driving Programs for Based on Skills</h1>
                    <hr class="custom-hr">
                    <p class="fw-bold mb-2">Because Professional training Matters</p>
                    <button class="btn primary-bg text-white fw-bold">Get Enrolled</button>
                    <button class="btn primary-bg text-white fw-bold">Learn More</button>
                </div>
            </div>
        </div>
{{--        @endif--}}
    </div>




    <!-- Main Content Area -->


    <div class="container py-md-5 my-md-5">
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
                    <h1 class="fw-bolder">We’re an Experienced,
                        Trustworthy, Reliable &
                        Friendly Driving School</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="fs-6 fw-bold">Offering Special weekend Classes, Book Your’s Today!</p>
                        </div>
                        <div class="col-md-6">
                            <a href="" class="btn btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">Call Us</a>
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
        </div>
    </section>


    <!-- Lower Section -->

    <section>
        <div class=" p-md-3 menu-img1 align-items-center d-flex">
            <div class="container text-center">
                <img src="img/lowerSection2.png" class="d-grid w-50 h-50 mx-auto">
                <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark">
                    BOOK A CELEBRATION
                </button>
            </div>

        </div>
    </section>


    <section class="py-5">
        <div class="container text-center col-green fw-bold">
            <h1>WILDWOOD NEWSLETTER</h1>
            <p>WE'LL KEEP YOU UPDATE WITH ALL THE LATEST NEWS & WILDWOOD PERKS!</p>
            <div class="mx-auto">
                <form class="row">
                    <div class="col-md-3">
                        <label for="newsform" class="form-label">First Name<span class="text-danger">*</span></label>
                        <input type="name" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-3">
                        <label for="newsform" class="form-label">Last Name<span class="text-danger">*</span></label>
                        <input type="name" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-4">
                        <label for="newsform" class="form-label">Email address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-2 ms-0">
                        <button type="submit" class="btn btn-primary mt-4 btn-rounded fw-semibold">Add me</button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </section>








@endsection
