<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container-fluid">
        <div class="container mt-3">
            <div class="row rounded bsorange">
                <div class="col-7 bgorange rounded box signup-row">
                    
                </div>
                <img src="img/trainer-signup2.webp" alt="" class="trainer-image">
                <div class="col-5 rounded pe-0">
                    <div class="card bblack">
                        <div class="card-body text-center">
                            <h1 class="torange">Trainer Signup</h1>
                            <hr>
                            <form action="/trainer-creation" method="POST">
                                <p style="font-size: 13px">Hey, enter your details to be part of Pawsitive Precision</p>
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-map-pin"></i></span>
                                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-arrow"></i></span>
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-pin"></i></span>
                                    <input type="text" class="form-control" name="municipality" placeholder="Municipality" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-map-location-dot"></i></span>
                                    <input type="text" class="form-control" name="state" placeholder="State" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></i></span>
                                    <input type="text" class="form-control" name="number" placeholder="Mobile Number" required>
                                </div>
                                <hr>
                                <input type="submit" class="btn bgorange w-100 signup-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>