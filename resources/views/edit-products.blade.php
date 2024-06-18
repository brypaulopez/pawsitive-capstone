<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Edit {{$products->product_name}} of {{$products->vet_name}}</h1>
                <form action="/vet-admin/edit/{{$products->product_id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Product Name</span>
                        <input type="text" class="form-control" value="{{$products->product_name}}" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Product Details</span>
                        <input type="text" class="form-control" value="{{$products->product_details}}" name="details">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Product Category</span>
                        <select name="category" class="form-control" id="">
                            <option value="{{$products->product_category}}" selected>{{$products->product_category}}</option>
                            <option value="accessories">Accessories</option>
                            <option value="grooming">Grooming Products</option>
                            <option value="foods">Pet Foods</option>
                            <option value="medicines">Medicines</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Product Stock</span>
                        <input type="number" class="form-control" value="{{$products->product_stock}}" name="stock">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Product Price</span>
                        <input type="number" class="form-control" value="{{$products->product_price}}" name="price">
                    </div>
                    <hr>
                    <input type="submit" class="btn bgteal w-100">
                </form>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>