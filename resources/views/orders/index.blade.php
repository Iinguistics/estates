@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
  <h1>Submitted Order's:</h1>
  <ol>
  @foreach($orders as $order)
    <li>
    <a href="{{ route('orders.show', $order->id) }}" >
      {{ $order->name }} - {{ $order->created_at }} <br />
  </a>
    </li>
  @endforeach
  </ol>
  <p class="bg-dark text-light mt-4">{{ session('order-destroy-message') }}</p>
</div>


@endsection