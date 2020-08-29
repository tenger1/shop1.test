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
        
        
         $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 
        $result = mysqli_query($conn, "UPDATE goods SET count = '$change' WHERE id = '$changeid'");
        if ($result) echo "<h1>Change good!</h1>";
        mysqli_close($conn);
        return redirect('/goods/'.$changeid.'');
        
    }
    
        } 
}