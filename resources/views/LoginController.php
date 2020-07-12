<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    public function finishLogin(){
        

        $login = ($_GET["ulogin"]);
        $pass = ($_GET["upsw"]);
        
      //echo"Login: $login <br> Pass: $pass"; 
      
$servername = "127.0.0.1:3308";
$username = "user1";
$password = "12345";
$dbname = "shop";  


$pass = md5($pass."uyfvhsfias");

$conn = mysqli_connect($servername, $username, $password, $dbname);

 
$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `user` = '$login' AND `password` = '$pass'");
mysqli_close($conn);
//var_dump($result);
$user = $result->fetch_assoc();


if(count($user) == 0){
    echo "<h1>No such user!</h1>";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$urole = $user["role"];
$uname = $user["name"];
//echo "<h1>Hello, $uname!</h1>";
//echo "<h1>You are $urole!</h1>";
setcookie('userrole', $user['role'], time() + 3600, "/");

//if ($result) echo "<h1>Login good!</h1>";
if($urole == "admin"){
    return view('redactor');
}
else return view('welcome');

// $result=mysqli_query($conn, "SELECT * FROM login WHERE 'user'=".$_GET["uname"]." AND 'pass'=".$_GET["upsw"]."") ;

}

public function loginExit(){
    
   // setcookie('user', $user['name'], time() - 3600, "/");
    setcookie("user", "", time() - 3600);
    setcookie("userrole", "", time() - 3600);
    return view('welcome');
    
    
}



}
 ?>