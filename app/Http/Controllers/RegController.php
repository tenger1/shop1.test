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
      
define('DB_HOST', '127.0.0.1:3308');
define('DB_USER', 'user1');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'shop');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$reg_check = mysqli_query($conn, "SELECT * FROM `login` WHERE `user` = '$rlogin'");
if($reg_check->num_rows != 0){
    echo "<h1>This user also exist!</h1>";

    return redirect()->to('/register');
    mysqli_close($conn);
}
else{
$result = mysqli_query($conn, "INSERT INTO `login` (`name`, `user`, `password`, `role`) VALUES ('$rname', '$rlogin', '$rpass', '$rrole')");
if ($result) {
    
    echo "<h1>Success!</h1>";
    return redirect()->to('/register');
}
    else {
        echo "<h1>DB Error!</h1>"; 
        return redirect()->to('/register');
    }

mysqli_close($conn);

}

    }
    
}

?>
