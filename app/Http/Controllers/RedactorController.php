<?php

namespace App\Http\Controllers;
 
use App\Categories;
use App\Goods;
use Illuminate\Http\Request;
 
class RedactorController extends Controller
{
   public function Add(){
      
           if($_COOKIE['userrole'] == 'admin'){
            return view('redactor');
           
        }
        else echo "<h1>You are not Admin!</h1>";
       
        echo $_COOKIE['userrole'];
   }
   
   
   
}