@extends('layouts.orders')

@section('content')
<div class="container" style="width: 70vw;">
		<div class="container mx-auto mt-4 mb-4">
		@if(session()->has('message-error'))
    <div class="alert alert-danger">
        {{ session()->get('message-error') }}
    </div>
@endif

@if(session()->has('message-success'))
    <div class="alert alert-success">
        {{ session()->get('message-success') }}
    </div>
@endif
					
					<form class="form-inline" method="get" action="/change_name/">
						<div class="form-group mx-sm-3 mb-2">
							<input class="form-control" type="text" name="change_name" id="change_name" value="{{$_COOKIE['user']}}">
						</div>
						<button type="submit" class="btn btn-warning mb-2">Change name</button>
					</form>
				</div>
				
				<div>
				<?php echo Form::open(array('url' => '/change_pass/', 'class'=>'form-inline')); ?>
					
						<div class="form-group  mb-2 mx-sm-3 col-xs-4">
						<label class="formGroupExampleInput" for="change_pass_old">Old password:</label>
							<input class="form-control mx-1" type="password" name="change_pass_old" id="change_pass_old" required>
						</div>
						
						<div class="form-group  mb-2 mx-sm-3 col-xs-4">
						<label class="formGroupExampleInput" for="change_pass_new">New password:</label>
							<input class="form-control mx-1" type="password" name="change_pass_new" id="change_pass_new" required>
						</div>
						
						<button type="submit" class="btn btn-warning mb-2 mx-2">Change password</button>
					<?php echo Form::close(); ?>
					
				</div>

<div class="container">
<h1 style="text-align: center; font-variant: small-caps; color: #df5000;">My orders</h1>
<?php if($key ?? ''){
                
                echo '<table class="table" >
<thead class="thead-dark">
    <tr>
      <th scope="col">Status</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
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
                      echo "<td>";
                      echo '<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>';
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
                if($key2 ?? ''){
                    echo '<table class="table" >
<thead class="thead-dark">
    <tr>
      <th scope="col">Status</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Pcs.</th>
      <th scope="col">Product</th>
      <th scope="col">Comment</th>
      <th scope="col">Datums</th>
    </tr>
  </thead>
  <tbody>';
                    
                foreach ($key2 ?? '' as $v1) {
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
                      echo "<td>";
                      echo '<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
</svg>';
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
                }}
                ?><tbody></table></div>
                
       </div>         

@endsection
