@extends('layouts.app')

@section('main')

<main>

      <div class="card">
        <h3>{{ $comic->title }}</h3>
        <a href="{{route('comics.show',['comic' => $comic->id])}}"><img src="{{ $comic->thumb }}" alt=""></a>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
      </div>

</main>

@endsection