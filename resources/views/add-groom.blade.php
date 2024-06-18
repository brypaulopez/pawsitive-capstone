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
                <h1>Hi {{$vet->vet_name}} Please fill up to Create Groom information</h1>
                <form action="/create-groom/{{$vet->vet_id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="hidden" value="{{$vet->vet_id}}" class="form-control" name="product_vet_id">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Vet Name</span>
                        <input type="text" class="form-control" value="{{$vet->vet_name}}" name="vet_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Groom Details</span>
                        <input type="text" class="form-control" name="details">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Groom Price</span>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Groom Image</span>
                        <input type="file" class="form-control" name="image">
                    </div> 
                    <input type="submit" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
</body>
</html>