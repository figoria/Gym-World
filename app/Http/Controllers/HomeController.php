<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return view('home');
    }
}
