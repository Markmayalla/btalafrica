@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="fas fa-users"></i></span>
                    <a class="h3" href="/people">Team</a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="fas fa-cubes"></i></span>
                    <a class="h3" href="/services">Services</a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="fas fa-building"></i></span>
                    <a class="h3" href="/clients">Clients</a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="fas fa-th-list"></i></span>
                    <a class="h3" href="/products">Products</a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="far fa-lightbulb"></i></span>
                    <a class="h3" href="/technologies">Technologies</a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-2 bg-light rounded my-2">
                    <span class="h1"><i class="fas fa-cogs"></i></span>
                    <a class="h3" href="/settings">Settings</a>
            </div>
        </div>
    </div>
@endsection
