@extends('layouts.web')

@section('content')

    @component('web.components.title_block.index', [
        'name' => "Messaging",
        'background' => "https://ambitiousinfocom.com/wp-content/uploads/2018/12/banner3.jpg"
    ]) 
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col text-center lead my-5">
                <h1 class="display-4">Connect through our messaging platform to whoever, whenever, however.</h1>
            </div>
        </div>

        <div class="row">
            <div class="col text-center lead my-5">
                <h1>Why choose us ?</h1>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <i class="fas fa-coins fa-5x text-primary"></i>
                <h2 class="mt-3">Cost-Effective</h2>
                <p class="lead">Our messaging tools are affordable and won’t break the bank.</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-check-circle fa-5x text-primary"></i>
                <h2 class="mt-3">Excellent Service</h2>
                <p class="lead">All messages sent via our platform maintain a high delivery rate.</p>
            </div>
            <div class="col text-center">
                <i class="fas fa-clipboard-list fa-5x text-primary"></i>
                <h2 class="mt-3">Message Reporting</h2>
                <p class="lead">The detailed dashboard provides a user-friendly experience.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-5 pb-5" style="background: #ffffff">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <img class="float-right img-fluid" src="/assets/artwork2.png" />
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="d-inlline pt-5 text-center">
                        <h1 class="display-3 d-none d-sm-block text-uppercase text-primary">Bulk</h1>
                        <h1 class="text-uppercase text-accent">SMS</h1>
                        <p class="lead text-muted">Reach A Wider Market with Fast & Reliable Messaging</p>
                        <p class="lead">Deliver promotions and priority SMS notifications seamlessly, reliably and economically directly on your customer’s mobile devices.</p>
                    </div>
                </div>
        </div>
    </div>
@endsection