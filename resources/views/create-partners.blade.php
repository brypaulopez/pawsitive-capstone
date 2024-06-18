<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <h1>Create Partner</h1>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Boarding</span>
            <select name="boarding" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Product</span>
            <select name="groom" class="form-control" id="product-id">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" id="product-add">
    
                    </div>
                </div>
            </div>
            <script>
                let product = document.getElementById("product-id").value;
                if (product == 'yes') {
                    document.getElementById("product-add").innerHTML = 
                    `
                        <h1>Hi Please fill up to Create Products</h1>
                        <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="hidden" value="" class="form-control" name="product_vet_id">
                        </div>
                        <div class="input-group mb-3">
                            <input type="hidden" value="yes" class="form-control" name="vet_products">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Vet Name</span>
                            <input type="text" class="form-control" value="" name="vet_name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Name</span>
                            <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Details</span>
                            <input type="text" class="form-control" name="product_details">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Category</span>
                            <select name="product_category" class="form-control" id="">
                                <option value="accessories">Accessories</option>
                                <option value="grooming">Grooming Products</option>
                                <option value="foods">Pet Foods</option>
                                <option value="medicines">Medicines</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Stocks</span>
                            <input type="number" class="form-control" name="product_stock">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Price</span>
                            <input type="number" class="form-control" name="product_price">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Image</span>
                            <input type="file" class="form-control" name="image">
                        </div> 
                        <input type="submit" class="btn btn-primary w-100">           
                    </form>
                    `;
                } else {
                    document.getElementById("product-add").innerHTML = ` `;
                }
            </script>
        <hr>
        <input type="submit" class="btn bgteal w-100">
    </form>
</body>
</html>