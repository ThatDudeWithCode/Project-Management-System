@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb rounded-0">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/clients')}}">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-0 p-0">Create Client</h3>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">{{__('Name')}}</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="company_name">{{__('Company Name')}}</label>
                                        <input type="text" name="company_name" id="company_name" class="form-control rounded-0" placeholder="Company Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone">{{__('Phone Number')}}</label>
                                        <input type="text" name="phone" id="phone" class="form-control rounded-0" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">{{__('Email Address')}}</label>
                                        <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-view">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
