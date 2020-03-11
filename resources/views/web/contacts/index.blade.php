@extends('layouts.web')

@section('content')

    @component('web.components.title_block.index', [
        'name' => "Contact Us",
        'background' => "http://multichoiceafrica.com/wp-content/uploads/2017/03/06.jpg",
    ]) 
    @endcomponent

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <h1 class="text-center">Talk to Us</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
        </div>
          
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description"></textarea>
                </div>
                <button type="submit" class="form-control bg-primary">Submit</button>
            </div>
        </div>
    </div>

    @component('web.home.map')
    @endcomponent
@endsection