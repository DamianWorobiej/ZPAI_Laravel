@extends('layouts.layout')

@section('content')
<?php
$products = DB::table('produkty')->get();
?>
<p><button>Utwórz</button></p>
@foreach($products as $product)
<p><img src="{{ $product->img_thumb }}" height="70"/></p>
<button class="accordion">{{ $product->nazwa }}</button>
<div class="panel">
<button>Odczytaj</button>
<button>Zaktualizuj</button>
<button>Usuń</button>

</div>
@endforeach
@endsection