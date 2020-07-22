<?php

namespace App\Http\Controllers;
 
use App\Categories;
use App\Goods;
use App\Orders;
use Illuminate\Http\Request;
 
class RedactorController extends Controller
{
   public function Add(){
      if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){  
        echo "<h1>You are not Admin!</h1>";
        return view ('welcome');
        }
        else return view('redactor');     
   }
   
   public function DeliveredAction($id){
       if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){  
        echo "<h1>You are not Admin!</h1>";
        return view ('welcome');
        }
        else{ 
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $move = mysqli_query($conn, "SELECT * FROM orders WHERE order_id= $id");    
        if($move){
        for ($data = []; $row = mysqli_fetch_assoc($move); $data[] = $row);
        echo $data[0]['customer_name'];
        //var_dump($data);
        
        }
        mysqli_close($conn);
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        $query = "INSERT INTO orders_complited (order_id, customer_name, adress, phone, countf, ptoduct_id, product_name, comment, datums, customer_id) VALUES ('".$data[0]['order_id']."','".$data[0]['customer_name']."','".$data[0]['adress']."','".$data[0]['phone']."','".$data[0]['countf']."','".$data[0]['ptoduct_id']."','".$data[0]['product_name']."','".$data[0]['comment']."','".$data[0]['datums']."','".$data[0]['customer_id']."')";
        $result2 = mysqli_query($conn,$query);
        
       
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "DELETE FROM orders WHERE order_id='$id'");
        mysqli_close($conn);
       if($result){ 
           echo "<h1>Order deleted!</h1>";
           return redirect()->back();
       }
       else {
           echo "<h1>No such Order!</h1>";
           return redirect()->back();
           
       }
      
   }
   }
   
   public function SearchByNameAction (){
        $result = false;
        
   if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
        echo "<h1>You are not Admin!</h1>";
        return view ('welcome');
        }
        else{     
        
        $name = ($_GET["name_order"]); 
        $id_from = ($_GET["id_from"]); 
        $id_to = ($_GET["id_to"]); 
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
       /* 
        if($name == '' && ($id_from != '' || $id_to != '')){
            echo "GOOD FROM!";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $result = mysqli_query($conn, "SELECT * FROM orders WHERE id>='$id_from' AND id<='$id_to'");
        }
        */

        /*
        if($name != ' ' && ($id_from != '' || $id_to != '')){
           $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE customer_name='$name' AND order_id BETWEEN '$id_from' AND '$id_to'");
        echo "if 1";
        }
         * 
         */
        
        if($name == '' && $id_from != '' && $id_to != ''){
           $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id BETWEEN '$id_from' AND '$id_to' ORDER BY datums ASC");
        
        }
        
        
        if($name != '' && $id_from == '' && $id_to == ''){
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE adress LIKE '%$name%' ORDER BY datums ASC");

        }
        
        if($name == '' && $id_from == '' && $id_to == ''){
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders ORDER BY datums ASC");

        }
        
        if($name != '' && $id_from != '' && $id_to == ''){
            $id_from = ($_GET["id_from"]); 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE adress LIKE '%$name%' AND order_id>='$id_from' ORDER BY datums ASC");

        }
        if($name != '' && $id_from == '' && $id_to != ''){
            $id_to = ($_GET["id_to"]); 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE adress LIKE '%$name%' AND order_id<='$id_to' ORDER BY datums ASC");

        }
        if($name != '' && $id_from != '' && $id_to != ''){
            $id_to = ($_GET["id_to"]); 
            $id_from = ($_GET["id_from"]); 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE adress LIKE '%$name%' AND order_id<='$id_to' AND order_id>='$id_from' ORDER BY datums ASC");

        }
        
        if($name == '' && $id_from == '' && $id_to != ''){
           $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id<='$id_to' ORDER BY datums ASC");
        

        }
        if($name == '' && $id_from != '' && $id_to == ''){
           $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id>='$id_from' ORDER BY datums ASC");
        

        }
 
        if($result){
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        }
        
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
   
     mysqli_close($conn);
     //return view('redactor')->withTitle($data);
    }
}
    public function DeliverchangeAction($id){
        if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
        echo "<h1>You are not Admin!</h1>";
        return view ('welcome');
        }
        else{
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id= $id");
        
        if($result)for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        
        if($result) {
            
            return view('deliverchange', ["order"=>$data]);
        }
        
        }
    }
    
    public function Deliverchange_finalAction(){
        
        $result = false;
        
     if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
        echo "<h1>You are not Admin!</h1>";
        return view ('welcome');
        }
        else{     
        
        $name = ($_GET["vards"]); 
        $adress = ($_GET["adrese"]); 
        $phone = ($_GET["telefons"]); 
        $countf  = ($_GET["daudzums"]); 
        $id = ($_GET["order_id"]); 
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $result = mysqli_query($conn, "UPDATE orders SET customer_name = '$name', adress= '$adress', phone = '$phone', countf = '$countf' WHERE order_id = $id;");
        
        if($result){
           // return redirect()->back();
            
            echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
        
        }
        mysqli_close($conn);
        }
        
    }
}
   
   
   
