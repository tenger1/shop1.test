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

print_r($result);

//$table = 'goods';
//$result = mysqli_query($conn, "SELECT * x`FROM ".$table." WHERE id= ".$product_id."");

    }
}
