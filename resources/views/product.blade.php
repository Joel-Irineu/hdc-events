@extends('layouts.maim')

@section('title', 'produto')

@section('content')
    @if ($id != null)
        <h1>Produto {{$id}}</h1>
    @endif
@endsection