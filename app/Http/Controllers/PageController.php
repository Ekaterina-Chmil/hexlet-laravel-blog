<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // Открывает шаблон resources/views/page/about.blade.php
        return view('about');
    }
}
