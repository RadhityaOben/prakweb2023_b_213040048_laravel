<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "name" => "Radhitya Putra Ridwan",
            "email" => "raditya.213040048@mail.unpas.ac.id",
            "image" => "radit.jpg",
            "title" => "About"
        ]);
    }
}
