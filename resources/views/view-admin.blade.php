<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/admin-nav')
    <div class="content pt-5">
        <div class="card">
            <div class="card-body">
                <h1>{{$dogs->dog_name}}</h1>
                <p><b>Description: </b>{{$dogs->dog_desc}}</p>
                <p><b>Dog Nutrition: </b>{{$dogs->dog_nutrition}}</p>
                <p><b>Dog Coat Type: </b>{{$dogs->coat_type}}</p>
                <p><b>Dog Coat Length: </b>{{$dogs->coat_length}}</p>
                <hr>
                <a class="btn btn-primary w-100" href="{{url('dogs-admin')}}">Go Back</a>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>