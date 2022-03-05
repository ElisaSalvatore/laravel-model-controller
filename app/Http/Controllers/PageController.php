<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

// Creato il Controller con il seguente comando nel terminale: php artisan make:controller PageController
class PageController extends Controller
{
    public function index() {
        $data = Movie::all();
    
        return view('homepage', compact("data"));
    }
}
