@extends('layout.frontend.master')
@section('title')
    Contact Us
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
                    <div class="col-md-6">
                        <a class="btn primary-border text-white">Book Online <i class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
