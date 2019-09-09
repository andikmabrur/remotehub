<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getEvents(){
        return view('events');
    }

    public function getServices(){
        return view('services');
    }

    public function getContact(){
        return view('contact');
    }
}