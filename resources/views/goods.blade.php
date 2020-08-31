@extends('layouts.main')

@section('content')
<div class="good_content" style="color:black;"><h4>{{$goods->total()}} @lang('main.prece')</h4></div>
	   @foreach($goods as $good)   
           
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
                   margin-bottom: 50px;
                   margin-top: 30px;
                   left: 20px;
                   position: relative;
                   
                   //border: 3px solid red;
               }
               .goods_pamatojums{
                   position: relative;
                   
                   top: 0px;
                   right: 0;
                   
                   //border: 3px solid #73AD21;
               }
               
               
           </style>
           
           <?php
           header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
$go = $good->count;
if($go == 0) $go= "-";


?>
		    
		<div class="good_content">
                    <p>
					
                        <a href="/goods/{{$good->id}}"><img class= "goods_image goods_border"src="/images/{{$good->id}}.jpg"  alt="Good image" [B]nocache[/B]></a>
                    </p>
                    <div class="goods_pamatojums">
                        
                        
          
                    <p style="font-variant: small-caps; "> <a class="cat_g" href="/goods/{{$good->id}}"> {{$good->name}} </a>
					<br>@lang('main.Cena'): <span style="font-size: 140%; color: purple">{{number_format($good->price, 2, '.',' ')}} €</span><span style="font-variant: normal">/@lang('main.prece').</span></p>
                    <p>@lang('main.Valsts'): {{$good->country}}
                    <p> @lang('main.prece'): <span class="cena" style="color:#cc6666">{{$go}}</span></p>
                    
                    </div>
                </div>
	@endforeach
	<div class="good_content">{{$goods->links()}}</div>
	
@endsection