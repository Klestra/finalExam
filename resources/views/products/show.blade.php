@extends('template')
@section('content')
        <h1>Produits</h1>
        @foreach ($instruments as $value)
                <p>Titre : {{ $value->title }}</p>
                <p>Description : {{ $value->excerpt }}</p>
                <p>Prix : {{ $value->price }}</p>
                <p>Couleur : {{ $value->colors[0]->name }}</p>
                <form class="" action="delete" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $value->id }}">
                    <input type="submit" name="" value="Supprimer le produit">
                </form> 
                <form class="" action="/products/update" method="post">
                 @csrf
                    <input type="hidden" name="id" value="{{ $value->id }}">
                    <input type="submit" name="" value="Mettre à jour le produit">
                </form>
        @endforeach
@endsection