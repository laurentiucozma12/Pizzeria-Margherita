<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("Welcome");
    }
    
    public function about() {
        return '<h4>About Page</h4>';
    }

    public function Contact() {
        return '<h4>Contact Page</h4>';
    }

}
