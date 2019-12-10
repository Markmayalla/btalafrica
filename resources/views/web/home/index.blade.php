@extends('layouts.web')

@section('content')
    @component('web.home.carousel')
    @endcomponent

    @component('web.home.our_process') 
    @endcomponent

    @component('web.home.services')
    @endcomponent

    @component('web.home.products')
        
    @endcomponent
@endsection