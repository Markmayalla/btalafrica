@extends('layouts.web')

@section('content')
    @component('web.components.title_block.index', [
        'name' => "Our Work",
        'background' => "https://www.ipivot.io/wp-content/uploads/2019/09/AI-Banner.jpg"
    ]) 
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col">Hello Work.</div>
        </div>
    </div>
@endsection