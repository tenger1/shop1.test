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
        
       
     
var_dump($_SESSION);
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
         
         $servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);

print_r($_SESSION);

    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // Тут не знаю куда складывать заказы после того как пользователь нажимает купить типа. 
    // В $_SESSION как видищь массив с данными из карзины. 
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        return view('cart');
     }
    
    
}