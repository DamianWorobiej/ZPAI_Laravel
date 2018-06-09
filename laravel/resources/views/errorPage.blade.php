@extends('layouts.layout')

@section('content')
<!--<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">-->
<h1 align="center"><?php echo $errorMSG ?></h1>
<h4 align="center">Aby uzyskać dostęp do żądanych treści <a href="<?php echo route('login')?>">zaloguj się</a>.</h4>
<h4 align="center">Jeżeli nie posiadasz konta <a href="<?php echo route('register')?>">zarejestruj się</a>.</h4>
<!--                </div>
            </div>
</div>-->

@endsection

