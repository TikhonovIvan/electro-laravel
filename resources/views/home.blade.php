@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    {{-- Карточки товаров --}}
    @include('layouts.product-card.product-card')

    {{-- Баннер --}}
    @include('layouts.product-card.baner')



@endsection
