<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/memories');
        } else{
            return view('welcome');
        }
    }
}
