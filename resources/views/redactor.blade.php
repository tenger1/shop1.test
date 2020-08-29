@extends('layouts.main')

@section('content')  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<h1 style="text-align: center; font-variant: small-caps; margin-top: 30px;">Redactors</h1>
<h2 style="margin-left: 40px; color: #df5000; font-variant: small-caps;">Pievienot kategoriju:</h2>
<div class="container">
		 
		 <form class="form-inline" method="get" action="/addcat/">
  
  <div class="form-group mx-sm-3 mb-2">
    
    <input type="text" class="form-control" id="catname" name="catname">
  </div>
  <button type="submit" class="btn btn-warning mb-2">Pievienot</button>
</form>
		 
		 </div>
		 
		 <h2 style="margin-left: 40px; color: #df5000; font-variant: small-caps;">Dzest kategoriju:</h2>
<div class="container">
		 
		 <form class="form-inline" method="get" action="/delcat/">
  
  <div class="form-group mx-sm-3 mb-2">
  <select class="browser-default custom-select" name="categorydel" id="categorydel" placeholder="Select">
  <option value="" disabled selected>Select</option>
    <?php 
	 $address = getenv('DB_HOST'). ':' .getenv('DB_PORT');    
if (!defined('DB_HOST'))define('DB_HOST', $address);
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$sql = mysqli_query($conn, "SELECT * FROM `categories`");
while ($row = $sql->fetch_assoc()){
echo '<option class="form-control "  value="'. $row['id'] .'">' . $row['name'] . '</option>';
}
mysqli_close($conn);
?>
  </select>
  </div>
  <button type="submit" class="btn btn-warning mb-2">Dzest</button>
</form>
		 
		 </div>
		 
<h2 style="margin-left: 40px; color: #df5000; font-variant: small-caps;">Pievienot ziedu:</h2>



    
     <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         ?>
		 
<div class="container mx-1">
    
  <div class="form-row">
  <div class="form-group col-md-4">
    <lable>Nosaukums:</lable><input type="text" name="name" id="name" class="form-control" />
  </div>
  <div class="form-group col-md-4">
    <lable>Krāsa:</lable><input type="text" name="color" id="color" class="form-control" />
  </div>  
  <div class="form-group col-md-4">
    <lable>Valsts:</lable><input type="text" name="country" id="country" class="form-control" />
  </div>
      
  </div>
  <div class="container">
      <lable>Pamatojums:</lable><textarea type="text" name="description" id="description" class="form-control" rows="7"></textarea>
  </div>
    
    <div class="form-row mt-3">
  <div class="form-group col-md-4">
    <lable>Cena:</lable><input type="number" step="0.01" name="price" id="price" class="form-control " min="0.01" />
  </div>
  
  
  <div class="form-group col-md-4"><lable>Kategorija:</lable>
  <select class="browser-default custom-select" name="category_id" id="category_id">
    <?php 
	if (!defined('DB_HOST'))define('DB_HOST', getenv('DB_HOST'));
       if (!defined('DB_USER')) define('DB_USER', getenv('DB_USERNAME'));
       if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('DB_PASSWORD'));
        if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_DATABASE'));

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$sql = mysqli_query($conn, "SELECT * FROM `categories`");
while ($row = $sql->fetch_assoc()){
echo '<option class="form-control "  value="'. $row['id'] .'">' . $row['name'] . '</option>';
}
mysqli_close($conn);
?>
  </select>
  </div>
  
  <div class="form-group col-md-4">
    <lable>Daudzums:</lable><input type="number" name="count" id="count" class="form-control" min="0" />
  </div>
    </div>
    
</div> 
 



<div class="container mx-1">
    <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true', 'class'=>'form-inline mx-1'));
         /*
         echo '<div class="form-row">';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('name', 'Nosaukums');
         echo Form::text('name', ['class' => 'form-control', 'id' => 'name']);
         echo '</div>';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('color', 'Krāsa');
         echo Form::text('color', ['class' => 'form-control', 'id' => 'color']);
         echo '</div>';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('country', 'Valsts');
         echo Form::text('country',['class' => 'form-control', 'id' => 'country']);
         echo '</div>';
         echo '</div>';
         
         echo '<div class="container">';
         echo Form::label('description', 'Pamatojums' );
         echo Form::text('description', ['class' => 'form-control', 'id' => 'description', 'rows' => '7']);
         echo '</div>';
         
         
         
         
         echo '<div class="form-row">';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('price', 'Cena');
         echo Form::text('price', ['class' => 'form-control', 'id' => 'price']);
         echo '</div>';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('color', 'Krāsa');
         echo Form::text('color', ['class' => 'form-control', 'id' => 'color']);
         echo '</div>';
         
         echo '<div class="form-group col-md-4">';
         echo Form::label('country', 'Valsts');
         echo Form::text('country',['class' => 'form-control', 'id' => 'country']);
         echo '</div>';
         echo '</div>';
         
          
          */
         echo 'Izvēlēties failu:';
        // echo '<input type="radio" name="name" value="male" class="form-control" checked/>';
         echo Form::file('image',['class' => 'btn btn-primary btn-sm mx-1 form-group mx-sm-3 mb-2 mx-1', 'accept' => '.jpg']);
         //echo Form::button('Open Image', ['class' => 'btn btn-large btn-primary openbutton']);
         echo Form::reset('Dzēst', array('class' => 'btn btn-secondary mx-1 form-group mx-sm-3 mb-2 mx-1'));
         echo Form::submit('Submit', ['class' => 'btn btn-warning mx-1 form-group mx-sm-3 mb-2 mx-1']);
         echo Form::close();
      ?>   
</div>
<div class="container">
        <h2 style="margin-left: 30px; color: #df5000; font-variant: small-caps;">Dzest ziedu pec ID:</h2>                       
                        <form action="/delete_by_id/" method="get" class="form-inline">
						<div class="form-group mx-sm-3 mb-2">
                            <input type="number" class="form-control" name="del_id" id="del_id" min="1">
						</div>
						    <div class="form-group mx-sm-3 mb-2">
                            <button type="submit" class="btn btn-danger">Dzēst ziedu</button>
						</div>
						
                        </form>
                        </div>
<div class="container mx-1">

    <h2 style="margin-left: 30px; color: #df5000; font-variant: small-caps;">Mēklēt Pasūtījumus:</h2>
<form action="/search_by_name/" method="get" class="form-inline">

  <div class="form-group mx-sm-3 mb-2">
      <input type="text" class="form-control" id="name_order" name="name_order" placeholder="Address">
  </div>
<div class="form-group mx-sm-3 mb-2">
    <input type="number" class="form-control" name="id_from" id="inputPassword2" min="1" placeholder="ID From">
</div>
<div class="form-group mx-sm-3 mb-2">
    <input type="number" class="form-control" name="id_to" id="inputPassword2" min="1" placeholder="ID TO">
</div>
    <div class="form-group mx-sm-3 mb-2">
  <button type="submit" class="btn btn-primary mb-2 ml-3">Meklēt</button>
    </div>
</form>
    

    


  
                <?php if($key ?? ''){
                
                echo '<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">Complete</th>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">ID</th>
      <th scope="col">Pcs.</th>
      <th scope="col">Product</th>
      <th scope="col">Comment</th>
      <th scope="col">Datums</th>
    </tr>
  </thead>
  <tbody>';
                foreach ($key ?? '' as $v1) {
                      $d=strtotime("now +3 hours");
                      $date_now = date("Y-m-d H:i:s", $d);
                      $d3=strtotime("now +3 hours");
                      $date_now_plus_3h = date("Y-m-d H:i:s", $d3);
                      $d2=strtotime("now +3 hours +1 day");
                      $date_now_plus_day = date("Y-m-d H:i:s", $d2);
                      
                      if ($v1['datums'] < $date_now){
                         echo '<tr class="table-danger">'; 
                      }
                      elseif ($v1['datums'] < $date_now_plus_day) {
                      echo '<tr class="table-warning">'; 
                  }
                      
                      else echo '<tr>';
                    echo "<td>";
                      echo '<form action="/delivered/';
                      echo $v1['order_id'];
                      echo'/" method="get" class="form-inline">
  <button type="submit" class="btn btn-primary mb-2">Delete</button>
</form>';
                      echo '<form action="/deliverchange/';
                      echo $v1['order_id'];
                      echo'/" method="get" class="form-inline">
  <button type="submit" class="btn btn-warning mb-2">Change</button>
</form>';
                      echo "</td>";
                      echo "<td>";
                      echo $v1['order_id'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['customer_name'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['adress'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['phone'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['ptoduct_id'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['countf'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['product_name'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['comment'];
                      echo "</td>";
                      echo "<td>";
                      echo $v1['datums'];
                      echo "</td>";
                      
                      
                     
                     echo "</tr>";
                     
                     
                     }  
                }
                              
                ?>
<tbody></table>
</div>


@endsection