<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   Public function home() {
        return view('welcome');
    }
}
