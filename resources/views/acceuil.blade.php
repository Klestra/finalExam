@extends('template')
@section('content')
    <div class="acceuil">
    <h1>Bienvenue chez MusicShop<h1>
    <p>{{ Auth::user()->name }}</p>
    </div>
@endsection