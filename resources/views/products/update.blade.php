@extends('template')
@section('content')
  <form class="" action="/products/updateAction" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $instruments->id }}">
      <label for="title">Title</label>
        <input id="title" type="text" name="title" value="{{ $instruments->title }}">
      <label for="excerpt">Description</label>
        <input id="excerpt" type="text" name="excerpt" value="{{ $instruments->excerpt }}">
      <label for="price">Price</label>
        <input id="price" type="number" name="price" value="{{ $instruments->price }}">
      <label for="color">Couleurs</label>
      <select id="color" class="" name="color">
        @foreach($colors as $color)
          @if($instruments->colors_id == $color->id)
            <option selected value="{{ $color->id }}">{{ $color->name }}</option>
          @else
            <option value="{{ $color->id }}">{{ $color->name }}</option>
          @endif
        @endforeach
      </select>
      <input type="submit" name="" value="Insert">
    </form>
@endsection
