<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class HelloController extends Controller
{
    public function about() {
        return view('about');
    }

}
