  @extends('layouts.layout')
<head>
  <title>Kategorie</title>
</head>
@section('content')

  <?php
$products = DB::table('produkty')->where('kategoria_id',$id)->get();
?>
@foreach($products as $product)
<div class="parallax" style="background-image:url({{ $product->img }})"></div>

<div class="items" >
<h3>{{$product->nazwa}}</h3>
<p>{{$product->opis}}</p>
<a class="example-image-link" href="{{ url($product->img) }} " data-lightbox="set" data-title="{{ $product->img_opis }}"><img class="example-image" src="{{ url($product->img_thumb) }}" alt="image-1" /></a>
</div>
@endforeach

@endsection
