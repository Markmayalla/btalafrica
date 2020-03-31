@extends('layouts.head')
@section('body')
<body>
        <div id="overlay" class="hide"></div>
        <div id="side_menu" class="d-sm-none hide">
            <div class="text-right"><button id="side_menu_close" class="btn btn-link text-light d-md-none"><i class="fas fa-times"></i></button></div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                {{-- <li><a href="/team">Team</a></li> --}}
                <li><a href="/work">Products</a></li>
                <li><a href="/contact">Contacts</a></li>
            </ul>
        </div>
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col">
                    <img src="/logo/with_tag.png" height="100px" />
                </div>
            </div>
        </div>
        
        <div id="main-menu" class="bg-primary w-100 sticky-top">
            <div class="container">
                <div class="row">
                    <div id="text_logo" style="display:none" class="col-auto mr-auto text-light pt-2"><h5>BTAL AFRICA</h5></div>
                    <div class="col-auto ml-auto">
                        <button id="side_menu_open" class="btn btn-link text-light d-md-none"><i class="fas fa-bars"></i></button>
                        <ul class="list-inline text-light m-0 d-none d-md-block">
                            <li class="list-inline-item py-3"><a class="text-light" href="/">Home</a></li>
                            <li class="list-inline-item py-3"><a class="text-light" href="/about">About</a></li>
                            {{-- <li class="list-inline-item py-3"><a class="text-light" href="/team">Team</a></li> --}}
                            <li class="list-inline-item py-3"><a class="text-light" href="/work">Products</a></li>
                            <li class="list-inline-item py-3"><a class="text-light" href="/contacts">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    
        <div class="bg-accent">
            <div class="container py-5" style="color:#ddd">
                <div class="row">
                    <div class="col-sm-3">
                        <h4>CONTACT US</h4>
                        <p>Dar es Salaam, Masaki. Oyster Pearl Galleria M Floor, Office M009 <br></p>
                        <p>Mob: <a href="tel:+255762883065" class="text-light">(255) 762 883 065</a></p>
                       <p><a href="mailto:info@breakthroughtechnologies.com" class="text-light">info@breakthroughtechnologies.com</a></p>
                    </div>
                    <div class="col">
                        <h4>BTAL</h4>
                        <p>Breakthrough Technologies is committed to providing efficient, informative and quality services to our community and customers.</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>QUICK LINKS</h4>
                            <ul class="nav">
                                <li><a href="/login" class="text-primary">Admin</a></li>
                            </ul>
                            <ul class="nav">
                                <li><a href="/login" class="text-primary">Stuff Mail</a></li>
                            </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>OPENING HOURS</h4>
                        <p>Mon to Fri 8:00 am to 4:30 pm</p>
                        <p>Closed at Sat and Sun</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary">
            <div class="container" >
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline my-3">
                            <li class="list-inline-item"><a href="/login" class="text-light">Admin</a></li>
                            <li class="list-inline-item"><a href="/about" class="text-light">About</a></li>
                            <li class="list-inline-item"><a href="/contact" class="text-light">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6" style="color:#fff">
                           <p class="my-3 text-right">&copy {{ date('Y') }} - Breakthrough Technologies, All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
@endsection