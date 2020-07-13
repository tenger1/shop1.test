<?php
namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ChangeController extends Controller
{
    public function change(){

        $change = ($_GET["change"]);  
        $changeid = ($_GET['good_id']);
        
        
        $servername = "127.0.0.1:3308";
        $username = "user1";
        $password = "12345";
        $dbname = "shop";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
 
        $result = mysqli_query($conn, "UPDATE goods SET count = '$change' WHERE id = '$changeid'");
        if ($result) echo "<h1>Change good!</h1>";
        mysqli_close($conn);
        return redirect('/goods/'.$changeid.'');
        
    }
    
    
}