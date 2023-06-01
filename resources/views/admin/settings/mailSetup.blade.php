@extends('layouts.backend.master')

@section('title')
    Mail Setup
@endsection

@section('body')

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                {{--                <h3 class="content-header-title">--}}
                {{--                    <a href="{{ route ('course.create')}}" class="btn btn-primary"> Add Course <i class="fa fa-plus"></i></a>--}}
                {{--                </h3>--}}
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Genaral Settings</a></li>
                        <li class="breadcrumb-item active"><a href="#">Mail Setup</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
        @endif
        <!-- Column selectors table -->
            <section id="basic-form-layouts">
                <div class="row ">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-card-center">Mail Setup</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <form class="form" action="{{ route ('emailSetup') }}" method="post" enctype="multipart/form-data">@csrf
                                        <div class="form-body">
                                            <div class="row" class="row d-none" id="smtp-prop">
                                                <div class="col-md-12">
                                                    <p class="text-danger ml-10">All fields are required</p>
                                                    @if ($emailSetup)
                                                        @php
                                                            $emailSetupData = json_decode($emailSetup->value, true);
                                                        @endphp

                                                        <script>
                                                            // Set the emailSetupData object using PHP values
                                                            var emailSetupData = {!! json_encode($emailSetupData) !!};
                                                        </script>

                                                        <div class="form-group">
                                                            <label for="mail_transport">Mail Driver </label>
                                                            <input type="text" id="mail_transport" class="form-control" placeholder="Mail Driver"
                                                                   value="{{ $emailSetupData['mail_transport'] ?? '' }}" name="mail_transport"
                                                                   required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_host">Mail Host</label>
                                                            <input type="text" id="mail_host" class="form-control"
                                                                   placeholder="Mail Host" name="mail_host" value="{{ $emailSetupData['mail_host'] ?? '' }}"
                                                                   required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_port">Mail Port </label>
                                                            <input type="number" id="mail_port" class="form-control phone" placeholder="Mail Port"
                                                                   value="{{ $emailSetupData['mail_port'] ?? '' }}" name="mail_port"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_encryption">Mail Encryption</label>
                                                            <input type="text" id="mail_encryption" class="form-control"
                                                                   placeholder="Mail Encryption" name="mail_encryption" value="{{ $emailSetupData['mail_encryption'] ?? '' }}"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_username">Mail Username</label>
                                                            <input type="text" id="mail_username" class="form-control" placeholder="Mail Username"
                                                                   value="{{ $emailSetupData['mail_username'] ?? '' }}" name="mail_username"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_password">Mail Password</label>
                                                            <input type="text" id="mail_password" class="form-control"
                                                                   placeholder="Mail Password" name="mail_password" value="{{ $emailSetupData['mail_password'] ?? '' }}"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_from_name">Mail From Name </label>
                                                            <input type="text" id="mail_from_name" class="form-control" placeholder="Mail From Name"
                                                                   value="{{ $emailSetupData['mail_from_name'] ?? '' }}" name="mail_from_name"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mail_from_address">Mail From Address</label>
                                                            <input type="email" id="mail_from_address" class="form-control"
                                                                   placeholder="Mail From Address" name="mail_from_address" value="{{ $emailSetupData['mail_from_address'] ?? '' }}"
                                                                   required>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions text-left">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save Changes
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

@endsection

@section('script')
    <script>

    </script>
@endsection
