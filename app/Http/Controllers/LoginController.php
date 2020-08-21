<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    public function finishLogin(Request $request){
   // $login = htmlspecialchars($_POST['ulogin']);   
  // $pass = htmlspecialchars($_POST['ulogin']);
//$login = $_POST["ulogin"];
//$pass = $_POST["ulogin"];

        $login = ($_GET["ulogin"]);
        $pass = ($_GET["upsw"]);
        
      //echo"Login: $login <br> Pass: $pass";  

define('DB_HOST', '127.0.0.1:3306');
define('DB_USER', 'user1');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'shop');

$pass = md5($pass."uyfvhsfias");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 
$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `user` = '$login' AND `password` = '$pass'");
mysqli_close($conn);
//var_dump($result);
if(!$result) {
    echo "<h1>Error!</h1>";
    exit();
    
}
else{

$user = $result->fetch_assoc();
if(!$user) {
    echo "<h1>Error!</h1>";
    exit();
    
}

if(count($user) == 0){
    echo "<h1>No such user!</h1>";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$urole = $user["role"];
$uname = $user["name"];
$uid = $user["id"];
//echo "<h1>Hello, $uname!</h1>";
//echo "<h1>You are $urole!</h1>";
setcookie('userrole', $user['role'], time() + 3600, "/");
setcookie('userid', $user['id'], time() + 3600, "/");
//if ($result) echo "<h1>Login good!</h1>";
if($urole == "admin"){
    return redirect()->to('/redactor');
}
else return redirect()->to('/home');
}

// $result=mysqli_query($conn, "SELECT * FROM login WHERE 'user'=".$_GET["uname"]." AND 'pass'=".$_GET["upsw"]."") ;

}

public function loginExit(){
    
   // setcookie('user', $user['name'], time() - 3600, "/");
    setcookie("user", "", time() - 3600);
    setcookie("userrole", "", time() - 3600);
    
   // return view('welcome');
    return redirect()->to('/home');



    
    
}



}
 ?>