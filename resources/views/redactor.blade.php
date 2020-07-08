@extends('layouts.main')

@section('content')  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<h1 style="text-align: center; font-variant: small-caps;">Redactor</h1>
<h2 style="margin-left: 40px; color: #df5000; font-variant: small-caps;">Pievienot ziedu:</h2>
<form action="/add_final/" method="get" style="margin-left: 30px;">
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
    
    <div class="form-row">
  <div class="form-group col-md-4">
    <lable>Cena:</lable><input type=number step=0.01 name="price" id="price" class="form-control " />
  </div>
  <div class="form-group col-md-4">
    <lable>Kategorijas Numurs:</lable><input type="number" name="category_id" id="category_id" class="form-control " />
  </div>
  <div class="form-group col-md-4">
    <lable>Daudzums:</lable><input type="number" name="count" id="count" class="form-control" />
  </div>
    </div>
    
    <button style="margin:20px;" type="submit" class="btn btn-warning">Add</button>
 
</form>
  <div class="container ">

<h2 style="margin-left: 30px; color: #df5000; font-variant: small-caps;">Dzēst ziedu pēc ID:</h2>
<form action="/delete_by_id/" method="get" style="margin-left: 20px;">
<div class="container">
    <lable for="del_id">Zieda ID:</lable><input type="number" name="del_id" id="del_id" class="form-control col-md-2" />
  </div>
        
    <button style="margin:20px;" type="submit" class="btn btn-warning">Delete</button>
  
</form>
</div>


@endsection