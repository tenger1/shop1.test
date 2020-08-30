<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<br><h2>@lang('main.in')</h2>
  </div>
 <?php echo Form::open(array('url' => '/login_final/', 'class'=>'form')); ?>

@if(session()->has('message-error'))
    <div class="alert alert-danger">
        {{ session()->get('message-error') }}
    </div>
@endif 
  <div class="container">
      <p>Username:</p><input type="text" name="ulogin" id="ulogin" class="form-control" required/>
  </div>
  <div class="container">
    <p>Password:</p><input type="password" name="upsw" id="upsw" class="form-control" required/>
  </div>
       
    <button type="submit">@lang('main.ieiet')</button>
  </div>

<?php echo Form::close(); ?>

<div>
<form method="get" action="/home">
    <button type="submit" class="cancelbtn">@lang('main.Atp')</button>
    </form>
</div>
</html>
