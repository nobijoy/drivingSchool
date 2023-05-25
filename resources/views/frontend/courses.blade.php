@extends('layout.frontend.master')
@section('title')
    Courses
@endsection

@section('body')

    <section class="banner mb-md-5 mb-3">
        <div class="jumbotron py-md-3 pb-2 h-100 d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('frontend/images/Drivers-banner.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1 class="">Our Courses</h1>
                        <p>With you in your new journey</p>
                    </div>
                    <div class="col-md-6 pt-5">
                        <a class="btn primary-border text-white">Enroll Now <i class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    Course List     --}}


    <div class="container my-3 my-md-5">
        <div class="row bg-grey pt-3">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto ">
                <form action="">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="row bg-grey rounded">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto ">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/images/image-3.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h3>Rules and requirements</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita possimus ut vitae? Culpa cumque deleniti ea explicabo illum laboriosam libero placeat quisquam. Earum eius nesciunt repellendus tempore! Eum, ratione, reprehenderit.</p>
                            <p class="fw-bolder">$100</p>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-3">
                                <a class="btn primary-bg text-white fw-bold w-100 d-block">Enroll</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('detail')}}" class="btn primary-border fw-bold d-block w-100">Details</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-grey rounded">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto ">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/images/image-3.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h3>Rules and requirements</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita possimus ut vitae? Culpa cumque deleniti ea explicabo illum laboriosam libero placeat quisquam. Earum eius nesciunt repellendus tempore! Eum, ratione, reprehenderit.</p>
                            <p class="fw-bolder">$100</p>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-3">
                                <button class="btn primary-bg text-white fw-bold w-100 d-block">Enroll</button>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('detail')}}" class="btn primary-border fw-bold d-block w-100">Details</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-grey rounded">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto ">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/images/image-3.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h3>Rules and requirements</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita possimus ut vitae? Culpa cumque deleniti ea explicabo illum laboriosam libero placeat quisquam. Earum eius nesciunt repellendus tempore! Eum, ratione, reprehenderit.</p>
                            <p class="fw-bolder">$100</p>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-3">
                                <button class="btn primary-bg text-white fw-bold w-100 d-block">Enroll</button>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('detail')}}" class="btn primary-border fw-bold d-block w-100">Details</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-grey rounded">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto ">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/images/image-3.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h3>Rules and requirements</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita possimus ut vitae? Culpa cumque deleniti ea explicabo illum laboriosam libero placeat quisquam. Earum eius nesciunt repellendus tempore! Eum, ratione, reprehenderit.</p>
                            <p class="fw-bolder">$100</p>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-3">
                                <button class="btn primary-bg text-white fw-bold w-100 d-block">Enroll</button>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('detail')}}" class="btn primary-border fw-bold d-block w-100">Details</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-12 py-2 my-md-3 my-2 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <button class="btn primary-border fw-bold d-block w-100"><i class="fa fa-angles-left"></i>Prev</button>
                    </div>
                    <div class="col-1">
                        <button class="btn primary-border fw-bold d-block w-100">2</button>
                    </div>
                    <div class="col-1">
                        <button class="btn primary-border fw-bold d-block w-100">3</button>
                    </div>
                    <div class="col-2">
                        <button class="btn primary-border fw-bold d-block w-100">Next<i class="fa fa-angles-right"></i></button>
                    </div>
{{--                    <div class="col-2">--}}
{{--                        <button class="btn primary-border fw-bold d-block w-100">Details</button>--}}
{{--                    </div>--}}
{{--                    <div class="col-2">--}}
{{--                        <button class="btn primary-border fw-bold d-block w-100">Details</button>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>

    </div>

@endsection
