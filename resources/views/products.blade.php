@extends('layouts.maim')

@section('title', 'Produtos')

@section('content')
    <h1>Página de produtos</h1>

    @if ($busca != '')
        <p>o usuario está buscando por {{$busca}}</p>
    @endif
@endsection