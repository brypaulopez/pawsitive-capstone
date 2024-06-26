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
            <img src="/img/food-banner.jpg" alt="" class="w-100 rounded-pill p-0 bteal">
        </div>
        <div class="row text-center mt-3" style="margin: auto;">
            <div class="col-1"></div>
            <div class="col-2"><a href="/products" class="btn bgorange w-100 rounded-pill bteal">Products</a></div>
            <div class="col-2"><a href="/medicines" class="btn bglteal w-100 rounded-pill borange">Medicines</a></div>
            <div class="col-2"><a href="/grooming" class="btn bglorange w-100 rounded-pill bteal">Grooming</a></div>
            <div class="col-2"><a href="/accessories" class="btn bgteal w-100 rounded-pill borange">Accessories</a></div>
            <div class="col-2"><a href="/foods" class="btn bgdorange w-100 rounded-pill" id="category">Foods</a></div>
            <div class="col-1"></div>
        </div>
        @if ($foods->count() >= 1)
        <div class="row mt-1 gy-5 mb-3">
          @foreach ($foods as $f)
              @if ($f -> product_stock == 0)
                  <div class="col-3">
                      <div class="card bdorange bsblack">
                          <a href="products/{{$f -> product_id}}">
                              <img src="img/products/{{$f -> product_image}}" style="width: 302px; height: 201px;" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              {{-- <p class="mb-0" style="font-size: 15px;">from: {{$f -> vet_name}}</p> --}}
                              <h2 class="card-title">{{$f -> product_name}}</h2>
                              <p class="fs-4">&#8369;{{$f -> product_price}}</p>
                              <input type="hidden" name="quantity" value="1">
                              <input class="btn btn-danger w-100" value="Currently Out of Stock">
                          </div>
                      </div>
                  </div>
              @else
                  <div class="col-3">
                      <div class="card bdorange bsblack">
                          <a href="products/{{$f -> product_id}}">
                              <img src="img/products/{{$f -> product_image}}" style="width: 302px; height: 201px;" class="card-img-top" alt="...">
                          </a>
                          <div class="card-body">
                              {{-- <p class="mb-0" style="font-size: 15px;">from: {{$f -> vet_name}}</p> --}}
                              <h2 class="card-title">{{$f -> product_name}}</h2>
                              <p class="fs-4">&#8369;{{$f -> product_price}}</p>
                              <form action="/products/{{$f -> product_id}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="quantity" value="1">
                                  <input type="submit" id="cart-btnF" class="btn w-100 bgdorange bdteal" value="Add to Cart">
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
        {{$foods->onEachSide(1)->links('pagination::bootstrap-5')}}
    </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>