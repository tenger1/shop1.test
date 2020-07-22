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
                       $go= "-";
                       $formdisplay = "display:none;";
                       echo $formdisplay;
                   }
                   ?>}

    
</style>


<div class="cat_p">
    <div><img class= "product_image product_border" src="/images/{{$good->id}}.jpg" alt="Good image"></div>
    
                   <p> @lang('main.nos'): <span class="nosaukums">{{$good->name}}</span> </p>
                   <p> @lang('main.Krāsa'): <span class="krasa">{{$good->color}}</span> </p>
                   <p> @lang('main.Valsts'): <span class="valsts">{{$good->country}}</span> </p>
                   <p> @lang('main.Apraksts'): <span class="apraksts">{{$good->description}}</span> </p>
                   <p> @lang('main.Cena'): <span class="cena" style="color:purple">{{$good->price}}€</span>/gb. </p> 
                   <p> Produkta kods (ID): {{$good->id}} </p>
                   
                   <?php
                   $go = $good->count;
                   if($go == 0){ 
                       $go= "-";
                       //$formdisplay = "none";
                   }
                   else $formdisplay = 'block';
                   $gcount = $good->count;
                   ?>
                    <p> @lang('main.prece'): <span class="cena" style="color:#cc6666">{{$go}}</span></p>
                    
                    <?php if(!isset($_COOKIE['userrole'])):?>
                    <?php elseif ($_COOKIE['userrole'] == 'admin'): ?> 
                    
                        <form class="form-inline" action="/change/" method="get">
                            <div class="form-group mb-2">
                            <input class="form-group col-md-4 form-control" placeholder="Daudzums" type="number" name="change" id="change" class="form-control" min="0" required/>
                            <input style="display:none" type="radio" id="good_id" name="good_id" value="{{$good->id}}" checked>
                            <input class="btn btn-warning  ml-3" type="submit" value="Mainīt daudzumu" />
                            </div>
                            
                        </form>
                     <div class="container">
                               
                        <form action="/delete_by_id/" method="get" style="margin-left: 20px;">
                            <input style="display: none;" type="radio" name="del_id" id="del_id" value="{{$good->id}}" checked>
        
                            <button style="margin:20px;" type="submit" class="btn btn-danger">Dzēst ziedu</button>
  
                        </form>
                        </div>
                        
                     <?php endif; ?>
                <form class="form-inline formorder" action="/add_action/"> 
                    <div class="form-group mb-2">
                        <label for="daudzums" style="color: #9c1402; font-size: 150%;">@lang('main.cd')</label>
                        <input type="number" class="form-control ml-3" name="daudzums" id="daudzums" placeholder="@lang('main.cd')?" min="1" max="{{$go}}" required/><br>
                    <input style="display:none" type="radio" id="good_id" name="good_id" value="{{$good->id}}" checked>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mx-auto"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg></button>
		</form>
                     
                     <div class="table">
                     <table class="table">
                         <h2 style="font-variant: small-caps;">@lang('main.in_your_cart'):</h2>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">@lang('main.nos')</th>
      <th scope="col">@lang('main.Cena'), €</th>
      <th scope="col">@lang('main.Daudz')</th>
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