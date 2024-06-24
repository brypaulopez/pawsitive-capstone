    {{-- CART MODAL --}}
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bgorange">
          <h1 class="modal-title fs-3" id="exampleModalToggleLabel">Your Cart</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              @if ($showCart->count() == 0)
                <h1>Your Cart is Empty!</h1>
              @else
                @if ($showOrder->count() == 0)
                    <h1>Your Order is being processed, Thank you!</h1>
                @else
                @foreach ($showCart as $c)
                <div class="row bteal">
                    <div class="col-4" >
                        <img src="/img/products/{{$c -> cart_image}}" alt="" class="w-100">
                    </div>
                    <div class="col-2 pt-4">
                        <p><b>{{$c -> cart_name}}</b></p>
                    </div>
                    <div class="col-3 pt-4">
                        <p>Quantity: <b>{{$c -> cart_qty}}</b></p>
                        <p>Price: <b>{{$c -> cart_price}}</b></p>
                    </div>
                    <div class="col-3 pt-4">
                        <form action="/remove-cart/{{$c -> cart_id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remove" class="normal-btn btn bteal bgorange w-100">
                        </form>
                    </div>
                </div>
                @endforeach
                @endif
              @endif
          </div>
          <div class="modal-footer bgteal">
          <button type="button" class="normal-btn btn bglorange bdteal" data-bs-dismiss="modal">Close</button>
          @if ($showOrder->count() == 0)
          
          @else
            <button class="normal-btn btn bgorange bdteal" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Proceed to Checkout</button>
          @endif
          </div>
      </div>
      </div>
  </div>
  {{-- PAYMENT MODAL --}}
  <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bgteal">
          <h1 class="modal-title fs-3" id="exampleModalToggleLabel2">Order Summary</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <h4>Items: {{$showCart->count()}}</h4>
                </div>
                <div class="col-6">
                    <h4>Total Price: {{$showCart->sum('cart_price')}}</h4>
                </div>
            </div>
            <form action='/order' class='row d-flex form-col1 g-3 justify-content-center bgreen mt-2' method="POST">
                @csrf
                <hr>
                <h2 class='hcyan'>Shipping Address</h2>
                 <div class='col-md-5'>
                     <label for='first-name'>Name</label>
                     <input type='text' class='form-control' value="{{Session::get('fname')}}" disabled>
                 </div>
                 <div class='col-md-5'>
                     <label for='last-name'>Last Name</label>
                     <input type='text' class='form-control' value="{{Session::get('lname')}}" disabled>
                 </div>
                 <div class='col-md-10'>
                     <label for='address1'>Address</label>
                     <input type='text' name="address" class='form-control' required>
                 </div>
                 <div class='col-md-5'>
                     <label for='city'>City</label>
                     <input type='text' class='form-control' name="city" required>
                     <div class='invalid-feedback'>
                         Please provide a valid city.
                     </div>
                 </div>
                 <div class='col-md-3'>
                     <label for='state'>State</label>
                     <input type='text' class='form-control' name="state" required>
                     <div class='invalid-feedback'>
                         Please select a valid state.
                     </div>
                 </div>
                 <div class='col-md-2'>
                     <label for='zipcode'>Zip code</label>
                     <input type='number' name="zipcode" class='form-control'>
                     <div class='invalid-feedback' required>
                         Please provide a valid zip.
                     </div>
                 </div>
                 <hr>
                 <h3 class='hpink'>Payment</h3>
                 <div class='col-md-5 mt-0'>
                     <label for='card-number'>Card Number</label>
                     <input type='number' class='form-control' placeholder='0000 0000 0000 0000' id='card-number' required>
                 </div>
                 <div class='col-md-3 mt-0'>
                     <label for='card-expiry'>Expiry Date</label>
                     <input type='date' class='form-control' placeholder='MM/YY' id='card-expiry' required>
                 </div>
                 <div class='col-md-2 mt-0'>
                     <label for='card-cvv'>CVV</label>
                     <input type='number' class='form-control' placeholder='CVV' id='card-cvv' required>
                 </div>
                 <div class='col-12'>
                     <div class='form-check'>
                       <input class='form-check-input' type='checkbox' value='' id='invalidCheck' required>
                       <label class='form-check-label' for='invalidCheck'>
                         Agree to terms and conditions
                       </label>
                       <div class='invalid-feedback'>
                         You must agree before submitting.
                       </div>
                     </div>
                 </div>
                 <div class='col-md-8 text-center'>
                         <button type='submit' class='btn bgorange bteal mb-2'>Purchase</button>
                 </div>
             </form>
          </div>
          <div class="modal-footer bgorange">
          <button class="btn bgteal blorange" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to Cart</button>
          </div>
      </div>
      </div>
  </div>