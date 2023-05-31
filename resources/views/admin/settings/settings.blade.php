@extends('layouts.backend.master')

@section('title')
    General Settings
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
                        <li class="breadcrumb-item"><a href="#">General Settings</a></li>
                        <li class="breadcrumb-item active"><a href="#">Settings</a></li>
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
                                <h4 class="card-title" id="basic-layout-card-center">Settings</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <form class="form" method="post" action="{{ route('setting') }}" enctype="multipart/form-data">@csrf
                                        <div class="form-body">
                                            <div class="row">
                                                @php($nameSetting = \App\Models\Setting::where('key', 'company_name')->first())
                                                @php($name = $nameSetting ? $nameSetting->value : null)

                                                <div class="form-group col-md-12 ">
                                                    <label for="company_name">Company Name <span class="text-danger">*</span></label>
                                                    <input type="text" id="company_name" class="form-control" placeholder="Add Name here" name="company_name"
                                                           value="{{ $name ?? old('name') }}" required>
                                                </div>

                                                @php($emailSetting = \App\Models\Setting::where('key', 'company_email')->first())
                                                @php($email = $emailSetting ? $emailSetting->value : null)

                                                <div class="form-group col-md-12 ">
                                                    <label for="company_email">Email <span class="text-danger">*</span></label>
                                                    <input type="email" id="company_email" class="form-control" placeholder="Add email here" name="company_email"
                                                           value="{{$email ?? old('email')}}" required>
                                                </div>

                                                @php($phoneSetting = \App\Models\Setting::where('key', 'company_phone')->first())
                                                @php($phone = $phoneSetting ? $phoneSetting->value : null)
                                                <div class="form-group col-md-12 ">
                                                    <label for="company_phone">Phone <span class="text-danger">*</span></label>
                                                    <input type="text" id="company_phone" class="form-control" placeholder="Add phone here" name="company_phone"
                                                           value="{{$phone ?? old('phone')}}" required>
                                                </div>

                                                @php($faviconSetting = \App\Models\Setting::where('key', 'company_favicon')->first())
                                                @php($favicon = $faviconSetting ? $faviconSetting->value : null)
                                                <div class="form-group col-md-12 mb-2 mx-auto">
                                                    <img src="{{ asset ('/uploads/image/'.$favicon)}}" alt="users avatar" width="50px" height="50px"
                                                         class="">
                                                </div>

                                               <div class="form-group col-md-12 ">
                                                    <label for="company_favicon">Change Favicon (Preferred size 30 X 30 )</label>
                                                    <input type="file" name="company_favicon" id="company_favicon" class="form-control">
                                                </div>

                                                @php($logoSetting = \App\Models\Setting::where('key', 'company_logo')->first())
                                                @php($logo = $logoSetting ? $logoSetting->value : null)
                                                <div class="form-group col-md-12 mb-2 mx-auto">
                                                    <img src="{{ asset ('/uploads/image/'.$logo)}}" alt="users avatar" width="120px" height="120px"
                                                         class="">
                                                </div>

                                                <div class="form-group col-md-12 ">
                                                    <label for="company_logo">Change Logo (Preferred size 120 X 120 )</label>
                                                    <input type="file" name="company_logo" id="company_logo" class="form-control">
                                                </div>

                                                @php($copyright_text = \App\Models\Setting::where('key', 'company_copyright_text')->first())
                                                @php($text = $copyright_text ? $copyright_text->value : null)

                                                <div class="form-group col-md-12 ">
                                                    <label for="company_copyright_text">CopyRight Text <span class="text-danger">*</span></label>
                                                    <textarea id="company_copyright_text" class="form-control" placeholder="" name="company_copyright_text">
                                                        {{$text ?? old('company_copyright_text')}}
                                                    </textarea>
                                                </div>

                                                @php($copyright_link = \App\Models\Setting::where('key', 'company_copyright_link')->first())
                                                @php($link = $copyright_link ? $copyright_link->value : null)

                                                <div class="form-group col-md-12 ">
                                                    <label for="copyright_link">CopyRight Link <span class="text-danger">*</span></label>
                                                    <textarea id="company_copyright_link" class="form-control" placeholder="" name="company_copyright_link">
                                                        {{$link ?? old('company_copyright_link')}}
                                                    </textarea>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-actions text-left">
                                            <button type="submit" id="submitBtn" class="btn btn-primary">
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
