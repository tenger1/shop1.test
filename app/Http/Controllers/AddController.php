<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
class AddController extends Controller
{
    public function Addtodb (){
        $name = ($_GET["name"]);
        $color = ($_GET["color"]);
        $country = ($_GET["country"]);
        $description = ($_GET["description"]);
        $price = ($_GET["price"]);
        $category_id = ($_GET["category_id"]);
        $count = ($_GET["count"]);
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop"; 
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $result = mysqli_query($conn, "INSERT INTO goods (name, color, country, description, price, category_id, count) VALUES ('$name', '$color', '$country', '$description', '$price','$category_id', '$count')");
        mysqli_close($conn);
        if ($result) echo "<h1>Add good!</h1>";

        
    }
    
}

