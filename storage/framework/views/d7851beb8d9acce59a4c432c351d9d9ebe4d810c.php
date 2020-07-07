<!DOCTYPE html>
<html>
<head>
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
@media  screen and (max-width: 300px) {
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


<h2>Login in Shop</h2>

<form action="/login_final/" method="get">
  <div class="imgcontainer">
    <img class="rounded center" src="/images/A&A.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <p>Username:</p><input type="text" name="uname" class="form-control" />
  </div>
  <div class="container">
    <p>Password:</p><input type="password" name="upsw" class="form-control" />
  </div>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    

  </div>
</form>

<div>
<form method="get" action="/home">
    <button type="submit" class="cancelbtn">Cancel</button>
    </form>
</div>
</html>
<?php /**PATH C:\wamp64\www\shop_git_1\resources\views/layouts/login.blade.php ENDPATH**/ ?>