@extends('layouts.app')

@section('main')

<main>
  <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" value="" placeholder="Title">
    <input type="text" name="description" value="" placeholder="Description">
    <input type="text" name="thumb" value="" placeholder="Thumb">
    <input type="number" name="price" value="" placeholder="price">
    <input type="text" name="series" value="" placeholder="series">
    <input type="text" name="sale_date" value="" placeholder="sale date">
    <input type="text" name="type" value="" placeholder="type">

    <input type="submit" name="Send" value="Send">

  
  </form>

</main>

@endsection