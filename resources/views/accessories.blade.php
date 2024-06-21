<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
          {{-- CART MODAL --}}
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content borange">
                  <div class="modal-header bglteal">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body ">
                      @foreach ($showCart as $c)
                        <div class="row bteal">
                          <div class="col-3">
                              <img src="img/products/{{$c -> cart_image}}" alt="" class="w-100">
                          </div>
                          <div class="col-2 pt-4">
                              <p><b>{{$c -> cart_name}}</b></p>
                          </div>
                          <div class="col-2 p-0 pt-4">
                              <p>Qty: <b class=""> {{$c -> cart_qty}}</b></p>
                          </div>
                          <div class="col-2 pt-4">
                              <p>Price: <b class="">{{$c -> cart_price}}</b></p>
                          </div>
                          <div class="col-3 pt-3">
                              <form action="/remove-cart/{{$c -> cart_id}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" value="Remove" class="btn bteal bgorange w-100">
                              </form>
                          </div>
                        </div>
                      @endforeach
                  </div>
                  <div class="modal-footer bglteal">
                    <button class="btn bgorange bteal" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Proceed to Checkout</button>
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
    <div class="container mt-5">
        <div class="row text-center rounded">
            <img src="/img/acc-banner.webp" alt="" class="w-100 rounded-pill p-0 bteal">
        </div>
        <div class="row text-center mt-3" style="margin: auto;">
          <div class="col-1"></div>
          <div class="col-2"><a href="/products" class="btn bgorange w-100 rounded-pill bteal">Products</a></div>
          <div class="col-2"><a href="/medicines" class="btn bglteal w-100 rounded-pill borange">Medicines</a></div>
          <div class="col-2"><a href="/grooming" class="btn bglorange w-100 rounded-pill bteal">Grooming</a></div>
          <div class="col-2"><a href="/accessories" class="btn bgteal w-100 rounded-pill borange" id="category">Accessories</a></div>
          <div class="col-2"><a href="/foods" class="btn bgdorange w-100 rounded-pill ">Foods</a></div>
          <div class="col-1"></div>
      </div>
        @if ($accessories->count() >= 1)
        <div class="row mt-3">
          @foreach ($accessories as $a)
              @if ($a -> product_stock == 0)
                  <div class="col-3">
                      <div class="card bteal">
                          <a href="products/{{$a -> product_id}}">
                              <img src="img/products/{{$a -> product_image}}" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              <p class="mb-0" style="font-size: 15px;">from: {{$a -> vet_name}}</p>
                              <h2 class="card-title">{{$a -> product_name}}</h2>
                              <input type="hidden" name="quantity" value="1">
                              <input class="btn btn-danger w-100" value="Currently Out of Stock">
                          </div>
                      </div>
                  </div>
              @else
                  <div class="col-3">
                      <div class="card bteal">
                          <a href="products/{{$a -> product_id}}">
                              <img src="img/products/{{$a -> product_image}}" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              <p class="mb-0" style="font-size: 15px;">from: {{$a -> vet_name}}</p>
                              <h2 class="card-title">{{$a -> product_name}}</h2>
                              <form action="/products/{{$a -> product_id}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="quantity" value="1">
                                  <input type="submit" id="cart-btn" class="btn w-100 bgteal borange" value="Add to Cart">
                              </form>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach
      </div>
        @else
          <div class="row mt-5 text-center">
              <h1>Currently there are no stacks.. Sincere Apologies for the inconvenience.</h1>
          </div>
        @endif
        {{$accessories->onEachSide(1)->links('pagination::bootstrap-5')}}
    </div>
    @include('layout/script')
</body>
</html>