<?php

namespace App\Http\Controllers;
 
use App\Categories;
use App\Goods;
use App\Orders;
use Illuminate\Http\Request;
 
class RedactorController extends Controller
{
   public function Add(){
      
           if($_COOKIE['userrole'] == 'admin'){
            return view('redactor');
           
        }
        else {echo "<h1>You are not Admin!</h1>"; return view('welcome');}
       
        
   }
   public function DeliveredAction($id){
       $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
       $result = mysqli_query($conn, "DELETE FROM orders WHERE order_id='$id'");
       
       if($result){ 
           echo "<h1>Order deleted!</h1>";
           return view ('redactor');
       }
       else {
           echo "<h1>No such Order!</h1>";
           return view ('redactor');
           exit();
       }
   }
   
   public function SearchByNameAction (){
        $name = ($_GET["name_order"]); 
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE customer_name='$name'");
        
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        


/*
        if($result){
            var_dump($result);
            
        }
        else echo "<h1>No such name!</h1>";
 
 */


     //   if ($order) {
      //      return view('redactor', ['name' => $order]);
     //   }
        if($result) return view('redactor', ["key"=>$data]);
       else {
           echo "<h1>No such Order!</h1>";
           return view ('redactor');
           exit();
       }
   }
     
     //return view('redactor')->withTitle($data);
    }
   
   
   
