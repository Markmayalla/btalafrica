@extends('layouts.web')

@section('content')
    @component('web.home.carousel')
    @endcomponent

    @component('web.home.our_process') 
    @endcomponent

    @component('web.home.services', ['services' => $services])
    @endcomponent

    @component('web.home.messaging') 
    @endcomponent

    @component('web.home.gas') 
    @endcomponent

    @component('web.home.products', ['products' => $products])
    @endcomponent

    @component('web.home.map')
    @endcomponent
@endsection