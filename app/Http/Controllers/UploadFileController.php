<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
use mysqli;

class UploadFileController extends Controller {
   public function index() {
      return view('uploadfile');
   }
   public function index2() {
      return redirect()->back();
   }
   public function index3() {
      return view('myorders');
   }
   
   public function ChangeImage(Request $request) {
      if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome'); 
        }
   else{

    
        //echo $last;
      $file = $request->file('image');
      
      
      $radio = $_POST["id"];
      
      $name = $_POST["name"];
      $color = $_POST["color"];
      $country = $_POST["country"];
      $description = $_POST["description"];
      $price = $_POST["price"];
      
         $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE goods SET name = '$name', color = '$color', country = '$country', description = '$description', price = '$price' WHERE id = $radio";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


//$query = "UPDATE goods SET name = '$name', color = '$color', country = '$country', descriprion = '$description', price = '$price' WHERE id = $radio";

//echo $query;
//$result = mysqli_query($conn, $query);


      //echo $radio;
      //echo $radio->getClientOriginalName();
      //Display File Name
      //echo 'File Name: '.$file->getClientOriginalName();
      //echo '<br>';
   
      //Display File Extension
      //echo 'File Extension: '.$file->getClientOriginalExtension();
      //echo '<br>';
   
      //Display File Real Path
      //echo 'File Real Path: '.$file->getRealPath();
      //echo '<br>';
   
      //Display File Size
      //echo 'File Size: '.$file->getSize();
      //echo '<br>';
   
      //Display File Mime Type
      //echo 'File Mime Type: '.$file->getMimeType();
      //echo '<br>';
      
      //echo 'File extension: '.$file->guessExtension();
      //Move Uploaded File
      if ($file){
     // $ext = $file->getClientOriginalExtension();
      $ext = 'jpg';
      $newname = "$radio.$ext";
      //echo $newname;
      
      $destinationPath = 'images';
      $image_path = $destinationPath."/".$newname;
      //echo $image_path;
      
     if(File::exists($image_path)) {
    File::delete($image_path);
    }
      $file->move($destinationPath,$newname);
      }
  //return view('welcome');
     
      return redirect()->back();
      
   }
   
   }
   
   

   
   public function showUploadFile(Request $request) {
      if(empty($_COOKIE['userrole']) || $_COOKIE['userrole'] != 'admin'){
            echo "<h1>You are not Admin!</h1>";
            return view ('welcome'); 
        }
        else{
            
            
 $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));


    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT MAX(id) AS MAX FROM goods";

$result = mysqli_query($conn, $query);



if($result){
    
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    //print_r($data);
}

$last = $data[0]['MAX']+1;
//echo $last;
      $file = $request->file('image');
      
      $name = $request->input('name');
      $color = $request->input('color');
      $country = $request->input('country');
      $description = $request->input('description');
      $price = $request->input('price');
      $category_id = $request->input('category_id');
      $count = $request->input('count');
      
      //echo "{$name},{$color},{$country},{$description},{$price},{$category_id},{$count}";
    
      //echo $radio->getClientOriginalName();
      //Display File Name
      //echo 'File Name: '.$file->getClientOriginalName();
      //echo '<br>';
   
      //Display File Extension
      //echo 'File Extension: '.$file->getClientOriginalExtension();
      //echo '<br>';
   
      //Display File Real Path
      //echo 'File Real Path: '.$file->getRealPath();
      //echo '<br>';
   
      //Display File Size
      //echo 'File Size: '.$file->getSize();
      //echo '<br>';
   
      //Display File Mime Type
      //echo 'File Mime Type: '.$file->getMimeType();
      //echo '<br>';
      
      //echo 'File extension: '.$file->guessExtension();
      //Move Uploaded File
	  if($file){
      $ext = $file->getClientOriginalExtension();
      $newname = "$last.$ext";
      $destinationPath = 'images';
      $file->move($destinationPath,$newname);
	  }
	  
      $result = mysqli_query($conn, "INSERT INTO goods (id, name, color, country, description, price, category_id, count) VALUES ('$last','$name', '$color', '$country', '$description', '$price','$category_id', '$count')");
        mysqli_close($conn);
        if ($result) return redirect()->back()->with('message-success', 'Product added!');

        
        //$file->move($destinationPath,$newname);
      
      
      return view('redactor');
        }
   }
}