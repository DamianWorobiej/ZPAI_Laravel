@extends('layouts.layout')

@section('content')

<p class="p-create"><a href="{{ action('CRUDController@create') }}"><button class="btn btn-primary btn-lg btn-create">Utwórz</button></a></p>
@foreach($products as $product)
<div class="container">
<button class="accordion"><img src="{{ $product->img_thumb }}" height="70"/>  {{ $product->nazwa }}</button>
<div class="panel" width=2>
    <?php $argument = array($product->id); ?>
    
<a href="{{ route('crud.edit', $argument) }}"><button class="btn btn-warning btn-block btn-crud">Edytuj {{ $product->nazwa }}</button></a>
<a href="{{-- route('crud.destroy', $product) --}}"><button class="btn btn-danger btn-block btn-crud">Usuń</button></a>

<!--<form class="form-crud" method="POST" action="{{-- route('crud.destory', $product) --}}" accept-charset="UTF-8">
    <input name="_method" type="hidden" value="DELETE">
    <input name="_token" type="hidden" value="Es4u13jCO5jKK3vnrucJjhGmU1nSo1Ainp3FGknO">
    <input class="btn btn-danger btn-block btn-crud" type="submit" value="Usuń">
</form>-->


<!--{!! Form::model($product, ['route' => ['crud.destroy', $product], 'method'=>'DELETE']) !!}
{!! Form::submit('Usuń', ['class'=>'btn btn-danger btn-block btn-crud']) !!}
{!! Form::close() !!}-->
</div>
</div>
@endforeach
<script src="js/accordion.js"></script>
@endsection