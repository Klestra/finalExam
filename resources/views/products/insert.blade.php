@extends('template')
@section('content')
<h1>Insertion d'un produit</h1>
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
           <select class="" name="numbers">
                @foreach($numbers as $number)
                  <option value="{{ $number->id }}">{{ $number->number }}</option>
                @endforeach
           </select>
        <input type="submit" name="" value"Insérer le produit">
    </form>
@endsection