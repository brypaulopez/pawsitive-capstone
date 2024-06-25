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
                    <iframe src="{{$clinic->map_location}}" frameborder="0" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <h2 class="fs-1">{{$clinic->vet_name}}</h2>
                    <p>{{$clinic->vet_desc}}</p>
                    <h4>{{$clinic->vet_address}}</h4>
                </div>
                <div class="col-6">
                    <img src="/img/vets/{{$clinic->vet_image}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table table-hovered table-bordered mt-5 bblack bsblack">
                <thead>
                    <tr>
                        <th class="bgteal"><h2>Vaccine</h2></th>
                        <th class="bgorange"><h2>Price</h2></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>General Checkup</td>
                        <td>&#8369;300</td>
                    </tr>
                    <tr>
                        <td>Vaccine 5-in-1</td>
                        <td>&#8369;550</td>
                    </tr>
                    <tr>
                        <td>Vaccine Distemper Parvo</td>
                        <td>&#8369;800</td>
                    </tr>
                    <tr>
                        <td>Vaccine Anti Rabbies</td>
                        <td>&#8369;350</td>
                    </tr>
                    <tr>
                        <td>Vaccine 5-in-1 plus L4</td>
                        <td>&#8369;600</td>
                    </tr>
                    <tr>
                        <td>Vaccine Single Lepto</td>
                        <td>&#8369;350</td>
                    </tr>
                    <tr>
                        <td>Vaccine Kennel Cough</td>
                        <td>&#8369;575</td>
                    </tr>
                    <tr>
                        <td>Vaccine Feline 4-in-1</td>
                        <td>&#8369;800</td>
                    </tr>
                    <tr>
                        <td>Vaccine 6-in-1</td>
                        <td>&#8369;700</td>
                    </tr>
                    <tr>
                        <td>Tricat Vaccine</td>
                        <td>&#8369;925</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('layout/script')
</body>
</html>