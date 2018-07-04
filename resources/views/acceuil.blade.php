@extends('template')
@section('content')
    <h1>Bienvenue chez MusicShop {{ Auth::user()->name }}</h1>
@endsection