<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="container mt-5">
        <div class="row text-center rounded">
            <img src="/img/user-banner.jpg" alt="" class="rounded-pill borange p-0">
        </div>
        <div class="user-profile row m-5 d-flex borange rounded bsblack">
            <div class="container text-center m-0 p-0">
                <div class="bgteal pt-3">
                    <img src="/img/user-icon.png" alt="" class="bblack rounded-circle">
                    <h3 class="mt-3">{{Session::get('fname')}} {{Session::get('lname')}}</h3>
                    <hr>
                </div>
                <div class="row text-center mb-3">
                    <form action="/user-profile" method="post">
                        @csrf
                        <h2 class="mt-3">Write a Review</h2>
                        <textarea class="mt-3" name="review" id="" cols="150" rows="10" placeholder="Write a review..." required></textarea>
                        <br>
                        @error('review')
                            <span class="fs-9 text-danger">{{$message}}</span>
                        @enderror
                        <span class="input-group-text" id="basic-addon1">Rating</span>
                        <select name="rating" class="form-control bteal" id="">
                            <option value="1" >1 Star</option>
                            <option value="2" >2 Star</option>
                            <option value="3" >3 Star</option>
                            <option value="4" >4 Star</option>
                            <option value="5" >5 Star</option>
                        </select>
                        <input type="submit" class="btn normal-btn bgorange bteal w-100 mt-3">
                    </form>
                </div>
            </div>

        </div>
    </div>
    @include('layout/footer')
    @include('layout/script')
</body>
</html>