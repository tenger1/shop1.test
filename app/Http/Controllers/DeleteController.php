<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DeleteController extends Controller
{

    public function Deletefromdb(){
        $del_id = ($_GET["del_id"]);
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop"; 
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $result = mysqli_query($conn, "DELETE FROM goods WHERE id='$del_id'");
        mysqli_close($conn);
        if ($result) echo "<h1>Delete good!</h1>";
        
    }
    
}

