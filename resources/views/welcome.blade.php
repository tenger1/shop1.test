<!doctype html>
<html lang="lv">
  <head id="up">
    <meta charset="utf-8">
    <title>@lang('main.our_flowers_base')</title>
    <link rel="shortcut icon" href="/images/A&A.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/search.js"></script>

    <link rel="stylesheet" href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/google-translate.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
	<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
        
      .search{
    position:relative;
}
.search_result{
    background: #FFF;
    border: 1px #ccc solid;
    width: 100px;
    border-radius: 4px;
    max-height:100px;
    overflow-y:scroll;
    display:none;
}
.search_result li{
    list-style: none;
    padding: 5px 10px;
    margin: 0 0 0 -40px;
    color: #0896D3;
    border-bottom: 1px #ccc solid;
    cursor: pointer;
    transition:0.3s;
}
.search_result li:hover{
    background: #F9FF00;
}
        
      body {
  padding-top: 5rem;
  background-image: url('https://wallpaperaccess.com/full/1155011.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
      }
.starter-template {
	font-weight: bold;
	text-decoration: none;
	color: #3d424a;
	letter-spacing: 3px;
	padding: 3rem 1.5rem;
	text-align: left;
}

.col-md-3{
    position: relative;

    
    width: 350px;
    height: 550px;
    padding-top: 20px;
    padding-bottom: 20px;
    background-image: url('https://media.istockphoto.com/photos/old-paper-background-picture-id874552144?k=6&m=874552144&s=170667a&w=0&h=ENBsZmkgAie1Ug7tanGjFMg7mnfndgdqN0frHiDXcfk=');
    background-position: center;
    border-radius: 50% 50% 50% 50% / 25% 25% 25% 25% ;
    box-shadow: 20px 20px rgba(0,0,0,.25);
    transition: all .4s ease;
    text-align: center;
    font-size: 130%;
}
.col-md-3 a{
    transition: 0.4s;
    padding: 10px;
}
.col-md-3 a:hover{
    text-decoration: none;
    letter-spacing: 5px;
    color: #c93200;  
    border-radius: 0% 0% 50% 50% / 0% 0% 5% 5%
}

.col-md-9{
    
}
.nosaukums{
    font-variant: small-caps;
    font-size: 35px;
    color: black;
}
.krasa{
    font-size: 25px;
    color: black;
}
.valsts{
    font-variant: small-caps;
    color: black;
}
.apraksts{
    font-style: italic;
    color: black;
}
.cena{
    font-style: italic;
    color: black;
	font-size: 140%;
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

     
      .topNubex {
	position: fixed;
	right: 45px;
	bottom: 45px;
   }
   .btn btn-warning{
       
   }
   .mape{
       opacity: 0.8;
       border: 5px solid;
       border-image-source: linear-gradient(45deg, #80029c, #9c1402);
       border-image-slice: 1;
   }
   
   .mape:hover{
       opacity: 1;
   }
   .title{
       color:#491217;
       font-variant: small-caps;
       
       
   }
   
   .center{
       display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
   }
   
    </style>
    <!-- <link href="css/starter-template.css" rel="stylesheet"> -->
    
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light bg-teal-light fixed-top" style="background-color:#2492ad">
    <a class="navbar-brand" href="/home">@lang('main.home')</a>
  
<div class="dropdown">
  <button class="btn navbar-brand" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.018 7.5h2.49c.037-1.07.189-2.087.437-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5zM3.05 3.049c.362.184.763.349 1.198.49.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.473.257 2.282.287V1.077zm0 4.014c-.91-.03-1.783-.145-2.591-.332a12.344 12.344 0 0 0-.4 2.741H7.5V5.091zm1 2.409V5.091c.91-.03 1.783-.145 2.591-.332.223.827.364 1.754.4 2.741H8.5zm-1 1H4.51c.035.987.176 1.914.399 2.741A13.596 13.596 0 0 1 7.5 10.91V8.5zm1 2.409V8.5h2.99a12.343 12.343 0 0 1-.399 2.741A13.596 13.596 0 0 0 8.5 10.91zm-1 1c-.81.03-1.577.13-2.282.287.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91zm-2.173 2.563a6.695 6.695 0 0 1-.597-.933 8.857 8.857 0 0 1-.481-1.078 8.356 8.356 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.52zM2.38 12.175c.47-.258.995-.482 1.565-.667A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.964 6.964 0 0 0 1.362 3.675zm8.293 2.297a7.01 7.01 0 0 0 2.275-1.521 8.353 8.353 0 0 0-1.197-.49 8.859 8.859 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zm.11-2.276A12.63 12.63 0 0 0 8.5 11.91v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872zm1.272-.688c.57.185 1.095.409 1.565.667A6.964 6.964 0 0 0 14.982 8.5h-2.49a13.355 13.355 0 0 1-.437 3.008zm.437-4.008h2.49a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zm-.74-3.96a8.854 8.854 0 0 0-.482-1.079 6.692 6.692 0 0 0-.597-.933c.857.355 1.63.875 2.275 1.521a8.368 8.368 0 0 1-1.197.49zm-.97.264c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z"/>
</svg>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="btn" href="/locale/en">
  EN
</a>
  <a class="btn" href="/locale/lv">
  LV
</a>
  <a class="btn" href="/locale/de">
  DE
</a>
    <a class="btn" href="/locale/it">
  IT
</a>
  <a class="btn" href="/locale/es">
  ES
</a>
  </div>
</div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
    <ul class="navbar-nav mr-auto">
     
               
        <a class="nav-link bg-success btn mx-1 mb-2" href="/categories/11" style="text-align: center;"><strong style="font-variant:small-caps;">@lang('main.autor-ziedi')</strong></a>
         <a class="user nav-link bg-danger btn mx-1 mb-2" href="/login" style="text-align: center;"><strong style="font-variant:small-caps;">@lang('main.ieiet')</strong></a>
          <a class="user nav-link bg-danger btn mx-1 mb-2" href="/register" style="text-align: center;"><strong style="font-variant:small-caps;">@lang('main.Reg')</strong></a>

		<?php 
$prices2 = array_column($_SESSION, 'price');
$counts2 = array_column($_SESSION, 'count');

$summ2 = 0;
for($i = 0; $i < count($prices2); ++$i) {
  $summ2 += $prices2[$i]*$counts2[$i]; 
}?>
      
      
          <a class="nav-link bg-warning btn mb-2" href="/cart2/" title="Cart"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg><?php echo $summ2; ?> €</a>
          
        <?php 
        if(isset($_COOKIE['user'])):
        ?>
             
            <h5 class="text-center pt-2 mx-2 mb-2">@lang('main.Hello'), <?=$_COOKIE['user']?>! </h5> 
        
       <a class="btn btn-outline-danger mx-1 mb-2" href="/my_orders"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
  <path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
</svg></a>
        <a class="btn btn-outline-danger mx-1 mb-2" href="/exit"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z"/>
  <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z"/>
  <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z"/>
</svg></a>
        <a class="btn btn-outline-danger mb-2" href="/redactor" style="text-align: center;"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
  <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
</svg></a>
        
        
        <?php else: ?>
        
        
            
        <h5 class="text-center mx-3 mb-2">@lang('main.Hello'), @lang('main.viesis')</h5>
        
        
        <?php endif; ?>
        
        <form name="idform" class="form-inline mt-2 mt-md-0" style=" position: relative; left:10px;">
            
            <input type="text" id="search" placeholder="@lang('main.prece')..." class="form-control bg-light border-0 mb-2" small name="id">
    
    <input type="button" id="GFG_Button" class="btn btn-primary mx-1 mb-2" value="@lang('main.Search')" onclick="location.href='/search/'+escape(document.forms['idform'].elements['id'].value)">
    
        </form> 
          <script>  
        $("#search").keypress(function(event) { 
            if (event.keyCode === 13) { 
                $("#GFG_Button").click(); 
            } 
        }); 
   
        $("#GFG_Button").click(function() { 
            alert("Mēklēšana tiek izpilīta!"); 
        }); 
    </script>
     </ul>  
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
	
	<div class="row">
	
		<div class="col-md-3">
			@include('categories')
                        

		</div>
		
            <div class="col-md-9">
			@yield('content')
                        
            </div>
		
   </div>
</div>
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  
      
      <a href="#" class="btn btn-warning topNubex" style="z-index: 10;">@lang('main.up')</a>
  </body>
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">@lang('main.kur')</h5>
        
        <iframe class='mape' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1256.9589487022274!2d24.11603977696689!3d56.95071908093513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd3cdaa69c7%3A0x16a2b44d483ec349!2sUniversity%20of%20Latvia!5e0!3m2!1sru!2slv!4v1589490516939!5m2!1sru!2slv" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Grid column -->

      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
   

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weight-bold text-uppercase mb-4">@lang('main.sazin')</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>@lang('main.address')</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"><a href="mailto:ar19111@students.lu.lv"></i> <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a></p>
          </li>
          <li><p>
              <i class="fas fa-envelope mr-3">
            <a href="tel:123-456-7890"></i> <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
  </svg></a> </p>
          </li>
        </ul>

      </div>


      <hr class="clearfix w-100 d-md-none">


      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">


        <h5 class="font-weight-bold text-uppercase mb-4">@lang('main.sekot')</h5>
        <ol>
            <a href="http://instagram.com"><img src="/images/Insta.svg.png" width="82" height="86" title="Instagram" alt="Instagram"></a>
        </ol>
        <ol>
            <a href="http://facebook.com"><img src="/images/Facebook.svg.png" width="82" height="86" title="Facebook" alt="Facebook"></a>
        </ol>
       
      </div>     
    </div>
  </div>

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    Artūrs Reišonoks (ar19111)
    Artjoms Nazarovs (an19026)
  </div>


</footer>
</html>