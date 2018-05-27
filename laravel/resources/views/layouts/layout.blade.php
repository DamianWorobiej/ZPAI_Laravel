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

		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

  
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  
  
  
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <title>{{ $title }}</title>
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
		  
		  <?php $categories = DB::table('kategorie')->orderBy('nazwa')->get(); ?>
		  @foreach($categories as $category)
			<ul>			
			<li><a href=" {{ route('items',$category->id) }}">{{ $category->nazwa }}</a></li>
			</ul>
		  @endforeach
		  
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
		 
		 <!--<footer>-->
		 @include('layouts.footer')
		 <!--</footer>-->
		 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script type="text/javascript">
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
     </body>
 </html>