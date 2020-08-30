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
$login = $_POST["ulogin"];
$pass = $_POST["ulogin"];

      //  $login = ($_GET["ulogin"]);
      //  $pass = ($_GET["upsw"]);
        
      //echo"Login: $login <br> Pass: $pass";  

 $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


$pass = md5($pass."uyfvhsfias");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 
$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `user` = '$login' AND `password` = '$pass'");
mysqli_close($conn);
//var_dump($result);
if(!$result) {
	return redirect()->back()->with('message-error', 'DB Error!');
    
    
}
else{

$user = $result->fetch_assoc();
if(!$user) {
	return redirect()->back()->with('message-error', 'Wrong password or username!');
    
    
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