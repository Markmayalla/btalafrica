@extends('layouts.web')

@section('content')

    @component('web.components.title_block.index', [
        'name' => "About Us",
        'background' => "https://www.voluntarystrikeoff.ie/wp-content/uploads/2017/05/banner-handshake.jpg"
    ]) 
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col text-justify lead">
                <h1>About BTAL</h1>
                <p>Breakthrough Technologies Africa Limited is a software development campany born from a partnership between Breakthrough Attorneys and Afrosoft Holdings.</p>
                <p>As a business, we offer a wide range of products wich cater for different industries. Our operation in Tanzania is aimed at distributing our world class software across East Africa.</p>

                <h1>Our Name</h1>
                <small class="text-muted">The Insparation behind Breakthrough Technologies was</small>
                <h3>Breakthrough</h3>
                <p>The essence of the business venture as the company intends to break into the African market by also creating, ceiling-breaking technologies that are cutting-edge and transformative at large</p>
                <h3>Technologies</h3>
                <p>Diverse software soluutions that are offered by the company</p>
                <h3>Africa</h3>
                <p>Speaks about the focal market area targeted by the company in which the culture and the solutions of the technologies will focus on.</p>
            </div>
        </div>
    </div>
@endsection