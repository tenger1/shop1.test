
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


<h2>Register in <a href="/home" class="">Shop</a></h2>


  <div class="imgcontainer">
    <img class="rounded center" src="/images/A&A.jpg" alt="Avatar" class="avatar">
  </div>
<form action="/register_final/" method="get">
    <div class="container">
    <p>Name <sup style="font-size: 150%; color: #f44336">*</sup>:</p><input type="text" name="reguname" id="reguname" class="form-control" />
  </div>
  <div class="container">
      <p>Username <sup style="font-size: 150%; color: #f44336">*</sup>:</p><input type="text" name="regulogin" id="regulogin" class="form-control" />
  </div>
  <div class="container">
      <p>Password <sup style="font-size: 150%; color: #f44336">*</sup>:</p><input type="password" name="regupsw" id="regupsw" class="form-control" />
  </div>
  <div class="container">
    <p>Role:</p><input type="text" name="regurole" id="regurole" class="form-control" />
  </div>
    
    
    <button type="submit" class="btn btn-success">Register</button>
   
  </div>
  
  <div class="container-md" style="background-color:#f1f1f1">
      <p style="padding-left: 20px;"><sup style="font-size: 150%; color: #f44336">*</sup> - Obligātie lauķi</p> 

  </div>
</form>

<div>
<form method="get" action="/home">
    <button type="submit" class="cancelbtn">Cancel</button>
    </form>
</div>
</html>
