<?php
namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ChangeController extends Controller
{
    public function change(){
        if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome');  
        }
        else{ 

        $change = ($_GET["change"]);  
        $changeid = ($_GET['good_id']);
        
        
        define('DB_HOST', '127.0.0.1:3308');
        define('DB_USER', 'user1');
        define('DB_PASSWORD', '12345');
        define('DB_NAME', 'shop');

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 
        $result = mysqli_query($conn, "UPDATE goods SET count = '$change' WHERE id = '$changeid'");
        if ($result) echo "<h1>Change good!</h1>";
        mysqli_close($conn);
        return redirect('/goods/'.$changeid.'');
        
    }
    
        } 
}