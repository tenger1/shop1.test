<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    public function finishLogin(){
        

        $login = ($_GET["uname"]);
        $pass = ($_GET["upsw"]);
        
      print_r($login); 
      print_r($pass); 
      
$servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";  
        
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
 $result=mysqli_query($conn, "SELECT * FROM login WHERE 'user'=".$_GET["uname"]." AND 'pass'=".$_GET["upsw"]."") ;



 echo $result;

if (count ($user)==0) {
  echo "Такой пользователь не найден";
  exit;
}

print_r($user);


 
}



}
 ?>