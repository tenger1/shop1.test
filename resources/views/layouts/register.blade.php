
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>





  <div class="imgcontainer">
    <img class="rounded center" src="/images/A&A.jpg" alt="Avatar" class="avatar">
  <h2>@lang('main.Reg')<a href="/home" class=""> @lang('main.our_flowers_base')</a></h2>
  </div>
  <?php echo Form::open(array('url' => '/register_final/', 'class'=>'form', 'id'=>'regform')); ?>

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
    <div class="container">
    <p>Name<span style="font-size: 150%; color: #f44336">*</span>:</p><input type="text" name="reguname" id="reguname" class="form-control" />
  </div>
  <div class="container">
      <p>Username<span style="font-size: 150%; color: #f44336">*</span>:</p><input type="text" name="regulogin" id="regulogin" class="form-control" />
  </div>
  <div class="container">
      <p>Password<span style="font-size: 150%; color: #f44336">*</span>:</p><input type="password" name="regupsw" id="regupsw" class="form-control" />
  </div>
  
    <div class="container form-group col-md-2">
        <label for="regurole">@lang('main.Kurš')</label>
<select class="form-control" id="regurole" name="regurole" form="regform">
  <option value="user">User</option>
  <option value="admin">Admin</option>
</select>
        <button type="submit" class="btn btn-success ">@lang('main.Reg')</button>
        
    </div>
    
<?php echo Form::close(); ?>
 <div class="container ">
     <a href="/home" class="btn btn-warning col-md-2">@lang('main.Atp')</a>
 </div>
  <div class="container-md">
      <p style="padding-left: 20px;"><span style="font-size: 150%; color: #f44336">*</span> - @lang('main.obl')</p> 

  </div>

</html>
