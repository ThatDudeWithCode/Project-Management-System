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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">10</span>Projects</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">10</span>Clients</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-0 p-0"><span class="count pr-2">10</span>Tasks</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
