@extends('layouts.main')

@section('content')
	    <?php
        $summ = 0;
        
        ?>
<h1 style="text-align:center;">Cart</h1>
	   @foreach($cart as $cart)   
           
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
               
               
           </style>
	
		<div class="good_content">
                    
                    <p>
					
                        <a href="/goods/{{$cart->Gid}}"><img class= "goods_image goods_border"src="/images/{{$cart->Gid}}.jpg" alt="Good image" ></a>
                    </p>
                    <div class="goods_pamatojums">
                        
                        <p style="font-variant: small-caps; text-align: center;"> <a class="cat_g" href="/goods/{{$cart->Gid}}"> {{$cart->Gname}} </a>
					<br>Cena: <span style="font-size: 140%; color: purple">{{$cart->Gprice}} €</span><span style="font-variant: normal">/gb.</span><br></p>
                    
                        <p>Daudzums: <span style="font-size: 140%; color: purple">{{$cart->Gamount}} gb.</span></p>
					
                        <?php
                        
                        $am = $cart->Gamount;
                        $pr = $cart->Gprice;
                        
                        $summ += $am*$pr;
                        
                        ?>
                    </div>
                </div>
	@endforeach
	
        <h2>Kopā: <span style="color:#9c1402"><?php
        echo $summ;
        
        ?></span>€</h2> 
        
    
           <form method="get" action="/action_cart">
    <button class="btn-success" type="submit">Continue</button>
</form>

        
        
@endsection