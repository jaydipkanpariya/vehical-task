<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
