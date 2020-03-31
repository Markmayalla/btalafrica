@extends('layouts.web')

@section('content')
    @component('web.components.title_block.index', [
        'name' => "Our Work",
        'background' => "https://www.ipivot.io/wp-content/uploads/2019/09/AI-Banner.jpg"
    ]) 
    @endcomponent
    <div class="container mt-3">
        <div class="row">
            <div class="d-flex justify-content-between flex-wrap">
                @foreach ($products as $product)
                    <div class="p-1 w-25">
                        <div class="card h-100">
                            <div class="card-img-top"
                            style="background-image: url('{{ $product->featured_image }}'); background-size:cover; background-position:center; background-repeat:no-repeat; height:200px; with:100%;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $product->name }}</h3>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection