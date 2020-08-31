@extends('layouts.main')

@section('content')
<div class="good_content" style="color:black;"> <p class="text-decoration-none h3">{{$goods->total()}}<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-flower3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.424 8c.437-.052.811-.136 1.04-.268a2 2 0 0 0-2-3.464c-.229.132-.489.414-.752.767C9.886 4.63 10 4.264 10 4a2 2 0 1 0-4 0c0 .264.114.63.288 1.035-.263-.353-.523-.635-.752-.767a2 2 0 0 0-2 3.464c.229.132.603.216 1.04.268-.437.052-.811.136-1.04.268a2 2 0 1 0 2 3.464c.229-.132.489-.414.752-.767C6.114 11.37 6 11.736 6 12a2 2 0 1 0 4 0c0-.264-.114-.63-.288-1.035.263.353.523.635.752.767a2 2 0 1 0 2-3.464c-.229-.132-.603-.216-1.04-.268zM9 4a1 1 0 0 0-2 0 1.473 1.473 0 0 0 .045.206c.039.131.1.294.183.483.166.378.396.808.637 1.223l.135.23.135-.23c.241-.415.47-.845.637-1.223.083-.19.144-.352.183-.484.02-.065.031-.116.038-.154C9 4.018 9 4.002 9 4zM3.67 5.5a1 1 0 0 0 .366 1.366 1.47 1.47 0 0 0 .2.064c.134.032.305.06.51.083.411.045.898.061 1.379.06.09 0 .178 0 .266-.002a21.82 21.82 0 0 0-.131-.232 12.88 12.88 0 0 0-.742-1.163 4.215 4.215 0 0 0-.327-.4 1.472 1.472 0 0 0-.115-.11c-.025-.022-.038-.03-.04-.032A1 1 0 0 0 3.67 5.5zm1.366 5.366a1 1 0 0 1-1-1.732c.001 0 .016-.008.047-.02.037-.013.087-.028.153-.044.134-.032.305-.06.51-.083a12.88 12.88 0 0 1 1.379-.06c.09 0 .178 0 .266.002a21.82 21.82 0 0 1-.131.232c-.24.416-.497.83-.742 1.163a4.1 4.1 0 0 1-.327.4 1.483 1.483 0 0 1-.155.142zM9 12a1 1 0 0 1-2 0 1.476 1.476 0 0 1 .045-.206c.039-.131.1-.294.183-.483.166-.378.396-.808.637-1.223L8 9.858l.135.23c.241.415.47.845.637 1.223.083.19.144.352.183.484A1.338 1.338 0 0 1 9 12zm3.33-6.5a1 1 0 0 1-.366 1.366 1.478 1.478 0 0 1-.2.064c-.134.032-.305.06-.51.083-.412.045-.898.061-1.379.06-.09 0-.178 0-.266-.002l.131-.232c.24-.416.497-.83.742-1.163a4.1 4.1 0 0 1 .327-.4c.046-.05.085-.086.114-.11.026-.022.04-.03.041-.032a1 1 0 0 1 1.366.366zm-1.366 5.366a1 1 0 0 0 1-1.732c-.002 0-.016-.008-.047-.02a1.478 1.478 0 0 0-.153-.044 4.217 4.217 0 0 0-.51-.083 12.881 12.881 0 0 0-1.379-.06c-.09 0-.178 0-.266.002a22 22 0 0 0 .131.232c.24.416.497.83.742 1.163.122.167.232.3.327.4a1.494 1.494 0 0 0 .155.142zM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
</svg>
        </p></div>
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
$go = $good->count;
if($go == 0) $go= "Šī prece nav pieejama!";


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

