<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoodsOrders;
class CartController extends Controller
{
    public function CartAction (){
        $product = GoodsOrders::all();
        if ($product) {
            
            return view('cart', ['cart' => $product]);
        }
    }
	
    public function CartClear (){
        echo 123;
        $servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$result = mysqli_query($conn, "SELECT orders.ptoduct_id, goods_orders.Gid  FROM goods_orders, orders WHERE goods_orders.Gid = orders.ptoduct_id");

//print_r($result);
mysqli_close($conn);
//$table = 'goods';
//$result = mysqli_query($conn, "SELECT * x`FROM ".$table." WHERE id= ".$product_id."");

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
    
    public function deletefromcartAction(){
        
        $del_from_cart_id = ($_GET["id_to_delete"]);
        $del_from_cart_id_space = "$del_from_cart_id ";
        
        
        unset($_SESSION[$del_from_cart_id_space]);
        
        return view('cart');
        
    }
       /*
        $key = array_search($id, $_SESSION["cart"]);

        if($key){
            $_SESSION["cart"] = array_diff($_SESSION["cart"], ["$id"]);
            echo "<h1>Id $id was deleted!</h1>";
        }
        
        else echo "No such element in cart!";
        var_dump($_SESSION);
    }
        
        */
    
    public function MyOrders(){
       $id = $_COOKIE['userid'];

       $servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM orders WHERE customer_id = $id";

$result = mysqli_query($conn, $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

//print_r($data);

$query = "SELECT * FROM orders_complited WHERE customer_id = $id";

$result = mysqli_query($conn, $query);
for ($data2 = []; $row = mysqli_fetch_assoc($result); $data2[] = $row);

mysqli_close($conn);

return view('myorders', ["key"=>$data], ["key2"=>$data2]);
    }
}
















