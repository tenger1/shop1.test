<!doctype html>
<html lang="lv">
  <head id="up">
    <meta charset="utf-8">
    <title>Mūsu ziedu veikals</title>
    <link rel="shortcut icon" href="/images/A&A.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/search.js"></script>
    
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>


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
  <a class="navbar-brand" href="/">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
    <ul class="navbar-nav mr-auto">
      
      
          <a class="nav-link bg-success btn" href="/categories/11" style="text-align: center;"><strong style="font-variant:small-caps;">autor-ziedi</strong></a>
         <a class="nav-link bg-danger btn" href="/login" style="text-align: center;"><strong style="font-variant:small-caps;">Login</strong></a>
          <a class="nav-link bg-danger btn" href="/register" style="text-align: center;"><strong style="font-variant:small-caps;">Register</strong></a>
        <a class="nav-link bg-warning btn" href="/cart2" style="text-align: center;"><strong style="font-variant:small-caps;">Grozs</strong></a>
        <a class="nav-link bg-warning btn" href="/home" style="text-align: center;"><strong style="font-variant:small-caps;">LV</strong></a>
        <a class="nav-link bg-warning btn" href="/home_eng" style="text-align: center;"><strong style="font-variant:small-caps;">ENG</strong></a>
    </ul>
      
      <div>
          <a class="nav-link bg-warning btn" href="/cart2/" title="To Cart">To Cart</a>
          <span id="cartCtnItems">
              
          </span>
      </div>
        <?php 
        if(isset($_COOKIE['user'])):
        ?>
        <div style="padding-left: 10px; padding-right: 5px; margin-top: 10px;">
            
            <p class="text-center">Hello, <?=$_COOKIE['user']?>! </p> 
        
        </div>
        <div style="padding-top: 5px;">
            <ul class="navbar-nav mr-auto">
        <a class="btn btn-outline-danger" href="/redactor" style="text-align: center;"><strong style="font-variant:small-caps;">Redactor</strong></a>
        <a class="btn btn-outline-danger" href="/exit">EXIT</a>
            </ul>
        </div>
        <?php else: ?>
        
        <div style="padding-left: 10px; padding-right: 5px; margin-top: 10px;">
            
        <h5 class="text-center">Hello, Guest</h5>
        
        </div>
        <?php endif; ?>
   
        <form name="idform" class="form-inline mt-2 mt-md-0" style=" position: relative; left:10px;">
            
            <input type="text" id="search" placeholder="Prece..." class="form-control bg-light border-0" small name="id">
    
    <input type="button" id="GFG_Button" class="btn btn-primary" value="Meklēt" onclick="location.href='/search/'+escape(document.forms['idform'].elements['id'].value)">
    
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
       
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
	
	<div class="row">
	
		
		
            <div class="col-md-9">
			
                        <span style="left: 20px; top:20px; position: relative;">
                        <h1 style="text-align:center;" class="title">“A & A” Flowers shop</h1>
                        <img class="rounded center" src="/images/A&A.jpg" alt="Logo">
                        <p class="font-weight-normal">Our shop “A & A” was created in 2020. year. 
                            <br> Its founders are professionals, florists <strong> Arthur </strong> and <strong> Artem. </strong> <br>
                            Having educated in the best universities in the world, they have decided to please the surrounding people with the beauty of flowers.
                            <br> <mark> <strong> We are a florist and ready to take your orders 24/7! </strong> </mark> <br> Every week we deliver goods from all over the world with the best flowers. Only with us you can buy the most beautiful, aromatic, long-lasting flowers that will melt any heart and delight your eyes for more than a week. <br> Place an order online or go to our store at 19 Raina Boulevard. <br> We offer our bouquets, sell them in pieces, and place orders according to your wishes. </p>
                        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">price, €</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Bow</td>
      <td>0.70</td>
    </tr>
       <tr>
      <td>Greeting card</td>
      <td>1.60</td>
    </tr>
     <tr>
      <td>Packaging</td>
      <td>2.10</td>
    </tr>
     <tr>
      <td class="table-danger">Receiving in store</td>
      <td class="table-danger">0.00</td>
    </tr>
     <tr>
      <td>Delivery In Riga</td>
      <td>3.99</td>
    </tr>
     <tr>
      <td>Delivery outside Riga</td>
      <td>5.99</td>
    </tr>
     <tr>
      <td>Off-duty delivery</td>
      <td>8.99</td>
    </tr>
      <tr>
          <td>Discount with customer card<sup>*</sup></td>
      <td class="bg-danger">10%</td>
    </tr>
 
  </tbody>
  
</table>
                       <p class="font-weight-light" style="font-size: 70%;"><sup>*</sup> Discount did not return to additional services</p>
                        
                        </span>
                  
                          
            </div>
		
   </div>
</div>
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  
      
    <a href="#" class="btn btn-warning topNubex" style="z-index: 10;">Up</a>
  </body>
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Where are we?</h5>
        
        <iframe class='mape' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1256.9589487022274!2d24.11603977696689!3d56.95071908093513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd3cdaa69c7%3A0x16a2b44d483ec349!2sUniversity%20of%20Latvia!5e0!3m2!1sru!2slv!4v1589490516939!5m2!1sru!2slv" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Grid column -->

      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
   

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weight-bold text-uppercase mb-4">How to contact?</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>Raina Boulevard 19, Centre District, Riga, LV-1586</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> <a href="mailto:ar19111@students.lu.lv">ar19111@students.lu.lv</a></p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>


      <hr class="clearfix w-100 d-md-none">


      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">


        <h5 class="font-weight-bold text-uppercase mb-4">To follow the message</h5>
        
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
    Artur Reishonok (ar19111)
    Artjoms Nazarovs (an19026)
  </div>


</footer>
</html>