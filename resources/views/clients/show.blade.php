@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb rounded-0">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/clients')}}">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-0 p-0">View Client</h3>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <span class="float-left">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid pr-2" alt="client picture">
                            </span>
                        <span>
                                <h3 class="ml-5 mb-0">{{$client['company_name']}}</h3>
                                Client Name: {{$client['name']}}<br>
                                Phone Number: {{$client['phone']}}<br>
                                Email Address: {{$client['email']}}
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        Contact Form Here
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
