@extends('layouts.head')
@section('body')
<body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    
            <main class="py-4">
               @guest
                    @yield('content')
                @else
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if (Request::segment(2) || Request::segment(1) !== 'home')
                                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                        @else
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                        @endif

                                        @php
                                            $i = 1;
                                        @endphp

                                        @while (Request::segment($i) && Request::segment($i) !== 'home')
                                           
                                            @if (Request::segment($i+1))
                                                <li class="breadcrumb-item"><a href="@for($z=1; $z <= $i; $z++) /{{ Request::segment($z) }} @endfor">{{ Request::segment($i++) }}</a></li>
                                            @else
                                                <li class="breadcrumb-item active" aria-current="page">{{ Request::segment($i++) }}</li>
                                            @endif

                                        @endwhile
                                    </ol>
                                  </nav>
                
                                <div class="card">
                                    <div class="card-body">
                                            @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               @endguest
            </main>
        </div>
    </body>
    </html>
    
    
@endsection