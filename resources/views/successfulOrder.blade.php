@extends('layout')

@section('title')
Заказ оформлен
@endsection


@section('content')
<style type="text/css">
   h1,a { 
    display: block;
    text-align: center;
   }
  </style>
<h1>Ваш заказ оформлен</h1>
<a href="/"><button>Вернуться в каталог</button></a> 
@endsection