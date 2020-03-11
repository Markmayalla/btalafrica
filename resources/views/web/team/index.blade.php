@extends('layouts.web')

@section('content')
    
    @component('web.components.title_block.index', [
        'name' => "Our Team",
        'background' => "https://www.incimages.com/uploaded_files/image/1940x900/IN0316LPO03-web_80434.jpg",
    ]) 
    @endcomponent

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto py-2">
                <p class="lead">Breakthrough Technologies thrives because of passion and dedication of its leadership</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto py-2">
                <h1>The Team</h1>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            @foreach ($team as $member)
            <div id="member" class="card my-1">
                <div class="card-body d-flex flex-column align-items-center">
                    <div 
                        class="rounded-circle"
                        style="background-image: url('{{ $member->avatar }}'); background-size:cover;background-position:center;background-repeat:no-repeat;height:200px;width:200px"></div>
                    <h2 class="m-0 mt-2">{{ $member->first_name }} {{ $member->surname }}</h2>
                    <p class="lead text-accent"><em>{{ $member->position }}</em></p>
                    <div class="social">
                        <a href=""><i class="fab fa-facebook" style="color:#3b5998"></i></a>
                        <a href=""><i class="fab fa-twitter" style="color:#00acee"></i></a>
                        <a href=""><i class="fab fa-linkedin" style="color:#0e76a8"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection