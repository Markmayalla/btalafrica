@extends('layouts.web')

@section('content')

    @component('web.components.title_block.index', [
        'background' => "https://www.karmelsoft.com/wp-content/uploads/2016/12/blog-banner.jpg",
        'name' => 'Blog',
        ])
        
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col">Hello Blog.</div>
        </div>
    </div>
@endsection