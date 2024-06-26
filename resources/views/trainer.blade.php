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
            <div class="col-12 text-center mt-5 bgorange bteal mt-3">
                <h2 class="fs-1 mt-3">Please Select the city or municipality for the location.</h2>
                <form action="/trainer" method="POST" class="text-center">
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
                            <input type="submit" class="btn bgteal w-100 normal-btn bdteal" id="" value="Find Trainers Nearby">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 bteal bsblack rounded g-5 pb-5">
        @if ($countC != 0 && $countM != 0)
            <div class="col-12 text-center mt-3">
                <h2 class="mt-0">Trainers in both {{$filterTC->city}} and {{$filterTM->municipality}}</h2>
            </div>
            @foreach ($filterC as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->city}}, {{$f->state}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($filterM as $f)
                <div class="col-4">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->municipality}}, {{$f->state}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countM != 0 && $countC == 0)
            <div class="col-12 text-center mt-3">
                <h2>Trainers in {{$filterTM->municipality}}</h2>
            </div>
            @foreach ($filterM as $f)
                <div class="col-4 text-center">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->municipality}}, {{$f->state}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @elseif ($countC !=0 && $countM == 0)
            <div class="col-12 text-center mt-3">
                <h2>Trainers in {{$filterTC->city}}</h2>
            </div>
            @foreach ($filterC as $f)
                <div class="col-4 text-center">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->city}}, {{$f->state}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-12 text-center mt-3">
                    <h2>Trainers in CALABARZON</h2>
                </div>
                @foreach ($trainerC as $f)
                <div class="col-4 text-center">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->city}}, {{$f->state}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($trainerM as $f)
                <div class="col-4 text-center">
                    <div class="card borange bgteal bsblack">
                        <div class="card-body">
                            <h4 class="card-title">{{$f -> first_name}} {{$f -> last_name}}</h4>
                            <p>Contact Number: {{$f->mobile_number}}</p>
                            <p>Email: {{$f->email}}</p>
                            <p>Address: {{$f->address}}, {{$f->municipality}}, {{$f->state}}</p>
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