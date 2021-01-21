@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
  <div class="mb-5">
  <h3>Orders</h3>
  @foreach($orders as $order)
            <a href="{{ route('order.show', $order->id) }}" class="order-item">{{ $order->name }} -
            {{ $order->order }}
          </a>
            
            @endforeach
            <p class="msg">{{ session('order-destroy-message') }}</p>
  </div>

  
</div>

@endsection