<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
class AddController extends Controller
{
    public function Addtodb (){
        if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome');  
        }
        else{   
        $name = ($_GET["name"]);
        $color = ($_GET["color"]);
        $country = ($_GET["country"]);
        $description = ($_GET["description"]);
        $price = ($_GET["price"]);
        $category_id = ($_GET["category_id"]);
        $count = ($_GET["count"]);
        
        define('DB_HOST', '127.0.0.1:3306');
        define('DB_USER', 'user1');
        define('DB_PASSWORD', '12345');
        define('DB_NAME', 'shop');

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = mysqli_query($conn, "INSERT INTO goods (name, color, country, description, price, category_id, count) VALUES ('$name', '$color', '$country', '$description', '$price','$category_id', '$count')");
        mysqli_close($conn);
        if ($result) echo "<h1>Add good!</h1>";

        return view('redactor');
        }
    }
    
    public function AddImage(){
        
    }
    
}

