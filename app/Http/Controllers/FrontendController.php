<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('portfolio.home');
    }

    public function projects() {
        return view('portfolio.projects');
    }

    public function about() {
        return view('portfolio.about');
    }

    public function contact() {
        return view('portfolio.contact');
    }

}
