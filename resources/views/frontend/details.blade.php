@extends('layout.frontend.master')
@section('title')
    Course Details
@endsection

@section('body')

    <section class="banner mb-md-5 mb-3">
        <div class="jumbotron py-md-3 pb-2 h-100 d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('frontend/images/course-detail-banner.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1 class="">Driving Basics</h1>
                        <p>With you in your new journey</p>
                    </div>
{{--                    <div class="col-md-6">--}}
{{--                        <a class="btn primary-border text-white">Book Online <i class="fas fa-arrow-right-long"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

{{--    Course Details--}}

    <div class="container py-md-5 py-3 my-3">
        <div class="row">
            <div class="col-md-8 bg-grey rounded pb-3 mx-auto">
                <div class="course-image-container ">
                    <img src="{{asset('frontend/images/image-3.jpg')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="pt-md-5 pt-2">
                    <h1 class="fw-bolder">Driving Basics</h1>
                    <hr class="custom-hr">
                    <p><span class="fw-bold">Starting Date:</span> 1st January 2024 </p>
                    <p><span class="fw-bold">Course Duration:</span> 300 Hours </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos et excepturi itaque maiores, nisi ratione velit? Aliquid assumenda corporis debitis, deleniti dolores et exercitationem, fugiat ipsa iste magni nihil officiis pariatur possimus qui recusandae. Aspernatur dicta facere iste laborum nam, omnis porro possimus quae, quam ratione reiciendis suscipit, unde voluptates! Ab accusantium cumque eius eligendi, enim, eveniet itaque laboriosam laudantium minima quasi quia ut? Autem commodi consectetur dolore dolorem, doloremque dolores, esse id iste iure, iusto natus nihil numquam obcaecati omnis porro quibusdam rerum. Blanditiis culpa eaque facere libero unde. Aliquid atque dignissimos eius, eos error illo quod reprehenderit velit.</p>
                </div>
                <div class="pt-md-5 pt-2">
                    <h3 class="fw-bold">$100</h3>
                </div>
                <div class="py-2">
                    <button class="btn primary-bg text-white fw-bold w-25 mr-auto d-block">Enroll</button>
                </div>

            </div>
            <div class="col-md-3 bg-grey mx-auto rounded p-md-3 p-2">
                <div class="instructor-image-container ">
                    <img src="{{asset('frontend/images/instructor-01.jpg')}}" class="d-block h-100 w-100 rounded" alt="">
                </div>
                <div class="pt-md-5 pt-2">
                    <h4 class="fw-bolder">Kevin Hart</h4>
                    <h5 class="fw-bolder">Chief Executive Officer</h5>
                    <hr class="custom-hr">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos et excepturi itaque maiores, nisi ratione velit? Aliquid assumenda corporis debitis, deleniti dolores Aliquid atque dignissimos eius, eos error illo quod reprehenderit velit.</p>
{{--                    <div class="py-md-2">--}}
{{--                        <button class="btn primary-bg text-white fw-bold w-50 mr-auto d-block">View Profile</button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>


@endsection
