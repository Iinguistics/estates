@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
<div class="mb-5 text-left">
  <p>Events at Fork are always memorable and special.</p>
   <p>For all inquiries, please fill out the form below and we’ll be in touch soon.</p> 
  </div>
  <div class="row mb-5">
    <div class="col-sm mb-4">
  <img src="/img/private-dining/group-dining.jpg" alt="table"  class="img-fluid" /><br />
  <div class="text-dark font-weight-bold">Group dining/family style</div>
   <p>Available for parties of 7-10 guests</p>
   <p>$89 four course, family style dinner</p>
   <p>Two seatings times nightly: beginning between 5-6pm or 8-10:30pm</p>
    </div>
    <div class="col-sm mb-4">
        <img src="/img/private-dining/buyouts-private-dining.jpg" alt="table"  class="img-fluid" /><br />
        <div class="text-dark font-weight-bold">Group dining/family style</div>
        <p>One hour of passed canapés followed by four course, seated dinner</p>
        <p>Available from 5pm onwards, until midnight</p>
        <p>Entire restaurant is closed to the public</p>
        <p>Maximum seated: 46, maximum standing: 70</p>
        <p>Party size determines buyout rate</p>
    </div>
  </div>


 <form action="/private" method="POST" >
  @csrf
   <div class="row">
       <div class="col-sm">
       <label for="name" class="p-2">Your name:</label>
       <input type="text" name="name" id="name"  required>
       </div>

       <div class="col-sm">
       <label for="email" class="p-2">Email</label>
       <input type="text" name="email" id="email" required>
       </div>
   </div>

  

   <div class="row">
       <div class="col-sm">
       <label for="phone" class="p-2">Phone Number</label> 
       <input type="text" name="phone" id="phone" required>
       </div>
 
       <div class="col-sm">
       <select name="space" id="space" class="p-2">
       <option value="group">Group Dining / Family style</option>
       <option value="buyout">Buyout / private events</option>
        </select>
       </div>
   </div>


   <div class="row">
       <div class="col-sm">
       <label for="date" class="p-2">Event Date</label>
       <input type="date" name="date" id="date" required>
       </div>

       <div class="col-sm">
       <label for="start" class="p-2">Start Time</label>
       <input type="time" name="start" id="start" required>
 
       <label for="end" class="p-2">End Time</label>
       <input type="time" name="end" id="end" required> 
       </div>
   </div>


   <div class="row">
       <div class="col-sm"> <br />
        <button type="submit" class="btn btn-dark" class="p-2">
            Submit
        </button>
       </div>
   </div>
    
  </form>
</div>


@endsection