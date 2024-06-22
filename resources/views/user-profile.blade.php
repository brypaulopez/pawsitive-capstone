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

        <div class="user-profile row m-5 d-flex borange">
            <div class="container mt-3  ">
                <img src="/img/user-icon.png" alt="" class="bblack">
                <h3 class="mt-3">{{Session::get('fname')}} {{Session::get('lname')}}</h3>
                <p>Settings</p>
                <div class="row bteal text-center mb-3">
                    <form action="/user-profile" method="post">
                        @csrf
                        <h2 class="mt-3">Write a Review</h2>
                        <textarea class="mt-3" name="review" id="" cols="150" rows="10" placeholder="Write a review..."required>
    
                        </textarea>
                        <span class="input-group-text" id="basic-addon1">Rating</span>
                        <select name="rating" class="form-control" id="">
                            <option value="1" >1 Star</option>
                            <option value="2" >2 Star</option>
                            <option value="3" >3 Star</option>
                            <option value="4" >4 Star</option>
                            <option value="5" >5 Star</option>
                        </select>
                        <input type="submit" class="btn bgorange bteal bsblack w-100 mt-3">
                    </form>
                </div>
            </div>

        </div>
    </div>
        
    @include('layout/script')
</body>
</html>