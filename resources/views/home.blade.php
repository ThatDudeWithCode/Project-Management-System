@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Projects</h3>
                        <hr>
                        <p class="m-0 p-0">Current Projects: 2</p>
                        <p class="m-0 p-0">Completed Projects: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Clients</h3>
                        <hr>
                        <p class="m-0 p-0">Current Clients: 2</p>
                        <p class="m-0 p-0">Completed Projects: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Tasks</h3>
                        <hr>
                        <p class="m-0 p-0">Current Projects: 2</p>
                        <p class="m-0 p-0">Completed Projects: 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
