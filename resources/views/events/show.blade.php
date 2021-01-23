@extends('layouts.app')

@section('content')
    <div class="container text-center my-4">
        <h1>Event for {{ $event->name }}</h1>
        <ul class="list-group">
        <li class="list-group-item">Date requested: {{$event->date}}</li>
        <li class="list-group-item">Type: {{$event->space}}</li>
        <li class="list-group-item">Start Time: {{$event->start}}</li>
        <li class="list-group-item">End Time: {{$event->end}}</li>
        <li class="list-group-item">Email: {{$event->email}}</li>
        <li class="list-group-item">Phone #: {{$event->phone}}</li>
        </ul>

        <form action =" {{ route('events.destroy', $event->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger mt-2" type="submit">Delete event</button>
          </form>

     <div class="mt-4">
      <a href="{{ route('events.index') }}">Back to all events</a>
     </div>
      </div>
    @endsection
