@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
  <h1 class="mb-4">Menu</h1>


 <form action="/order" method="POST" >
  @csrf
  <div class="row">
       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/chicken-cordon-bleu.jpg" class="card-img-top" alt="chicken">
            <div class="card-body">
                <h5 class="card-title">Chicken cordon bleu</h5>
                <p class="card-text">Hand-breaded chicken breasts, topped with shaved beeler’s ranch smoked ham, melted swiss cheese and whole grain mustard cream sauce, served with red lake nation wild rice, almond + mushroom pilaf.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]"  class="form-control" value="chicken-cordon-bleu">
            </div>
         </div>
       </div>

       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/flat-iron-steak.jpg" class="card-img-top" alt="steak">
            <div class="card-body">
                <h5 class="card-title">Flat iron steak</h5>
                <p class="card-text">10oz* certified angus beef® served with spinach, mashed potatoes and house gravy on the side with garlic butter.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]"  class="form-control" value="flat-iron-steak">
            </div>
         </div>
       </div>

       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/lamb-shank.jpg" class="card-img-top" alt="lamb">
            <div class="card-body">
                <h5 class="card-title">Lamb shank pot pie</h5>
                <p class="card-text">lamb shank slow-cooked in housemade garlic + red wine sauce, served open face with mashed potatoes, marinated tomatoes, veggies and a salted-thyme pie.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]" id="name" class="form-control" value="chicken-cordon-bleu">
            </div>
         </div>
       </div>

       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/chicken-cordon-bleu.jpg" class="card-img-top" alt="chicken">
            <div class="card-body">
                <h5 class="card-title">Chicken cordon bleu</h5>
                <p class="card-text">Hand-breaded chicken breasts, topped with shaved beeler’s ranch smoked ham, melted swiss cheese and whole grain mustard cream sauce, served with red lake nation wild rice, almond + mushroom pilaf.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]" id="name" class="form-control" value="chicken-cordon-bleu">
            </div>
         </div>
       </div>

       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/chicken-cordon-bleu.jpg" class="card-img-top" alt="chicken">
            <div class="card-body">
                <h5 class="card-title">Chicken cordon bleu</h5>
                <p class="card-text">Hand-breaded chicken breasts, topped with shaved beeler’s ranch smoked ham, melted swiss cheese and whole grain mustard cream sauce, served with red lake nation wild rice, almond + mushroom pilaf.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]" id="name" class="form-control" value="chicken-cordon-bleu">
            </div>
         </div>
       </div>

       <div class="col-sm">
       <div class="card m-auto" style="width: 18rem;">
            <img src="/img/menu/chicken-cordon-bleu.jpg" class="card-img-top" alt="chicken">
            <div class="card-body">
                <h5 class="card-title">Chicken cordon bleu</h5>
                <p class="card-text">Hand-breaded chicken breasts, topped with shaved beeler’s ranch smoked ham, melted swiss cheese and whole grain mustard cream sauce, served with red lake nation wild rice, almond + mushroom pilaf.</p>
                <label for="name" class="p-2">Order</label>
                <input type="checkbox" name="order[]" id="name" class="form-control" value="chicken-cordon-bleu">
            </div>
         </div>
       </div>
<!-- end row -->
  </div>
       
  <div class="row mt-4">
  <div class="col-sm">
       <label for="name" class="p-2">Name</label>
       <input type="text" name="name" id="name" class="form-control" required>
  </div>
</div>
  
      <div class="row mt-4">
       <div class="col-sm">
       <label for="email" class="p-2">Email</label>
       <input type="text" name="email" id="email" class="form-control" required>
       </div>
    </div>

    <div class="row mt-4">
       <div class="col-sm">
       <label for="phone" class="p-2">Phone #</label>
       <input type="text" name="phone" id="phone" class="form-control" required>
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