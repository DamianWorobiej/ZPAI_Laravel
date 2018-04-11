<html lang="{{ app()->getLocale() }}">
<head>
  <title>Kategorie</title>
  @extends('layouts.layout')
</head>
<body>
@section('content')
<div class="container">
<?php
$products = DB::table('produkty')->where('kategoria_id',$id)->get();
?>
@foreach ($products as $product)
<div class="page-header">
<h3>{{$product->nazwa}}</h3>
</div>
<p>{{$product->opis}}</p>
<a class="example-image-link" href="{{ url($product->img) }} " data-lightbox="set" data-title="{{ $product->img_opis }}"><img class="example-image" src="{{ url($product->img_thumb) }}" alt="image-1" /></a>@endforeach
<?php
foreach ($products as $product)
{
	$img = asset($product->img);
	$img_thumb = asset($product->img_thumb);
	$img_opis = $product->img_opis;
	echo '<div class="page-header">'.PHP_EOL;
	echo '<h3>'.$product->nazwa.'</h3>';
	echo '</div>'.PHP_EOL;
	
	echo '<p>' . $product->opis . '</p>' . PHP_EOL;
	?><a class="example-image-link" href="{{ url(<?php echo $img; ?>) }} " data-lightbox="set" data-title=" <?php echo $img_opis; ?>"><img class="example-image" src="<?php echo $img_thumb; ?>" alt="image-1" /></a>;
<?php
}

?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

          <div class="item active">
              <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>

          <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header 2</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>

          <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header 3</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

  </div>
  
 <!--<script src="../lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>-->
</div>
@endsection
</body>
</html>