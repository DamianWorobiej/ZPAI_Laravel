@extends('layouts.layout')

@section('content')
							
<?php
$products = DB::table('produkty')->where('kategoria_id',1)->get();

?>

@foreach($products as $product)
<div class="row-4">
<h3>{{ $product->nazwa }}</h3>
<p>{{ $product->opis }}</p>
<a href="{{ $product->img }}" data-toggle="lightbox" data-footer="{{ $product->img_opis }}" data-gallery="gallery" class="row-4">
	<img src="{{ $product->img_thumb }}" class="img-fluid">
</a>
</div>
@endforeach




@endsection