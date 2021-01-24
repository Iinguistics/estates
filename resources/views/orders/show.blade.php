@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
 
 <h2>Order for {{ $order->name }}</h2>
        <ol>
           @foreach($order->order as $dish)
           <li>{{ $dish }}</li>
           @endforeach
         </ol>

         <form action =" {{ route('orders.destroy', $order->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger my-4" type="submit">Complete Order</button>
          </form>
      <a href="{{ route('orders.index') }}">Back to all orders</a>
</div>

@endsection