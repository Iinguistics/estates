@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
 
 <h2>Order for {{ $order->name }}</h2>
         <p>{{ $order->order }}</p>

         <form action =" {{ route('orders.destroy', $order->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button>Complete Order</button>
          </form>
      <a href="{{ route('orders.index') }}">Back to all orders</a>
</div>

@endsection