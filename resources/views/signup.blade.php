<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container-fluid">
        <div class="container" style="margin-top: 130px;">
            <div class="row rounded bsorange">
                <div class="col-7 bgorange rounded box signup-row">
                    
                </div>
                <img src="img/signup-page1.png" alt="" class="signup-image">
                <div class="col-5 rounded pe-0">
                    <div class="card bblack">
                        <div class="card-body text-center">
                            <h1 class="torange">User Signup</h1>
                            <hr>
                            <form action="/signup" method="POST">
                                <p style="font-size: 13px">Hey, enter your details to create your account</p>
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
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-dice-d6"></i></span>
                                    <input type="text" class="form-control" name="uname" placeholder="Username" required>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                    <span class="fs-9 text-danger"> {{$message}}</span>
                                @enderror
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