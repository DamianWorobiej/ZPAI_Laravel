@extends('layouts.layout')

@section('content')
<h1>CREATE</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(['route' => 'crud.store']) !!}

    @include('crud.form')
    

@endsection

