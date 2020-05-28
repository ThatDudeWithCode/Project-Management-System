@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item active" aria-current="page">{{__('Dashboard')}}</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">{{$projects_count}}</span>{{__('Projects')}}</h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('projects')}}" class="card-link">{{__('View All Projects')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">{{$clients_count}}</span>{{__('Clients')}}</h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('clients')}}" class="card-link">{{__('View All Clients')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">{{$tasks_count}}</span>{{__('Tasks')}}</h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('tasks')}}" class="card-link">{{__('View All Tasks')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
