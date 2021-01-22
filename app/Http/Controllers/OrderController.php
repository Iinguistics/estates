<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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


  public function show($id){

    $order= Order::findOrFail($id);
      return view('orders.show', [
          'order'=>$order
      ]);
  }


  public function create(){
    return view('orders.create');
}

public function test(){
    return view('private');
}


}
