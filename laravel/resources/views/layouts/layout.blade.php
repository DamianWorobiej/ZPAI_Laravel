<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>

  <style type="text/css">

    .lightbox{

      z-index: 1041;

    }

    .small-img{

      width: 100px;height: 100px;

    }

  </style>-->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--Parallax scrolling-->
  <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700&v2' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Jacques+Francois' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
  

  <!--Parallax scrolling-->
  
  <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
  
  
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.footer {
				position:absolute;
				bottom:0;
				width:100%;
				height:60px;   
				background:#6cf;
			}
			
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 80%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
	margin: 0 50 20;
	
}

.active, .accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
	transition: max-height 0.2s ease-out;
}

.accordion:after {
    content: '\02795'; 
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2796"; 
}

.items {
	height:250px;
	background-color:grey;
	color: white;
	font-size: 20px;
}

.parallax {
    /* The image used */
    

    /* Set a specific height */
    height: 20%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        </style>
	</head>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" >ZPAI Lab</a>
    </div>
	
	 <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo route('logged_home');?>">Strona Główna</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie <span class="caret"></span></a>
		  <ul class="dropdown-menu">
		  
		  <?php
			$categories = DB::table('kategorie')->orderBy('nazwa')->get();
				echo "<ul>" . PHP_EOL;
			foreach ($categories as $category)
			{
				echo '<li><a href="'. route('items',$category->id).'">'.$category->nazwa.'</a></li>';//'<li><a href="' . 'kategorie.php' . '?kat_id=' . $kategoria['id'] . '">' . $kategoria['nazwa'] . '</a></li>' . PHP_EOL;

			}
				echo "</ul>" . PHP_EOL;
		  ?>
		  
		  </ul>
        </li>
		<li><a href="<?php echo route('crud');?>">CRUD</a></li>
		 <li><a href="<?php echo route('contact');?>">Kontakt</a></li>

		<ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp;Witaj <?php/* echo $userRow['login'];*/ ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Wyloguj</a></li>
              </ul>
            </li>
          </ul>
    </div>
  </div>
	
	</nav>
	
     <body>
         <!--<h1>to z pliku wyglad1</h1>-->
         
         @yield('content')
		 <!--treść z layoutu-->
		 
		 <footer class="row">
		 @include('layouts.footer')
		 </footer>
		 
		   <script src="{{ asset('skrollr/dist/skrollr.min.js') }}"></script>
		   <script>
		   skrollr.init();
		   </script>
		   <script src="https://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>
		 <script src="js/accordion.js"></script>
		 <script type="text/javascipt" src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
     </body>
 </html>