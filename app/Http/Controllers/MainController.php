<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexHome()
    {
        return view('index');
    }
    public function indexContact()
    {
        return view('contact');
    }
    public function storeContact(Request $request)
    {
        return view("contact", [
            'informations' => $request
        ]);
    }

    public function indexAbout()
    {
        return view('about');
    }
    public function indexFaq()
    {
        return view('faq');
    }
}
