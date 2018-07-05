@extends('template')
@section('content')
        <div class="product">
        <h1>Produits</h1>
        </div>
        @foreach ($instruments as $value)
                <div class="show">
                <h2>Titre : {{ $value->title }}</h2>
                <p>Description : {{ $value->excerpt }}</p>
                <p>Prix : {{ $value->price }}</p>
                <p class="colors">Couleur : {{ $value->colors[0]->name }}</p>
                @foreach ($value->numbers() as $number)
                <p>Nombre disponible : {{ $number->number }}</p>
                @endforeach
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
                </div>
        @endforeach
@endsection