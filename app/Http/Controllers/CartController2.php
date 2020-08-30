<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoodsOrders;
use App\Goods;
class CartController2 extends Controller
{
    public function Cart2Action (){ 
        return view('cart');
    }
    
     public function addtocartAction($id){
        
        $key = array_search($id, $_SESSION["cart"]);
        if($key){
            echo "<h1>Also added to cart!<h1>";
        }
        else {
            $_SESSION["cart"][] = $id;
            echo "<h1>Add $id</h1>";
        
        var_dump($_SESSION);
        }
    }
    
    public function deletefromcartAction($id){
        $key = array_search($id, $_SESSION["cart"]);

        if($key){
            $_SESSION["cart"] = array_diff($_SESSION["cart"], ["$id"]);
            
            echo "<h1>Id $id was deleted!</h1>";
        }
        
        else echo "No such element in cart!";
        
       
     

    }
    
    public function AddAction (){ 
        
        $good_id = ($_GET["good_id"]);
        $count = ($_GET["daudzums"]);

        $product = Goods::find($good_id);
        if ($product) {
            $a=1;
        }
        else{
            echo "<h1>No such item!</h1>";
        }
        
        //setcookie('id_daudzums', $user['name'], time() + 3600, "/");
        
        $key = array_search($good_id, $_SESSION);
        if($key){
            echo "<h1>Also added to cart!<h1>";
        }
        else {
           // $_SESSION["cart"][] = $good_id;
           // $_SESSION["cart_count"][] = $count;
           // $_SESSION["cart_summ"] += $summ;
            
            $_SESSION["$good_id "] = array( 
                
               "id" => $product->id,
               "name"=> "$product->name",
               "price" => $product->price,	
               "count" => $count
            );
           
           
            return view('product', ['good' => $product]);
        
        
        
        }
   
    }
    public function DeleteAllAction(){
        
        session_destroy();
        return view('cart');
    }
    
     public function CartContinueAction(){
         
         $name = ($_GET["name"]);
         $adress = ($_GET["adress"]);
         $phone = ($_GET["phone"]);
         $info = ($_GET["info"]);
         $datums = ($_GET["datums"]);
        
         
     $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));

		
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //print_r($_SESSION);



$id_to_delete = array_column($_SESSION, 'id');
$count_to_delete = array_column($_SESSION, 'count');
$product_name_to_delete = array_column($_SESSION, 'name');

if(isset($_COOKIE['userid'])){
for($i = 0; $i < count($count_to_delete); ++$i){
    $query = "INSERT INTO orders ( customer_name, adress, phone, countf, ptoduct_id, product_name, comment, datums, customer_id) VALUES ('".$name."','".$adress."','".$phone."','".$count_to_delete[$i]."','".$id_to_delete[$i]."','".$product_name_to_delete[$i]."','".$info."','".$datums."','".$_COOKIE['userid']."')";
    //echo $query;
    $result = mysqli_query($conn,$query);
    if(!$result) echo "ERROR1";
}
}
if(!isset($_COOKIE['userid'])){
    for($i = 0; $i < count($count_to_delete); ++$i){
    $query = "INSERT INTO orders ( customer_name, adress, phone, countf, ptoduct_id, product_name, comment, datums) VALUES ('".$name."','".$adress."','".$phone."','".$count_to_delete[$i]."','".$id_to_delete[$i]."','".$product_name_to_delete[$i]."','".$info."','".$datums."')";

    $result = mysqli_query($conn,$query);
	if(!$result) echo "ERROR2";
    }
}
/*
echo "<br>";
print_r($id_to_delete);
echo "<br>";
print_r($count_to_delete);
*/


for($i = 0; $i < count($count_to_delete); ++$i){
    $result = mysqli_query($conn, "UPDATE Goods SET count = count - '$count_to_delete[$i]' WHERE id = '$id_to_delete[$i]';");
    if($result){
      //  echo "<br>Update good!";
    }
    else echo "<br>Update ERROR!";
}

 
   
        mysqli_close($conn);
        session_destroy();


        return redirect()->back()->with('message-success', 'Veiksmiģi pasūtīts!');
        
     }
    
    
}