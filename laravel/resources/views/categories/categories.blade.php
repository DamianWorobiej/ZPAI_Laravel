@extends('layouts.layout')
<head>
	
</head>

@section('content')
<?php
$products = DB::table('products')->where('kategoria_id',$id)->get();
$categories = DB::table('categories')->where('id',$id)->get();
?>

@foreach($categories as $category)
<div class="parallax" style="background-image:url({{ asset($category->parallax_img) }})"></div>
@endforeach
@foreach($products as $product)

<div class="row-4">
<h3>{{ $product->nazwa }}</h3>
<p>{{ $product->opis }}</p>
<a href="{{ asset($product->img) }}" data-toggle="lightbox" data-footer="{{ $product->img_opis }}" data-gallery="gallery" class="row-4">
	<img src="{{ asset($product->img_thumb) }}" class="img-fluid">
</a>
</div>

@endforeach
@endsection