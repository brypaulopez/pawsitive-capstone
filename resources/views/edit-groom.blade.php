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
                <h1>Edit Groom Details of {{$groom->vet_name}}</h1>
                <form action="/vet-admin/groom/{{$groom->groom_id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Groom Details</span>
                        <input type="text" class="form-control" value="{{$groom->groom_details}}" name="details">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Groom Price</span>
                        <input type="number" class="form-control" value="{{$groom->groom_price}}" name="price">
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