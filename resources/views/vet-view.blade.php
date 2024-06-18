<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1>{{$vet->vet_name}}</h1>
                <p><b>Offer Grooming?: </b>{{$vet->vet_groom}}</p>
                <p><b>Offer Boarding?: </b>{{$vet->vet_boarding}}</p>
                <p><b>Selling Products?: </b>{{$vet->vet_products}}</p>
                <p><b>Where can they be located?: </b>{{$vet->vet_address}}</p>
                @if ($vet->vet_package == 'c')
                <a class="btn bgorange mt-2" href="/vet-admin/edit-vet/{{$vet -> vet_id}}">
                    Edit Partner
                </a>
                <a href="/create-products/{{$vet->vet_id}}" class="btn bglorange mt-2">Add Products</a>
                <a href="/create-groom/{{$vet->vet_id}}" class="btn bgteal mt-2">Add Grooming information</a>
                <a href="/create-boarding/{{$vet->vet_id}}" class="btn bglteal mt-2">Add Boarding information</a>
                <hr>
                <div class="row mt-3">
                    <div class="col-12">
                        <table class="table table-hovered table-bordered my-3">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Details</th>
                                    <th>Product Category</th>
                                    <th>Product Stock</th>
                                    <th>Product Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        @foreach ($products as $p)
                            <tbody>
                                <tr>
                                    <td>{{$p -> product_name}}</td>
                                    <td>{{$p -> product_details}}</td>
                                    <td>{{$p -> product_category}}</td>
                                    <td>{{$p -> product_stock}}</td>
                                    <td>{{$p -> product_price}}</td>
                                    <td>
                                        <a class="btn bgorange" href="/vet-admin/edit/{{$p -> product_id}}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="vet-admin/{{$p -> vet_id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn bgteal" type="submit" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach 
                        </table>
                    </div>
                @elseif ($vet->vet_package == 'b')
                {{-- package B  --}}
                <a class="btn bgorange mt-2" href="/vet-admin/edit-vet/{{$vet -> vet_id}}">
                    Edit Partner
                </a>
                <a href="/create-products/{{$vet->vet_id}}" class="btn bglorange mt-2">Add Products</a>
                <a href="/create-groom/{{$vet->vet_id}}" class="btn bgteal mt-2">Add Grooming information</a>
                <a href="/create-boarding/{{$vet->vet_id}}" class="btn bglteal mt-2">Add Boarding information</a>
                <hr>
                <div class="row mt-3">
                    <div class="col-12">
                        <table class="table table-hovered table-bordered my-3">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Details</th>
                                    <th>Product Category</th>
                                    <th>Product Stock</th>
                                    <th>Product Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        @foreach ($products as $p)
                            <tbody>
                                <tr>
                                    <td>{{$p -> product_name}}</td>
                                    <td>{{$p -> product_details}}</td>
                                    <td>{{$p -> product_category}}</td>
                                    <td>{{$p -> product_stock}}</td>
                                    <td>{{$p -> product_price}}</td>
                                    <td>
                                        <a class="btn bgorange" href="/vet-admin/edit/{{$p -> product_id}}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="vet-admin/{{$p -> vet_id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn bgteal" type="submit" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach 
                        </table>
                    </div>
                @elseif ($vet->vet_package == 'a')
                {{-- package A --}}
                <a class="btn bgorange mt-2" href="/vet-admin/edit-vet/{{$vet -> vet_id}}">
                    Edit Partner
                </a>
                @endif
                </div>
                <hr>
                <a class="btn btn-primary w-100" href="{{url('vet-admin')}}">Go Back</a>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>