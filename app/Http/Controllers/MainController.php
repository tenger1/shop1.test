<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MainController extends Controller
{

    public function changeLocale($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
       // dd($currunt_locale);
        
    }
    
    
}