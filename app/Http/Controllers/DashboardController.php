<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('backend.pages.admin-dashboard');
            }else{
                return view('backend.pages.user-dashboard');
            }
        }else{
            return "You are not loged in";
        }
    }
}
