<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

  
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  
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
  
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <title>{{ $title or 'ZPAI' }}</title>
	</head>
        
        
        <!--"navbar navbar-inverse"-->
	<nav class="navbar navbar-expand-md navbar-inverse navbar-laravel">
            <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" >ZPAI Lab</a>
    </div>
	
	 <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav">
        <li class="navbar-text"><a href="<?php echo route('logged_home');?>">Strona Główna</a></li>
        <li class="navbar-text dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie <span class="caret"></span></a>
		  <ul class="dropdown-menu">
		  
		  <?php $categories = DB::table('categories')->orderBy('nazwa')->get(); ?>
		  @foreach($categories as $category)
			<ul>			
			<li><a href=" {{ route('items',$category->id) }}">{{ $category->nazwa }}</a></li>
			</ul>
		  @endforeach
		  
		  </ul>
        </li>
		
		 <li class="navbar-text"><a href="<?php echo route('contact');?>">Kontakt</a></li>
      
<?php if (Auth::check())
{?>
             <li class="navbar-text"><a href="<?php echo route('crud.index');?>">CRUD</a></li>
         </ul>
                 <!--"nav navbar-nav navbar-right"-->
		<ul class="navbar-nav navbar-right">           
            <li class="navbar-text dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>&nbsp; Witaj <?php echo Auth::user()->name;?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Wyloguj</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
              </ul>
            </li>
          </ul>
<?php } else {?>
                 </ul>
                 <ul class="navbar-nav navbar-right">
                 <li class="navbar-text"><a class="nav-link" href="<?php echo route('login');?>" >Zaloguj się</a></li>  
                 <li class="navbar-text"><a href="<?php echo route('register');?>" >Zarejestruj się</a></li>  
                 </ul>
<?php }?>
                
    </div>
            </div> <!--kwestionowalne-->
	</nav>
        
</html>
