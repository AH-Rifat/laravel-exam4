<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contactForm()
    {
        return view('create');
    }
    public function editForm()
    {
        return view('edit');
    }
}
