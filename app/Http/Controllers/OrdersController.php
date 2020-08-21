<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrdersController extends Controller
{
    public function buyAction($id){
        $product = Goods::find($id);
        if($product){
            return view('order', ['goods_id' => $id]);
        }
    }
    
     
public function finishAction(){
        

    define('DB_HOST', '127.0.0.1:3306');
    define('DB_USER', 'user1');
    define('DB_PASSWORD', '12345');
    define('DB_NAME', 'shop');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);       



//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

    $amount = ($_GET["amount"]);
    $city =($_GET["city"]);
    $phone =($_GET["phone"]);
    $customer_name = ($_GET["customer_name"]);
    $product_id = ($_GET["product_id"]);
    $comment = ($_GET["comment"]);
    
    
    
    if (empty($amount) or empty($city) or
    empty($customer_name) or empty($phone))
    {
        die ("<h1>Pārbaudiet dates ievadu! Ne visi dati ir pareizi vai nav ievadīti!</h1>");
    }
    
   
   // echo $city,$amount,$phone,$customer_name,$product_id,$comment;
    
   // mysql_select_db ( $db ) or die ("Невозможно открыть $db");
   // echo "-----";
   // echo $product_id;
 /*   
    $result ="SELECT count FROM goods WHERE id = '".$_GET["product_id"]."'";
    echo $result;
    $result = mysqli_query($conn,$result);
  
  */
    
    /*
    $query = "UPDATE goods SET count = count - '".$amount."', WHERE id = ".$product_id."";
    echo $query;   
    $result = mysqli_query($conn,$query);
     */
    $table = 'goods';
    $result = mysqli_query($conn, "SELECT*FROM ".$table." WHERE id= ".$product_id."");
    //var_dump($result);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    //print_r($data);
    
    $counti=$data["0"]["count"];
    $cena=$data["0"]["price"];
    $pname=$data["0"]["name"];
  
    if ($amount<0) echo '<h1>Dati nav pareizi</h1>';
    else if($counti<$amount){
        echo '<h1>Mums nav tik daudz!!!</h1>';
    }
    else if($counti==$amount){
        echo '<h1>Jūs paņēmat pēdējo!!!</h1>';
    }
    else{
        $query = "INSERT INTO orders ( customer_name, city, phone, countf, ptoduct_id, comment) VALUES ('".$_GET["customer_name"]."','".$_GET["city"]."','".$_GET["phone"]."','".$_GET["amount"]."','".$_GET["product_id"]."','".$_GET["comment"]."')";
    $result = mysqli_query($conn,$query);
    if ($result) echo "<h1>Veiksmīģi pierakstīts!</h1>";
    $counti = $counti-$amount;
    
    $query = "UPDATE ".$table." SET count =".$counti." WHERE id= ".$product_id."";
    $result = mysqli_query($conn, $query);
   
  
    if ($result) echo "<h1>Pasūtīts!</h1>";
    
    
    
    
    
    $query = "INSERT INTO goods_orders ( Gid, Gname, Gprice, Gamount) VALUES ('".$_GET["product_id"]."','".$pname."','".$cena."','".$amount."')";
    $result = mysqli_query($conn,$query);
    
    if($result) echo "<h1>Un ievietots grozā!</h1>";
    
    echo "<h1>Jūsu pasūtijuma summa ir <u>".$summa = $amount*$cena."</u> €</h1>";
    }
    mysqli_close($conn);

   
}}