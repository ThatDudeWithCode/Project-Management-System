@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb rounded-0">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/projects')}}">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-0 p-0">View Project</h3>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        Project
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
