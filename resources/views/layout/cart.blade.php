    {{-- CART MODAL --}}
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              @foreach ($showCart as $c)
              <div class="row bteal">
                  <div class="col-4" style="width: 105px !important; height: 105px !important;">
                      <img src="/img/products/{{$c -> cart_image}}" alt="" class="w-100">
                  </div>
                  <div class="col-2 pt-4">
                      <p><b>{{$c -> cart_name}}</b></p>
                  </div>
                  <div class="col-3 pt-4">
                      <p>Quantity: <b>{{$c -> cart_qty}}</b></p>
                  </div>
                  <div class="col-4 pt-4">
                      <form action="/remove-cart/{{$c -> cart_id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Remove" class="btn bteal bgorange w-100">
                      </form>
                  </div>
              </div>
              @endforeach
          </div>
          <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
          </div>
      </div>
      </div>
  </div>
  {{-- PAYMENT MODAL --}}
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          Code here
          </div>
          <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
          </div>
      </div>
      </div>
  </div>