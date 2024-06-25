<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="container mt-5">
        <div class="row">
            <h2 class="fs-1">Location</h2>
            <div class="col-12">
                <section class="bsblack borange rounded">
                    <iframe src="{{$board->map_location}}" frameborder="0" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <h2 class="fs-1">{{$board->vet_name}}</h2>
                    <p>{{$clinic->vet_address}}</p>
                    <div class="bteal ps-3">
                        <h2>Vet Boarding</h2>
                        <h2>Inclusions: {{$board->board_inclusions}}</h2>
                        <h3>Price: {{$board->board_price}}</h3>
                    </div>
                </div>
                <div class="col-6">
                    <img src="/img/vets/{{$clinic->vet_image}}" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>