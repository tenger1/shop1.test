@extends('layouts.main')

@section('content')
	   @foreach($good as $good)   
           
           <style>
                           .cat_g{
                   font-size: 25px;
                   margin-left: 50px;
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
                   left: 20px;
                   position: relative;
                   //border: 3px solid #73AD21;
               }
               .goods_pamatojums{
                   position: absolute;
                   
                   top: 0px;
                   right: 0;
                   width: 500px;
                   height: 270px;
                   //border: 3px solid #73AD21;
               }
           </style>
                      <?php
$go = $good->count;
if($go == 0) $go= "Šī prece nav pieejama!";


?>
		<div class="good_content">
                    <p>
					
                    <img class= "goods_image goods_border"src="/images/{{$good->id}}.jpg" alt="Good image" href="/goods/{{$good->id}}">
                    </p>
                    <div class="goods_pamatojums">
                        
                        
          
                    <p style="font-variant: small-caps"> <a class="cat_g" href="/goods/{{$good->id}}"> {{$good->name}} </a>
					<br>Cena: <span style="font-size: 140%; color: purple">{{$good->price}}€</span><span style="font-variant: normal">/gb.</span></p>
                    <p>Ražotājs: {{$good->country}}
                    <p> Piejamība gb.: <span class="cena" style="color:#cc6666">{{$go}}</span></p>
                       
                    </p>
                                        
                     </div>
                </div>
	@endforeach
	
@endsection

