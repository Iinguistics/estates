@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
  <h1>Submitted Events:</h1>
  @foreach($events as $event)
  <a href="{{ route('events.show', $event->id) }}" >
      {{ $event->name }} - {{ $event->date }} <br />
  </a>
  @endforeach
  <p class="bg-dark text-light mt-4">{{ session('event-destroy-message') }}</p>
</div>


@endsection