@extends('layouts.main')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <?php
        $summ = 0;
        
        ?>
<h1 style="text-align:center;">Cart</h1>
	    
          <style>
               .cat_g{
                   font-size: 25px;
                   
                   color: #c93200;
                   font-variant: small-caps;
                   transition: 0.4s;
                   padding: 10px;
               }
               .cat_g:hover{
                   text-decoration: none;
                   color: #520a01;
               }
               .goods_image{
                   width: 250px;
               }
               .goods_border{
                  border: 5px solid;
                  border-image-source: linear-gradient(45deg, #80029c, #9c1402);
                  border-image-slice: 1;
                  
               }
               .good_content{
                   margin-top: 90px;
                   margin-bottom: 90px;
                   top:30px;
                   left: 20px;
                   position: relative;
                   width: 350px;
                  //border-bottom: 3px solid red;
               }
               .goods_pamatojums{
                   position: relative;
                   
                   top: 0px;
                   right: 0;
                   width: 340px;
                   height: 150px;
                  // border: 3px solid #73AD21;
               }
               table, th, td {
                   border: 3px solid black;
               }
               
           </style>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
		<div class="table">
                    
                    <table class="table ml-4">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
                     <?php  foreach ($_SESSION as $v1) {
                         echo "<tr>";
                    foreach ($v1 as $v2) {
                      echo "<td>$v2</td>";
                     }
                     echo "</tr>";
                     }  ?>
                     </table>
                    <p class="text-right">Jusu pasūtījuma summa ir: <span class="text-uppercase" style="color: #c93200; font-size: 150%;"><?php 
$prices = array_column($_SESSION, 'price');
$counts = array_column($_SESSION, 'count');

$summ = 0;
for($i = 0; $i < count($prices); ++$i) {
  $summ += $prices[$i]*$counts[$i];
}

echo $summ;?>€</span></p>
                    
                </div>
        
    
           
           <form class="form-inline ml-3" method="get" action="/uncart">
               <div class="form-group mx-sm-3 mb-3">
                    <label for="id_to_delete">Input ID to delete:</label>
                    <select class="form-control ml-3" type="number" name="id_to_delete" id="id_to_delete">
                     <?php
                        $prices = array_column($_SESSION, 'id');
                        print_r($prices);
                        for($i = 0; $i < count($prices); ++$i) {
                        echo'<option value="'.$prices[$i].'">'.$prices[$i].'</option>';
                        }
                        ?>       
                    </select>
               </div>
               
    <button class="btn btn-warning mb-3" type="submit">Delete ID</button>  
</form>
           <div class="form-row">
           <form action="/delete_all_cart" method="get">
    <input class="btn-lg btn-danger ml-4" type="submit" value="Delete all cart" />
           </form>
</div>
           <form class="ml-3 mt-3" action="/cart_continue">
               
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
    </div>
    
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="adress" placeholder="Raiņa bulvāris 19">
  </div>

    <div class="form-group col-md-6">
      <label for="Phone">Phone</label>
      <input type="tel" class="form-control" id="Phone" name="phone" placeholder="Your phone" required>
    </div>
    <div class="form-group col-md-6">
    <label for="Textarea">Info</label>
    <textarea class="form-control" id="Textarea" name="info" rows="5" placeholder="Extra info"></textarea>
  </div>
               
    

               <div class="form-group col-md-6">
               <label for="datums">Datums un laiks saņemšanai:</label>
  <input class="form-control" type="datetime-local" id="datums" name="datums">
               </div>

    <input class="btn-lg btn-danger mt-3" type="submit" value="ORDERSUKA!" />
</form>
          

    
        
@endsection