@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb rounded-0">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/projects')}}">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-0 p-0">Create Project</h3>
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
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="name">{{__('Name')}}</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="name">{{__('Assign To')}}</label>
                                        <select class="custom-select rounded-0">
                                            <option selected>Select a user</option>
                                            <option value="1">Tristan</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">{{__('Description')}}</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control rounded-0"></textarea>
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
