@extends('layouts.layout')

@section('content')

<p><a href="{{ action('CRUDController@create') }}"><button class="btn btn-primary btn-lg">Utwórz</button></a></p>
@foreach($products as $product)
<button class="accordion"><img src="{{ $product->img_thumb }}" height="70"/>  {{ $product->nazwa }}</button>
<div class="panel" width=2>
<!--<button class="btn btn-succes">Odczytaj</button>-->
<a href="{{ action('CRUDController@edit', ['id' => $product->id]) }}"><button class="btn btn-warning btn-block">Zaktualizuj</button></a>
<a href="{{ action('CRUDController@destroy', ['id' => $product->id]) }}"><button class="btn btn-danger btn-block">Usuń</button></a>

</div>
@endforeach
<script src="js/accordion.js"></script>
@endsection