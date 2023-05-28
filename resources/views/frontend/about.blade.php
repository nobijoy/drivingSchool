@extends('layouts.frontend.master')
@section('title')
    About
@endsection

@section('body')

    <section class="banner mb-md-5 mb-3">
        <div class="jumbotron py-md-3 pb-2 h-100 d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('frontend/images/aboutpage-banner.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1 class="">About Us</h1>
{{--                        <p>With you in your new journey</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="container py-md-5 py-3 my-3">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <img src="{{asset('frontend/images/image-4.jpg')}}" class="d-block h-100 w-100 rounded" alt="">
            </div>
            <div class="col-md-5 mx-auto p-md-3 p-2">
                <h1 class="fw-bolder">Who are we</h1>
                <hr class="custom-hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id lectus quis dui euismod consectetur. Pellentesque ac ante sollicitudin, tincidunt nulla in, bibendum massa. Phasellus bibendum, sem velue aliquam gravida, eros ex dapibus neque, eget fermentum dolor arcu a tortor. Integer placerat massa nec elit egestas efficitur. Maecenas ac massa vitae nulla ultricies mollis.</p>
            </div>
        </div>
    </div>


    <div class="container py-md-5 py-3 my-3">
        <div class="row">
            <div class="col-md-5 mx-auto p-md-3 p-2">
                <h1 class="fw-bolder"><span class="primary-col">10</span> Years Of Experience</h1>
                <p class="fw-bold">We’re an Experienced,
                    Trustworthy, Reliable &
                    Friendly Driving School We are really excited
                    that our training course.
                    We hope it will be a real game-changer in the industry, making instructor training more efficient and affordable, whilst maintaining the high-quality and safe training is known for.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-5">
                        <div class="col-sm-5 w-100 p-md-5 p-sm-2 text-center bg-grey">
                            <span class="primary-col"><i class="fa fa-2x fa-list-check"></i></span>
                            <div>
                                <h3 class="fw-bolder">2k+ completed Courses</h3>
                            </div>
                        </div>
                        <div class="col-sm-5 w-100 p-md-5 p-sm-2 mt-3 text-center bg-grey">
                            <span class="primary-col"><i class="fa fa-2x fa-user-tie"></i></span>
                            <div>
                                <h3 class="fw-bolder">100+ Experience Intructor</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 mt-4">
                        <div class="col-sm-5 w-100 p-md-5 p-sm-2 text-center bg-grey">
                            <span class="primary-col"><i class="fa fa-2x fa-graduation-cap"></i></span>
                            <div>
                                <h3 class="fw-bolder">5k+ Driving Learners</h3>
                            </div>
                        </div>
                        <div class="col-sm-5 w-100 p-md-5 p-sm-2 mt-3 text-center bg-grey">
                            <span class="primary-col"><i class="fa fa-2x fa-trophy"></i></span>
                            <div>
                                <h3 class="fw-bolder">100+ Experience Intructor</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background-image: url('{{ asset('frontend/images/footer-bg.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
        <div class="container text-white">
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <div class="">
                        <h1 class="fw-bolder">Start Learning to Drive Today</h1>
                        <p>Lorem ipsum dolor sit amet,ellentesque ac ante sollicitudin, tincidunt nulla in, bibendum massa. Phasellus bibendum, sem velue aliquam gravida</p>
                        <span class="primary-border"><i class="fas fa-phone"></i> +1234567890</span>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <img src="{{asset('frontend/images/photo-16.jpg')}}" class="d-block h-100 w-100 rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-md-5 py-3 my-3 text-center">
        <h1 class="fw-bolder my-3">Meet Our Instructors</h1>
        <div class="row instructor-div">
            <div class="col-md-3 bg-grey p-0 mx-1">
                <div class="instructor-image-card">
                    <img src="{{asset('frontend/images/instructor-01.jpg')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="mt-md-2">
                    <h4 class="fw-bolder">Bradford Brooks</h4>
                    <p class="fw-bold">Driving Instructor</p>
                </div>
            </div>
            <div class="col-md-3 bg-grey p-0 mx-1">
                <div class="instructor-image-card">
                    <img src="{{asset('frontend/images/instructor-2.png')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="mt-md-2">
                    <h4 class="fw-bolder">Bradford Brooks</h4>
                    <p class="fw-bold">Driving Instructor</p>
                </div>
            </div>
            <div class="col-md-3 bg-grey p-0 mx-1">
                <div class="instructor-image-card">
                    <img src="{{asset('frontend/images/instructor-3.png')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="mt-md-2">
                    <h4 class="fw-bolder">Bradford Brooks</h4>
                    <p class="fw-bold">Driving Instructor</p>
                </div>
            </div>
            <div class="col-md-3 bg-grey p-0 mx-1">
                <div class="instructor-image-card">
                    <img src="{{asset('frontend/images/instructor-4.png')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="mt-md-2">
                    <h4 class="fw-bolder">Bradford Brooks</h4>
                    <p class="fw-bold">Driving Instructor</p>
                </div>
            </div>
        </div>
    </div>


@endsection
