<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegController extends Controller
{

    public function finishReg(){
        
        $rname = ($_GET["reguname"]);
        $rlogin = ($_GET["regulogin"]);
        $rpass = ($_GET["regupsw"]);
        $rrole = ($_GET["regurole"]);
      if(!isset($rlogin) || !isset($rname) || !isset($rpass)){
          echo "<h1>Ievadiet aizpildiet visus * laukus!</h1>";
          exit();
      }
      $rpass = md5($rpass."uyfvhsfias");
      
$servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";  

$conn = mysqli_connect($servername, $username, $password, $dbname);


$result = mysqli_query($conn, "INSERT INTO `login` (`name`, `user`, `password`, `role`) VALUES ('$rname', '$rlogin', '$rpass', '$rrole')");
if ($result) echo "<h1>Added!</h1>";
    else echo "<h1>Error!</h1>";   

mysqli_close($conn);

    }
    
}

?>
