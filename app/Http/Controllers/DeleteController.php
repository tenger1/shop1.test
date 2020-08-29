<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

class DeleteController extends Controller
{

    public function Deletefromdb(){
        if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome'); 
        }
        else{     
        $del_id = ($_GET["del_id"]);
        
         $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = mysqli_query($conn, "DELETE FROM goods WHERE id='$del_id'");
        mysqli_close($conn);
        
		
        echo '<script type="text/javascript">'
			   , 'history.go(-2);'
			   , '</script>';
			   
      $ext = 'jpg';
      $newname = "$del_id.$ext";
     
      $destinationPath = 'images';
      $image_path = $destinationPath."/".$newname;
	  
	  if(File::exists($image_path)) {
    File::delete($image_path);	
    }
	else echo "DELETE ERROR!";
    }
    }
}

