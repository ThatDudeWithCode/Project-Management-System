@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tasks</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section">
                    <div class="float-left">
                        <h3 class="p-0 mb-0 pt-1">Tasks</h3>
                    </div>
                    <div class="float-right">
                        <a href="{{url('tasks/create')}}" class="btn btn-view">Create Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if(count($tasks) > 0 )
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                @foreach($tasks as $task)
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            <h3 class="card-title">{{$task['name']}}</h3>
                            <p><small>Assigned to: <a href="">Tristan Elliott</a></small></p>
                            <p class="card-text">{{$task['description']}}</p>
                            <p><small>{{$task['status']}}</small></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{action('TaskController@show', $task['id'])}}" class="btn btn-view">View</a>
                            <a href="{{action('TaskController@edit', $task['id'])}}" class="btn btn-edit">Edit</a>
                            <form action="{{action('TaskController@destroy', $task['id'])}}" method="post" class="delete_form">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button  type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <p class="p-0 m-0">There are no tasks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

