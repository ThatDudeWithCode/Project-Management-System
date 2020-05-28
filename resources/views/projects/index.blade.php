@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section">
                    <div class="float-left">
                        <h3 class="p-0 mb-0 pt-1">Projects</h3>
                    </div>
                    <div class="float-right">
                        <a href="{{url('projects/create')}}" class="btn btn-view">Create Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                @foreach($projects as $project)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">{{$project['name']}}</h3>
                            <p><small>Assigned to: <a href="">Tristan Elliott</a></small></p>
                            <p class="card-text">{{$project['description']}}</p>
                            <p><small>{{$project['date_due']}}</small></p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-view">View</a>
                            <a href="" class="btn btn-edit">Edit</a>
                            <a href="" class="btn btn-delete">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
@endsection
