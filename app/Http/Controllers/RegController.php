<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegController extends Controller
{

    public function finishReg(Request $request){
        
        $rname = $_POST["reguname"];
        $rlogin = $_POST["regulogin"];
        $rpass = $_POST["regupsw"];
        $rrole = $_POST["regurole"];
      if(!isset($rlogin) || !isset($rname) || !isset($rpass)){
          echo "<h1>Ievadiet aizpildiet visus * laukus!</h1>";
          exit();
      }
      $rpass = md5($rpass."uyfvhsfias");
	  
 $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$reg_check = mysqli_query($conn, "SELECT * FROM `login` WHERE `user` = '$rlogin'");
if($reg_check->num_rows != 0){
    return redirect()->back()->with('message-error', 'This user already exist!');

    //return redirect()->back();
    mysqli_close($conn);
}
else{
$result = mysqli_query($conn, "INSERT INTO `login` (`name`, `user`, `password`, `role`) VALUES ('$rname', '$rlogin', '$rpass', '$rrole')");
if ($result) {
    
    return redirect()->back()->with('message-success', 'Success!');

}
    else {
        return redirect()->back()->with('message-error', 'DB Error!');
        
    }

mysqli_close($conn);

}

    }
    
}

?>
