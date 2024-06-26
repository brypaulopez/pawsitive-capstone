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
            <div class="col-12 mt-5 grooming-container">
                <img src="img/trainer-svc.jpg" alt="" class="w-100 rounded-pill borange">
                <div class="col-6 trainer-overlay">
                    <h2 style="font-size: 100px;" class="">Pawsitive Precision <br>Trainers!</h2>
                </div>
            </div>
            <div class="col-12 text-center mt-5 bgorange bteal">
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
                            <input type="submit" class="btn normal-btn bdteal bgteal w-100" id="" value="Find Trainers Nearby">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>