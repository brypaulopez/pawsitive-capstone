<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="container mt-5">
        <div class="row text-center rounded">
            <img src="/img/medicine-banner.jpg" alt="" class="w-100 rounded-pill p-0 blteal">
        </div>
        <div class="row text-center mt-3" style="margin: auto;">
            <div class="col-1"></div>
            <div class="col-2"><a href="/products" class="btn bgorange w-100 rounded-pill bteal">Products</a></div>
            <div class="col-2"><a href="/medicines" class="btn bglteal w-100 rounded-pill borange" id="category">Medicines</a></div>
            <div class="col-2"><a href="/grooming" class="btn bglorange w-100 rounded-pill bteal">Grooming</a></div>
            <div class="col-2"><a href="/accessories" class="btn bgteal w-100 rounded-pill borange">Accessories</a></div>
            <div class="col-2"><a href="/foods" class="btn bgdorange w-100 rounded-pill">Foods</a></div>
            <div class="col-1"></div>
        </div>
        @if ($medicines->count() >= 1)
        <div class="row mt-1 gy-5 mb-3">
          @foreach ($medicines as $m)
              @if ($m -> product_stock == 0)
                  <div class="col-3">
                      <div class="card blteal bsblack">
                          <a href="products/{{$m -> product_id}}">
                              <img src="img/products/{{$m -> product_image}}" style="width: 302px; height: 201px;" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              {{-- <p class="mb-0" style="font-size: 15px;">from: {{$m -> vet_name}}</p> --}}
                              <h2 class="card-title">{{$m -> product_name}}</h2>
                              <p class="fs-5">&#8369;{{$m -> product_price}}</p>
                              <input type="hidden" name="quantity" value="1">
                              <input class="btn btn-danger w-100" value="Currently Out of Stock">
                          </div>
                      </div>
                  </div>
              @else
                  <div class="col-3">
                      <div class="card bsblack">
                          <a href="products/{{$m -> product_id}}">
                              <img src="img/products/{{$m -> product_image}}" style="width: 302px; height: 201px;" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              {{-- <p class="mb-0" style="font-size: 15px;">from: {{$m -> vet_name}}</p> --}}
                              <h2 class="card-title">{{$m -> product_name}}</h2>
                              <p class="fs-5">&#8369;{{$m -> product_price}}</p>
                              <form action="/products/{{$m -> product_id}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="quantity" value="1">
                                  <input type="submit" id="cart-btnM" class="btn w-100 bglteal blorange" value="Add to Cart">
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
        {{$medicines->onEachSide(1)->links('pagination::bootstrap-5')}}
    </div>
    @include('layout/script')
</body>
</html>