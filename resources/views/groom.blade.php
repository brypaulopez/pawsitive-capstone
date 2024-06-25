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
                <form action="/groom" method="POST" class="text-center">
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
                            <input type="submit" class="btn bgteal w-100" id="" value="Find Grooming Services">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 bteal g-5">
        @if ($countC != 0 && $countM != 0)
            <div class="col-12 text-center">
                <h2>Groomings in both {{$filteredC->vet_city}} and {{$filteredM->vet_municipality}}</h2>
            </div>
            @foreach ($filterGC as $f)
                <div class="col-4">
                    <div class="card borange bgteal">
                        <a href="groom/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($filterGM as $f)
                <div class="col-4">
                    <a href="groom/{{$f -> vet_id}}">
                        <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                    </a>
                    <div class="card borange bgteal bsblack">
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countM != 0 && $countC == 0)
            <div class="col-12 text-center">
                <h2>Groomings in {{$filteredM->vet_municipality}}</h2>
            </div>
            @foreach ($filterGM as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <a href="groom/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countC !=0 && $countM == 0)
            <div class="col-12 text-center">
                <h2>Groomings in {{$filteredC->vet_city}}</h2>
            </div>
            @foreach ($filterGC as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <a href="groom/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-12 text-center">
                    <h2>Groomings in CALABARZON</h2>
                </div>
                @foreach ($cityG as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <a href="groom/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($municipalityG as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <a href="groom/{{$f -> vet_id}}">
                            <img src="/img/vets/{{$f -> vet_image}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body" style="height: 88px">
                            <h4 class="card-title">{{$f -> vet_name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
    @include('layout/script')
</body>
</html>