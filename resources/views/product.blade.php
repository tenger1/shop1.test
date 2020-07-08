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

 
    .formorder{display:<?php $go = $good->count;
                        if($go == 0){ 
                       $go= "Šī prece nav pieiejama!";
                       //$formdisplay = "none";
                   }
                   else $formdisplay = 'block';
                   echo $formdisplay;
                   
                   ?>;}

    
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
                    <div style="border: 3px solid white;"><p>Mainīt uz: </p>
                        <form action="/change/" method="get">
                        <input class="form-group col-md-4" type="number" name="change" id="change" class="form-control" />
                        <button class="btn btn-warning" type="submit">Change</button>
                        </form>
                    </div>
                     <?php setcookie('id', $good->id, time() + 3600, "/");
                     else: ?> <p></p>
                     <?php endif; ?>
                <form class="formorder" action="/order/{{$good->id}}">
                    <input type="submit" value="Pasūtīt" class="btn btn-success"/>
		</form>
</div>
	
@endsection