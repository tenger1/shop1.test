<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DeleteController extends Controller
{

    public function Deletefromdb(){
        if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome'); 
        }
        else{     
        $del_id = ($_GET["del_id"]);
        
        define('DB_HOST', '127.0.0.1:3306');
        define('DB_USER', 'user1');
        define('DB_PASSWORD', '12345');
        define('DB_NAME', 'shop');

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = mysqli_query($conn, "DELETE FROM goods WHERE id='$del_id'");
        mysqli_close($conn);
        if ($result) echo "<h1>Delete good!</h1>";
        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
    }
    }
}

