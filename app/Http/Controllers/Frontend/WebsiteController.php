<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function home(){
        
         $user= User::get();
        return view('frontend.pages.home', compact('user'));
    }
}