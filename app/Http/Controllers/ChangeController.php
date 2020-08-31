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
		public function ChangeName(){
			$change_name = ($_GET["change_name"]);
			//echo $change_name;
			
			$address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$userid = $_COOKIE['userid'];
		$user = $_COOKIE['user'];
        $result = mysqli_query($conn, "SELECT * FROM login WHERE id='$userid' AND name='$user'");
			if ($result){
				echo 123;
				$result2 = mysqli_query($conn, "UPDATE login SET name='$change_name' WHERE id='$userid'");
				if($result2){
					setcookie('user', $change_name, time() + 3600, "/");
					return redirect()->back()->with('message-success', 'Your name was changed!');
				}
			}
			else return redirect()->back()->with('message-error', 'Error!');
		}
		
		public function ChangePass(Request $request){
			
			$pass_old = $_POST['change_pass_old'];   
			$pass_new = $_POST['change_pass_new'];
			
				$address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));

		$pass_old = md5($pass_old."uyfvhsfias");
		$pass_new = md5($pass_new."uyfvhsfias");
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		//echo $pass_old;
		$userid = $_COOKIE['userid'];
		
		$result = mysqli_query($conn, "SELECT * FROM login WHERE id = '$userid' AND password = '$pass_old'");
		
		if (($result->num_rows)>0) {
			//var_dump($result);
			
			$result2 = mysqli_query($conn, "UPDATE login SET password='$pass_new' WHERE id='$userid'");
			if ($result2){
			return redirect()->back()->with('message-success', 'Your password updated!');
			}
			else return redirect()->back()->with('message-error', 'DB Error!');
		}
		else {
			return redirect()->back()->with('message-error', 'Wrong password!');
			
		}
			
		}
		
}