<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\models\Order;


class OrderController extends Controller
{


   public function index(){
    //$orders = Order::all();
    $orders = Order::latest()->get();
    return view('orders.index', [
   'orders'=>$orders,
   ]);

  }


  public function store(){

    // get an instance of the order table
    $order = new Order();

    // use request() to get the value from the form
    $order->name = request('name');
    $order->email = request('email');
    $order->phone = request('phone');
    $order->order = request('order');
    
   //$toppings = request('toppings')->json();
   // $event->toppings = request($toppings);
    // save event to data base...since $event is an instance of the model it has access to all the sql methods
    $order->save();
    
    // use with() method to chain on to the redirect...session data
    return redirect('/')->with('order-submit-message', 'Your order has been submitted');
}


  public function show($id){

    $order= Order::findOrFail($id);
      return view('orders.show', [
          'order'=>$order
      ]);
  }


  

  public function destroy($id){
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect('/orders')->with('order-destroy-message', 'Order has been deleted');
}





}
