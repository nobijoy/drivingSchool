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
                        <li class="breadcrumb-item"><a href="#">Settings</a></li>
{{--                        <li class="breadcrumb-item active"><a href="#">Course</a></li>--}}
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
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-pillEle1" data-toggle="pill" href="#pillEle1" aria-expanded="true">Settings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-pillEle2" data-toggle="pill" href="#pillEle2" aria-expanded="false">Mail Settings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-pillEle3" data-toggle="pill" href="#pillEle3" aria-expanded="false">Copyright Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active show" id="pillEle1" aria-expanded="true" aria-labelledby="base-pillEle1">

                                            <form class="form" method="post" action="{{ route('setting') }}" enctype="multipart/form-data">@csrf
                                                <div class="form-body">
                                                    <div class="row">
                                                        @php($name = \App\Models\Setting::where('key', 'name')->first()->value)

                                                        <div class="form-group col-md-12 ">
                                                            <label for="name">Company Name <span class="text-danger">*</span></label>
                                                            <input type="text" id="name" class="form-control" placeholder="Add Name here" name="name"
                                                                   value="{{ $name ?? old('name') }}" required>
                                                        </div>

                                                        @php($email = \App\Models\Setting::where('key', 'email')->first()->value)
                                                        <div class="form-group col-md-12 ">
                                                            <label for="email">Email <span class="text-danger">*</span></label>
                                                            <input type="email" id="email" class="form-control" placeholder="Add email here" name="email"
                                                                   value="{{$email ?? old('email')}}" required>
                                                        </div>

                                                        @php($phone = \App\Models\Setting::where('key', 'phone')->first()->value)
                                                        <div class="form-group col-md-12 ">
                                                            <label for="phone">Phone <span class="text-danger">*</span></label>
                                                            <input type="text" id="phone" class="form-control" placeholder="Add phone here" name="phone"
                                                                   value="{{$phone ?? old('phone')}}" required>
                                                        </div>

                                                        @php($favicon = \App\Models\Setting::where('key', 'favicon')->first()->value)
                                                        <div class="form-group col-md-12 mb-2 mx-auto">
                                                            <img src="{{ asset ('/uploads/image/'.$favicon)}}" alt="users avatar" width="30px" height="30px"
                                                                 class="">
                                                        </div>

                                                       <div class="form-group col-md-12 ">
                                                            <label for="favicon">Change Favicon (Preferred size 30 X 30 )</label>
                                                            <input type="file" name="favicon" id="favicon" class="form-control">
                                                        </div>

                                                        @php($logo = \App\Models\Setting::where('key', 'logo')->first()->value)
                                                        <div class="form-group col-md-12 mb-2 mx-auto">
                                                            <img src="{{ asset ('/uploads/image/'.$logo)}}" alt="users avatar" width="120px" height="120px"
                                                                 class="">
                                                        </div>

                                                        <div class="form-group col-md-12 ">
                                                            <label for="logo">Change Logo (Preferred size 120 X 120 )</label>
                                                            <input type="file" name="logo" id="logo" class="form-control">
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
                                        <div class="tab-pane" id="pillEle2" aria-labelledby="base-pillEle2">
                                            <form class="form" action="{{ route ('emailSetup') }}" method="post" enctype="multipart/form-data">@csrf
                                                <div class="form-body">
                                                    <div class="row" class="row d-none" id="smtp-prop">
                                                        <div class="col-md-12">
                                                            <p class="text-danger ml-10">All fields are required</p>
                                                            <div class="form-group">
                                                                <label for="mail_transport">Mail Driver </label>
                                                                <input type="text" id="mail_transport" class="form-control" placeholder="Mail Driver"
                                                                       value="" name="mail_transport"
                                                                        required >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_host">Mail Host</label>
                                                                <input type="text" id="mail_host" class="form-control"
                                                                       placeholder="Mail Host" name="mail_host" value=""
                                                                       required >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_port">Mail Port </label>
                                                                <input type="number" id="mail_port" class="form-control phone" placeholder="Mail Port"
                                                                       value="" name="mail_port"
                                                                       required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_encryption">Mail Encryption</label>
                                                                <input type="text" id="mail_encryption" class="form-control"
                                                                       placeholder="Mail Encryption" name="mail_encryption" value=""
                                                                       required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_username">Mail Username</label>
                                                                <input type="text" id="mail_username" class="form-control" placeholder="Mail Username"
                                                                       value="" name="mail_username"
                                                                       required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_password">Mail Password</label>
                                                                <input type="text" id="mail_password" class="form-control"
                                                                       placeholder="Mail Password" name="mail_password" value=""
                                                                       required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_from_name">Mail From Name </label>
                                                                <input type="text" id="mail_from_name" class="form-control" placeholder="Mail From Name"
                                                                       value="" name="mail_from_name"
                                                                       required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mail_from_address">Mail From Address</label>
                                                                <input type="email" id="mail_from_address" class="form-control"
                                                                       placeholder="Mail From Address" name="mail_from_address" value=""
                                                                       required>
                                                            </div>
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
                                        <div class="tab-pane" id="pillEle3" aria-labelledby="base-pillEle3">
                                            <form class="form" method="post" action="{{ route('copyright') }}" enctype="multipart/form-data">@csrf
                                                <div class="form-body">
                                                    <div class="row">

                                                        <div class="form-group col-md-12 ">
                                                            <label for="copyright_text">CopyRight Text <span class="text-danger">*</span></label>
                                                            <textarea id="copyright_text" class="form-control" placeholder="" name="copyright_text">
                                                            </textarea>
                                                        </div>

                                                        <div class="form-group col-md-12 ">
                                                            <label for="copyright_link">CopyRight Link <span class="text-danger">*</span></label>
                                                            <textarea id="copyright_link" class="form-control" placeholder="" name="copyright_link">
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
                    </div>

                </div>
            </section>

        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Add event listener for tab changes
            $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                var targetTabId = $(e.target).attr("href"); // Get the ID of the newly shown tab
                // Perform actions based on the tab ID
                if (targetTabId === "#pillEle1") {
                    console.log("Settings tab was shown");
                    // Add your custom logic for the Settings tab
                } else if (targetTabId === "#pillEle2") {
                    console.log("Mail Settings tab was shown");
                    // Add your custom logic for the Mail Settings tab
                } else if (targetTabId === "#pillEle3") {
                    console.log("Copyright Settings tab was shown");
                    // Add your custom logic for the Copyright Settings tab
                }
            });
        });
    </script>
@endsection
