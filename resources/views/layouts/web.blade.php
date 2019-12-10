@extends('layouts.head')
@section('body')
<body>
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col">
                    <img src="/logo/with_tag.png" height="100px" />
                </div>
            </div>
        </div>
        <nav id="navbar_wrapper" class="navbar navbar-expand-sm navbar-dark sticky-top justify-content-between">
            <div class="container">
                <a href="#" class="navbar-brand" id="nav_logo">
                    <img src="/logo/no_tag.png" alt="Breakthrough Technologies" height="50px">
                    <span>Breakthrough Technologies</span>
                </a>
    
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <ul class="navbar-nav" id="collapsibleNavbar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdonw-item">Software Development</a>
                            <a href="#" class="dropdonw-item">Transaction Switching</a>
                            <a href="#" class="dropdonw-item">Resource Outsourcing</a>
                            <a href="#" class="dropdonw-item">Value Added Services</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Technologies</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Bulk SMS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Awards</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    
        <div class="bg-accent">
            <div class="container py-5">
                <div class="row justify-content-end">
                    <div class="col-sm-3">
                            <ul class="nav float-right">
                                <li><a href="/login" class="text-primary">Admin</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
@endsection