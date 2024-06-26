<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5 bgorange bteal">
                <h2 class="fs-1 mt-3">Please Select the city or municipality for the location.</h2>
                <form action="/clinic" method="POST" class="text-center">
                    @csrf
                    <div class="row">
                        <div class="col-3 mt-3 mb-5">
                            <select class="form-control" name="city" id="">
                                <option disabled="" selected="" value="none">City</option>
                                @foreach ($city as $c)
                                    <option value="{{$c -> vet_city}}">{{$c -> vet_city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3 mt-3 mb-5">
                            <select class="form-control" name="municipality" id="">
                                <option disabled="" selected="" value="none">Municipality</option>
                                @foreach ($municipality as $m)
                                    <option value="{{$m -> vet_municipality}}">{{$m -> vet_municipality}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-3 mb-5">
                            <input type="submit" class="btn bgteal bdteal w-100 normal-btn" id="" value="Find a Clinic">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 rounded bsblack bteal g-5 pb-3">
        @if ($countC != 0 && $countM != 0)
            <div class="col-12 text-center mt-3">
                <h2>Clinics in both {{$filteredC->vet_city}} and {{$filteredM->vet_municipality}}</h2>
            </div>
            @foreach ($filterC as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($filterM as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countM != 0 && $countC == 0)
            <div class="col-12 text-center mt-3">
                <h2>Clinics in {{$filteredM->vet_municipality}}</h2>
            </div>
            @foreach ($filterM as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countC !=0 && $countM == 0)
            <div class="col-12 text-center mt-3">
                <h2>Clinics in {{$filteredC->vet_city}}</h2>
            </div>
            @foreach ($filterC as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-12 text-center mt-3">
                    <h2>Clinics in CALABARZON</h2>
                </div>
                @foreach ($city as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($municipality as $f)
                <div class="col-12 col-xl-4 col-md-6 col-sm-6">
                    <div class="card borange bgteal bsblack">
                        <a href="clinic/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="" style="height: 263px !important;">
                        </a>
                        <div class="card-body" style="height: 88px;">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>