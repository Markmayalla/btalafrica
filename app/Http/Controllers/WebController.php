<?php

namespace App\Http\Controllers;

use App\Person;
use App\Product;
use App\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        $services = Service::all();
        $products = Product::all();
        return view('web.home.index', compact('services', 'products'));
    }

    public function about() {
        return view('web.about.index');
    }

    public function team() {
        $team = Person::all();
        return view('web.team.index', compact('team'));
    }

    public function work() {
        return view("web.work.index");
    }

    public function blog() {
        return view("web.blog.index");
    }

    public function contacts() {
        return view("web.contacts.index");
    }
}
