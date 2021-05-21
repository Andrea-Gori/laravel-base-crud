@extends('layouts.app')

@section('main')

<main>
  <form action="{{route('comics.update',['comic' => $comic->id])}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $comic->title }}">
    <input type="text" name="description" value="{{ $comic->description }}">
    <input type="text" name="thumb" value="{{ $comic->thum }}">
    <input type="number" name="price" value="{{ $comic->price }}">
    <input type="text" name="series" value="{{ $comic->series }}">
    <input type="text" name="sale_date" value="{{ $comic->sale_date }}">
    <input type="text" name="type" value="{{ $comic->type }}">

    <input type="submit" name="Send" value="Send">

  
  </form>

</main>

@endsection