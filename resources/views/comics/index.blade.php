@extends('layouts.app')

@section('main')

<main>
  <h1>Fumetti</h1>

    @foreach($comics as $comic)
      <div class="card">
        <h3>{{ $comic->title }}</h3>
        <a href="{{route('comics.show',['comic' => $comic->id])}}"><img src="{{ $comic->thumb }}" alt=""></a>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
      </div>

      <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
      <form action="{{route('comics.destroy',['comic' => $comic->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="delete" value="delete">
      </form>

    @endforeach
    <br>
    <a href="{{ route('comics.create') }}">Create</a>
    

</main>

@endsection