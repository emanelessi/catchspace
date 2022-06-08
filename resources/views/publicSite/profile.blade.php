@extends('publicSite.layouts.index')

@section('content')
    @include('publicSite.layouts.header')

    <style>

        :root {
            --blue-color: #6b60e6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", sans-serif;

        }

        .main-btn2 {
            font-size: 14px;
            font-family: 'roboto';
            font-weight: 100;
            text-align: center;
            color: #ffffff;
            background-color: #6B60E6;
            border-radius: 5px;
            margin-top: 3px;
            padding: 5px 20px;

        }


        .main-btn2:hover {
            background-color: #8077e0;
            color: #EFEEEF;

        }

        /* start Navbar */

        .main-btn1 {
            background-color: white;
            color: #D9368B;
            font-size: small;
            width: 80px;
            height: 35px;
            padding-top: -50px;

        }

        .main-btn1:hover {
            background-color: #e47db2;
            color: #EFEEEF;
        }

        .navbar {
            background-color: #6B60E6;
        }

        .navbar .navbar-nav .nav-link {
            color: white;
        }

        .navbar .navbar-nav .nav-link.active,
        .navbar .navbar-nav .nav-link:focus,
        .navbar .navbar-nav .nav-link:hover {
            color: var(--yellow-color);
        }


        .navbar .navbar-toggler {
            color: white;
            font-size: 25px;
            border-color: white;

        }

        .navbar .navbar-toggler:focus {
            box-shadow: none;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, 1);
            border-radius: .25rem;
            margin-top: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm > .col, .gutters-sm > [class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }


        .content .table {
            background-color: #ffffff;

        }

        h2 {
            font-size: 20px;
        }

        .custom-table {
            margin-top: 40px;
            text-align: center;
            font-family: roboto;
        }


        .custom-table tbody th, .custom-table tbody td {

            padding-bottom: 15px;
            padding-top: 15px;
            font-weight: 300;
        }

        .tab {
            text-align: center;
        }


    </style>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{'/storage/'.$worker_profile->avatar}}" alt="Admin"
                                     class="rounded-circle  bg-primary" width="150" height="150px">
                                <form action="{{route('updateWorkerProfile')}}" enctype="multipart/form-data"
                                      method="Post">
                                    @csrf
                                    <div class="mt-3">
                                        <input type="file" class="form-control" name="avatar">

                                    </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3 mt-4">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> Name</h6>
                                </div>
                                <div class="input-group col-sm-6 border-right-0 bordertext-secondary"
                                     style="width:530px">
                                    <div class="d-flex">
                                        <input type="text" name="name" class="form-control"
                                               value="{{$worker_profile->name}}">
                                        <div
                                            style="display: none">{{$auth_worker = \Illuminate\Support\Facades\Session::get('worker')}}</div>
                                        <input name="id" type="hidden" value="{{ $auth_worker->id }}">
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-3 mt-4">
                                <div class="col-sm-3">
                                    <h6 class="mb-2">Email</h6>

                                </div>
                                <div class="input-group col-sm-6 border-right-0 bordertext-secondary"
                                     style="width:530px">
                                    <div class="d-flex">
                                        <input type="email" name="email" class="form-control"
                                               value="{{$worker_profile->email}}">

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-4">
                                <div class="col-sm-3">
                                    <h6 class="mb-2">Password</h6>

                                </div>
                                <div class="input-group col-sm-6 border-right-0 bordertext-secondary"
                                     style="width:530px">
                                    <div class="d-flex">
                                        <input type="password" name="password" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-4">
                                <div class="col-sm-3">
                                    <h6 class="mb-2">Job Title</h6>

                                </div>
                                <div class="input-group col-sm-6 border-right-0 bordertext-secondary"
                                     style="width:530px">
                                    <div class="d-flex">
                                        <input type="text" name="job_title" class="form-control"
                                               value="{{$worker_profile->job_title}}">

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-4">
                                <div class="col-sm-3">
                                    <h6 class="mb-2">Type</h6>

                                </div>
                                <div class="input-group col-sm-6 border-right-0 bordertext-secondary"
                                     style="width:530px">
                                    <div class="d-flex">
                                        <input type="text" name="type" class="form-control"
                                               value="{{$worker_profile->type}}">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn   main-btn2  " value="Edit Profile">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <table class="table custom-table pt-5  ">
                        <thead>
                        <th scope>
                        <th class="tab">Workspace name</th>
                        <th class="tab">Workspace Type</th>
                        <th class="tab">Price</th>
                        <th class="tab">Rent Type</th>
                        <th class="tab">Date</th>
                        <th class="tab">Addon Name</th>
                        <th class="tab">Addon Value</th>
                        <th class="tab">Total Price</th>
                        <th class="tab">Action</th>
                        </thead>
                        <tbody>
                        @foreach($worker_workspace as $reservation)
                            <tr scope="row">
                                <th scope="row">
                                </th>
                                <td>
                                    {{$reservation->workSpace->name ?? ''}}
                                </td>
                                <td>{{$reservation->workSpace->workSpaceType->type ?? ''}}</td>
                                <td>
                                    $ {{$reservation->pricing->price ?? ''}}

                                </td>
                                <td>
                                    {{$reservation->pricing->rentType->type ?? ''}}

                                </td>
                                <td>{{$reservation->date}}</td>
                                <td>{{$reservation->workSpaceAddons->addon->name ?? ''}}</td>
                                <td>$ {{$reservation->workSpaceAddons->value ?? ''}}</td>
                                <td style="color: green;font-weight: bold">
                                    $ {{$reservation->workSpaceAddons->value + $reservation->pricing->price ?? ''}}</td>
                                <td>
                                    @if($reservation->deleted_at ==null)
                                        <a href="/worker/delete-reservation/{{$reservation->id}}"
                                           style="margin-left: 10px">
                                            <i class="fa fa-trash"
                                               style="color: #000000 !important;"></i>
                                        </a>
                                    @else
                                        <a href="/worker/restore-reservation/{{$reservation->id}}"
                                           style="margin-left: 10px">
                                            <i class="fa fa-recycle"
                                               style="color: #000000 !important;"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--@section('js')--}}
{{--@stop--}}
