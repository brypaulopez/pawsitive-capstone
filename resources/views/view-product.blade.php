<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body >
    @include('layout/nav')
    @include('layout/cart')
    <div class="container mt-5">
        <div class="row gx-4">
            <div class="col-6">
                <div class="borange img-magnifier-container rounded" onclick="magnify('myimage', 3)" >
                    <img id="myimage" src="/img/products/{{$product -> product_image}}" alt="" class="w-100">
                </div>
                {{-- <div><button onclick="remove()">Remove</button></div> --}}
            </div>
            <div class="col-6">
                <div class="bteal rounded">
                    <div class="row p-3 pb-0 m-0 text-center">
                        <h2>{{$product->product_name}}</h2>
                        <p>Shop: {{$product->vet_name}}</p>
                    </div>
                    <hr>
                    <h3 class="p-3 pb-0 m-0">&#8369; {{$product->product_price}}</h3>
                    <p class="p-3 pb-0 m-0"><b>{{{$product->product_details}}}</b></p>
                    @if ($product->product_stock >= 1)
                        <p class="p-3 pb-0 m-0">Stock: <i class="fa-solid fa-circle-dot" style="color: green"></i> In Stock</p>
                    @else
                    <p class="p-3 pb-0 m-0">Stock: <i class="fa-solid fa-circle-dot" style="color: red"></i> Out of Stock</p>
                    @endif
                    <form action="/products/{{$product -> product_id}}" class="p-3" method="POST">
                        @csrf
                        <label for="">Quantity: </label>
                        <div onclick="minus()" class="btn bgorange"><i class="fa-solid fa-minus"></i></div>
                        <input type="number" name="quantity" id="cart-qty" value="1" class="text-center">
                        <div onclick="plus()" class="btn bgteal"><i class="fa-solid fa-plus"></i></div>
                        <div>
                            @if ($product->product_stock == 0)
                                <input class="btn btn-danger w-100 mt-4" value="Add to Cart">
                            @else
                                <input type="submit" class="btn bgdteal w-100 mt-4" value="Add to Cart">
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>