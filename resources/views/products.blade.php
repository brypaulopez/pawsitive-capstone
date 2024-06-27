<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    {{-- body --}}
    <div class="container mt-5">
      <div class="row text-center rounded">
          <img src="/img/product-banner.png" alt="" class="w-100 rounded-pill bteal bsblack p-0">
      </div>
      <div class="row text-center mt-3" style="margin: auto;">
          <div class="col-1"></div>
          <div class="col-12 col-xl-2 mt-1"><a href="/products" class="btn bgorange w-100 rounded-pill bteal" id="category">Products</a></div>
          <div class="col-12 col-xl-2 mt-1"><a href="/medicines" class="btn bglteal w-100 rounded-pill borange">Medicines</a></div>
          <div class="col-12 col-xl-2 mt-1"><a href="/grooming" class="btn bglorange w-100 rounded-pill bteal">Grooming</a></div>
          <div class="col-12 col-xl-2 mt-1"><a href="/accessories" class="btn bgteal w-100 rounded-pill borange">Accessories</a></div>
          <div class="col-12 col-xl-2 mt-1"><a href="/foods" class="btn bgdorange w-100 rounded-pill ">Foods</a></div>
          <div class="col-1"></div>
      </div>
      @if ($products->count() >= 1)
      <div class="row mt-1 gy-5 mb-3">
        @foreach ($products as $p)
            @if ($p -> product_stock == 0)
                <div class="col-12 col-lg-6 col-xl-3 col-md-6">
                    <div class="card borange bsblack">
                        <a href="products/{{$p -> product_id}}">
                            <img src="img/products/{{$p -> product_image}}" style="width: 302px; height: 250px;"  class="card-img-top w-100" alt="...">
                        </a>
                        <div class="card-body">
                            {{-- <p class="mb-0" style="font-size: 15px;">from: {{$p -> vet_name}}</p> --}}
                            <h2 class="card-title">{{$p -> product_name}}</h2>
                            <p class="fs-5">&#8369;{{$p -> product_price}}</p>
                            <input type="hidden" name="quantity" value="1">
                            <input class="btn btn-danger w-100" value="Currently Out of Stock">
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 col-lg-6 col-xl-3 col-md-6">
                    <div class="card borange bsblack" style="">
                        <a href="products/{{$p -> product_id}}">
                            <img src="img/products/{{$p -> product_image}}" style="width: 302px; height: 250px;" class="card-img-top w-100" alt="...">
                        </a>
                        <div class="card-body ">
                            <h4 class="card-title">{{$p -> product_name}}</h4>
                            <p class="fs-5">&#8369;{{$p -> product_price}}</p>
                            <form action="/products/{{$p -> product_id}}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" value="1">
                                <input type="submit" id="cart-btn" class="btn w-100 bgorange bteal" value="Add to Cart">
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
      {{$products->onEachSide(1)->links('pagination::bootstrap-5')}}
  </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>