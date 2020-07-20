@extends('layouts.main')

@section('content')  

<?php $formdisplay ='none'; ?>
<style>
    .cat_p{
        margin-left: 50px;
        margin-top:30px;
    }
    .product_image{
        width: 300px;
        
    }
    .product_border{
        border: 10px solid;
        border-image-source: linear-gradient(45deg, #80029c, #9c1402);
        border-image-slice: 1;
}

 
    .formorder{<?php $go = $good->count;
                        if($go == 0){ 
                       $go= "Šī prece nav pieiejama!";
                       $formdisplay = "display:none;";
                       echo $formdisplay;
                   }
                   ?>}

    
</style>


<div class="cat_p">
    <div><img class= "product_image product_border" src="/images/{{$good->id}}.jpg" alt="Good image"></div>
    
                   <p> Nosaukums: <span class="nosaukums">{{$good->name}}</span> </p>
                   <p> Krāsa: <span class="krasa">{{$good->color}}</span> </p>
                   <p> Valsts: <span class="valsts">{{$good->country}}</span> </p>
                   <p> Apraksts: <span class="apraksts">{{$good->description}}</span> </p>
                   <p> Cena: <span class="cena" style="color:purple">{{$good->price}}€</span>/gb. </p> 
                   <p> Produkta kods (ID): {{$good->id}} </p>
                   
                   <?php
                   $go = $good->count;
                   if($go == 0){ 
                       $go= "Šī prece nav pieiejama!";
                       //$formdisplay = "none";
                   }
                   else $formdisplay = 'block';
                   $gcount = $good->count;
                   ?>
                    <p> Piejamība gb.: <span class="cena" style="color:#cc6666">{{$go}}</span></p>
                    
                    <?php if(!isset($_COOKIE['userrole'])):?>
                    <?php elseif ($_COOKIE['userrole'] == 'admin'): ?> 
                    
                        <form class="form-inline" action="/change/" method="get">
                            <div class="form-group mb-2">
                            <input class="form-group col-md-4 form-control" placeholder="Daudzums" type="number" name="change" id="change" class="form-control" min="0" required/>
                            <input style="display:none" type="radio" id="good_id" name="good_id" value="{{$good->id}}" checked>
                            <input class="btn btn-warning  ml-3" type="submit" value="Mainīt daudzumu" />
                            </div>
                            
                        </form>
                        
                     <?php endif; ?>
                <form class="form-inline formorder" action="/add_action/"> 
                    <div class="form-group mb-2">
                        <label for="daudzums" style="color: #9c1402; font-size: 150%;">Cik daudz?</label>
                        <input type="number" class="form-control ml-3" name="daudzums" id="daudzums" placeholder="Cik daudz?" min="1" max="{{$go}}" required/><br>
                    <input style="display:none" type="radio" id="good_id" name="good_id" value="{{$good->id}}" checked>
                    </div>
                    
                    <input  type="submit" class="btn btn-primary mb-2 ml-3" value="Grozā" />
		</form>
                     
                     <div class="table">
                     <table class="table">
                         <h2 style="font-variant: small-caps;">Jūsu grozā:</h2>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nosaukums</th>
      <th scope="col">Cena, €</th>
      <th scope="col">Daudzums</th>
    </tr>
  </thead>
  <tbody>
                     <?php  
                     foreach ($_SESSION as $v1) {
                         echo "<tr>";
                    foreach ($v1 as $v2) {
                      echo "<td>$v2</td>";
                     }
                     echo "</tr>";
                     }  ?>
                     </table>
                     </div>
                    
</div>
	
@endsection