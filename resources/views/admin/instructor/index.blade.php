@extends('layouts.backend.master')
@section('title', 'Instructor')
@section('body')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">
                    <a href="{{ route ('instructor.create')}}" class="btn btn-primary"> Add Instructor <i class="fa fa-plus"></i></a>
                </h3>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Manage Instructor</a></li>
                        <li class="breadcrumb-item active"><a href="#">Instructor</a></li>
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
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="action-table">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Specialization</th>
                                                    <th>Experience (Years)</th>
                                                    <th>Certifications</th>
                                                    <th>Bio</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if (sizeof ($datas) > 0)
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <td>{{++$sl}}</td>
                                                        <td>{{$data->name}}</td>
                                                        <td>{{$data->email}}</td>
                                                        <td>{{$data->phone}} Days</td>
                                                        <td>{{$data->specialization}}</td>
                                                        <td>{{$data->experience}}</td>
                                                        <td>{{$data->certifications}}</td>
                                                        <td>{{$data->bio}}</td>
                                                        <td>
                                                            <a href="{{ $data->image ? asset ('/uploads/image/'.$data->image) : '#' }}" target="_blank"
                                                               rel="noopener noreferrer">
                                                                <img src="{{ $data->image ? asset ('/uploads/image/'.$data->image) : '#' }}"
                                                                     width="70px" height="40px" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route ('instructor.edit', $data->id)}}">
                                                                <button type="button" title="Edit" class="btn btn-icon btn-outline-primary btn-sm">
                                                                    <i class="fa fa-pencil-square"></i></button>
                                                            </a>
                                                            <button type="button" class="btn btn-icon btn-outline-danger btn-sm" title="Inactive"
                                                                    onclick="deleteData('{{ route('instructor.delete', $data->id) }}')">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                            <tfoot class="display-hidden">
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Column selectors table -->
        </div>
    </div>
@endsection
@section('script')
@endsection
