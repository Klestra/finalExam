@extends('template')
@section('content')
    <div class="product">
        <h1>Insertion d'un produit</h1>
    </div>
    <form class="" action="/products/insertAction" method="post">
    @csrf
        <label for="title">Titre :</label>
            <input type="text" id="title" name="title">
        <label for="price">Description :</label>
            <input type="text" id="excerpt" name="excerpt">
        <label for="price">Prix :</label>
            <input type="text" id="price" name="price">
        <label for="color">Couleurs :</label>
        <select class="" name="color">
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
        </select>
        <label for="number">Nombres disponible :</label>
           <select class="" name="">
                @foreach($numbers as $number)
                  <option value="{{ $number->id }}">{{ $number->number }}</option>
                @endforeach
           </select>
        <input class="update" type="submit" name="" value"Insérer le produit">
    </form>
@endsection