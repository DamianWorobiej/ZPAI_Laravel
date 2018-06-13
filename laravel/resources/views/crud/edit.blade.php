@extends('layouts.layout')
<?php use App\Product; ?>
@section('content')
<h1>EDIT</h1>
<?php foreach($products as $placeholder){
            $product = new Product;
            $product = $placeholder;
        }?>
<h1>{{ $product->nazwa }}</h1>

<form action="{{route('crud.edit', $products)}}" method="put">
    
</form>
@endsection

