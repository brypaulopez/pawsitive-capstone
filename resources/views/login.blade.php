<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container-fluid">
        <div class="container" style="margin-top: 110px;">
            <div class="row bsteal rounded">
                <div class="col-6 ps-0 rounded ">
                    <form action="/login" method="POST" class="bblack rounded px-5 pt-5">
                    <div class="col-3">
                        <img src="img/pawsitive-logo1.png" alt="" class="w-100">
                    </div>
                    <h2 class="torage mt-3" style="font-size: 60px;">Hello,</h2>
                    <h1 class="tteal" style="font-size: 80px;">Welcome!</h1>
                        @csrf
                        @include('alert/wrong-password')
                        @include('alert/no-account')
                        <div class="input-group mb-3 mt-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-dice-d6"></i></span>
                            <input type="text" class="form-control" name="uname" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="row">
                            <div class="col-4"><input type="checkbox" name="remember" id=""> <span> Remember me</span></div>
                            <div class="col-4"></div>
                            <div class="col-4"><a href="#">Forgot password?</a></div>
                        </div>
                        <div class="row mt-5 text-center">
                            <div class="col-2"></div>
                            <div class="col-4"><input type="submit" class="btn bgteal twhite w-100 login-btn" value="Login"></div>
                            <div class="col-4"><a href="/signup" class="btn w-100 bteal tteal lsignup-btn">Signup</a></div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row mt-5 mb-3 pt-3">
                            <div class="col-2"><span><h4>Follow</h4></span></div>
                            <div class="col-1"><i class="fa-brands fa-instagram fa-xl"></i></div>
                            <div class="col-1"><i class="fa-brands fa-facebook fa-xl"></i></div>
                            <div class="col-1"><i class="fa-brands fa-x-twitter fa-xl"></i></div>
                            <div class="col-6"></div>
                        </div>
                    </form>
                </div>
                <div class="col-6 p-0 rounded bgteal box1 login-row">

                </div>
                <img src="img/login-page1.webp" alt="" class="login-image">
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>