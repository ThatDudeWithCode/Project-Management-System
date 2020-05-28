@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <h3>Clients</h3>
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span class="float-left">
                            <img src="https://via.placeholder.com/100x100" class="img-fluid pr-2" alt="client picture">
                        </span>
                        <span>
                            <h3 class="ml-5 mb-0">Company Name</h3>
                            Client Name:<br>
                            Phone Number:<br>
                            Email Address:
                        </span>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
