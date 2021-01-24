@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
<div class="mb-5 text-left">
  <p class="bg-dark text-light">{{ session('event-submit-message') }}</p>
  <p class="bg-dark text-light">{{ session('order-submit-message') }}</p>
  <h3>Fork</h3>
  <p>Is the culinary vision of Chefs Evan and Sarah Rich. With over three decades of combined experience in San Francisco and New York high-end restaurants, the team brings with them a wealth of talent, knowledge of quality foods and wine, and connections with the best farms and purveyors.</p>
  </div>
  <div class="row mb-5">
    <div class="col-sm mb-4">
    <a href="/menu" class="test">
  <img src="/img/home/rest-home-salad.jpg" alt="salad" id='salad-img' class="img-fluid position-relative" /><br />
  <div class="test-item text-dark font-weight-bold bg-light">View our menu & order online</div>
  </a>
    </div>
    <div class="col-sm mb-4">
    <a href="/private" class="test">
  <img src="/img/home/private-dining.jpg" alt="table" id='private-dining-img' class=" img-fluid" /><br />
  <div class="test-item text-dark font-weight-bold bg-light">Private Dining</div>
  </a>
    </div>
  </div>
 </div> 
</div>

@endsection