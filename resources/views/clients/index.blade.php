@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section">
                    <div class="float-left">
                        <h3 class="p-0 mb-0 pt-1">Clients</h3>
                    </div>
                    <div class="float-right">
                        <a href="{{url('clients/create')}}" class="btn btn-view">Create Client</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(count($clients) > 0 )
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($clients as $client)
                        <div class="card mb-4 rounded-0">
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
                            <div class="card-footer">
                                <a href="{{action('ClientController@show', $client['id'])}}" class="btn btn-view">View</a>
                                <a href="{{action('ClientController@edit', $client['id'])}}" class="btn btn-edit">Edit</a>
                                <form action="{{action('ClientController@destroy', $client['id'])}}" method="post" class="delete_form">
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
                            <p class="p-0 m-0">There are no clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
