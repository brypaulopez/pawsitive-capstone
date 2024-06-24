<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container-fluid p-0">
        @if (Session::has('id'))
        @include('layout/cart')
        @else
        @endif
        {{--  --}}
        <div class="image-container container-fluid text-center p-0">
            <img src="img/welcome-page2.jpeg" alt="" style="height: 860px !important;">
            <div class="overlay">
                {{-- <h2 class="tteal" style="margin-top: 20%; font-size: 40px;">Discover a community where your pet's well-being is our priority.</h2> --}}
                <h1 class="torange px-5 mb-0" style="font-size: 90px; padding-top: 15%;">Welcome to Pawsitive Precision</h1>
                <p class="text-white px-5 paragraph" style="font-size: 30px">where every wagging tail is a testament to our <b class="fs-1">love</b> and <b class="fs-1">care</b>.</p>
                <div class="row mt-3 p-0 m-0">
                    <p class="text-white " style="font-size: 20px;">At Pawsitive Precision, we believe every dog deserves a happy and healthy life.
                        <br>Discover a community where your pet's well-being is our priority.
                    </p>
                    <div class="col-3 p-0 m-0"></div>
                    @if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3)
                        <div class="col-3"><a href="/services" class="w-100 btn bgteal borange home-svc normal-btn"><span>Check our <b>Services</b></span></a></div>
                    @else
                    <div class="col-3"><a href="/noaccount/signup" id="no-account" onclick="" class="w-100 btn bgteal borange home-svc normal-btn"><span>Check our <b>Services</b></span></a></div>
                    @endif
                    @if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3)
                        <div class="col-3"><a href="/products" class="w-100 btn bgorange bteal home-prdct normal-btn"><span>Buy our <b>Products</b></span></a></div>
                    @else
                    <div class="col-3"><a href="/noaccount/signup" class="w-100 btn bgorange bteal home-prdct normal-btn"><span>Buy our <b>Products</b></span></a></div>
                    <div class="col-3 p-0 m-0"></div>
                    @endif
                </div>
            </div>
        </div>
        {{-- Connect with us (partnership) --}}
        {{-- !What is Pawsitive (this is showing only for those without accounts) with register --}}
        @if (Session::has('id'))
        <div class="container" style="margin-top: 100px;">
            <div class="row text-center">
                <h1 class="torange" style="font-size: 50px;">What is Pawsitive Precision all about?</h1>
                <p class="mt-2 px-5 fs-5"><b>Pawsitive Precision</b> is your trusted partner in ensuring the health and happiness of your beloved dogs. We offer information and comprehensive suite of services and products tailored to meet all your pet's needs.</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card bgteal borange bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Our Services</h2>
                            <ul>
                                <li class="mt-3">
                                    <b>Veterinary Care:</b> Our experienced vet partners provide top-tier medical care, from routine check-ups to specialized treatments, ensuring your dog stays healthy and happy.
                                </li>
                                <li>
                                    <b>Pet Products:</b> Explore our curated selection of high-quality products, including nutritious food, fun toys, grooming essentials, and more, designed to keep your pet thriving.
                                </li>
                                <li>
                                    <b>Boarding Services:</b> Need a safe and loving place for your dog while you're away? Our boarding facilities offer a comfortable and caring environment, giving you peace of mind.
                                </li>
                                <li>
                                    <b>Grooming Services:</b> Keep your dog looking and feeling their best with our professional partner's grooming services, tailored to meet the specific needs of your pet.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bgorange bteal bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Why Choose Pawsitive Precision?</h2>
                            <ul class="mt-3">
                                <li>
                                    <b>Expert Care:</b> Our team of veterinary professionals is dedicated to providing the best care for your furry friends.
                                </li>
                                <li>
                                    <b>Quality Products:</b> We offer a wide range of trusted and premium products that cater to your dog's needs.
                                </li>
                                <li>
                                    <b>Comfort and Care:</b> Our boarding and grooming services ensure your dog receives the highest level of comfort and attention.
                                </li>
                                <li>
                                    <b>Community Focused:</b> Join a community of dog lovers who prioritize the well-being of their pets.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bblack bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Become a Pawsitive Partner</h2>
                            <p class="text-center px-2 mt-3">
                                Are you a vet clinic owner or a pet shop owner? Partner with us to expand your reach and enhance your offerings. By joining the Pawsitive network, you gain access to:
                            </p>
                            <ul class="mt-3">
                                <li>
                                    <b>Exclusive Products:</b> Offer your clients the best in pet care products.
                                </li>
                                <li>
                                    <b>Collaborative Opportunities:</b> Work with a network of dedicated professionals to grow your business.
                                </li>
                                <li>
                                    <b>Marketing Support:</b> Benefit from our marketing expertise to attract more customers.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Testimonial Carousel (tentative) --}}
        <div class="row p-0 m-0 mt-5">
            <div class="review-container">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            @foreach ($reviews as $card)
                                <div class="cards  borange swiper-slide">
                                    <div class="image-content">
                                        <span class="overlays"></span>
        
                                        <div class="card-image">
                                            <img src="/img/review-icon.png" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">Anonymous</h2>
                                        <p class="desc">{{$card -> review}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- swipers --}}
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        {{-- Socials --}}
        <div class="container-fluid bgorange text-center mt-5 bteal">
            <div class="row m-0 p-5">
                <h2 class="text-white strokeb" style="font-size: 50px">Our Socials</h2>
                <div class="col-12">
                    <i class="fa-brands strokeb fa-x-twitter me-3 tdteal" style="font-size: 50px"></i>
                    <i class="fa-brands strokeb fa-facebook me-3 tdteal" style="font-size: 50px"></i>
                    <i class="fa-brands strokeb fa-instagram tdteal" style="font-size: 50px"></i>
                </div>
            </div>
        </div>
        {{-- Pawsitive TM --}}
        <div class="row mt-5 text-center p-0 m-0">
            <div class="col-12">
                <h2 class="tteal strokeb" style="font-size: 50px">Four from Pawsitive Precision &trade;</h2>
                <p>is our <b>Promise</b> to enrich the lives of our pets, our employees, our community and our world.</p>
                <p>we believe products and companies (and should!) be a platform for positive </p>
            </div>
        </div>
        {{-- Our vision --}}

        {{-- Footer --}}
        
        @else
        <div class="container" style="margin-top: 100px;">
            <div class="row text-center">
                <h1 class="torange" style="font-size: 50px;">What is Pawsitive Precision all about?</h1>
                <p class="mt-2 px-5 fs-5"><b>Pawsitive Precision</b> is your trusted partner in ensuring the health and happiness of your beloved dogs. We offer information and comprehensive suite of services and products tailored to meet all your pet's needs.</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card bgteal borange bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Our Services</h2>
                            <ul>
                                <li class="mt-3">
                                    <b>Veterinary Care:</b> Our experienced vet partners provide top-tier medical care, from routine check-ups to specialized treatments, ensuring your dog stays healthy and happy.
                                </li>
                                <li>
                                    <b>Pet Products:</b> Explore our curated selection of high-quality products, including nutritious food, fun toys, grooming essentials, and more, designed to keep your pet thriving.
                                </li>
                                <li>
                                    <b>Boarding Services:</b> Need a safe and loving place for your dog while you're away? Our boarding facilities offer a comfortable and caring environment, giving you peace of mind.
                                </li>
                                <li>
                                    <b>Grooming Services:</b> Keep your dog looking and feeling their best with our professional partner's grooming services, tailored to meet the specific needs of your pet.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bgorange bteal bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Why Choose Pawsitive Precision?</h2>
                            <ul class="mt-3">
                                <li>
                                    <b>Expert Care:</b> Our team of veterinary professionals is dedicated to providing the best care for your furry friends.
                                </li>
                                <li>
                                    <b>Quality Products:</b> We offer a wide range of trusted and premium products that cater to your dog's needs.
                                </li>
                                <li>
                                    <b>Comfort and Care:</b> Our boarding and grooming services ensure your dog receives the highest level of comfort and attention.
                                </li>
                                <li>
                                    <b>Community Focused:</b> Join a community of dog lovers who prioritize the well-being of their pets.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bblack bsblack" style="height: 622px;">
                        <div class="card-body">
                            <h2 class="card-title text-center">Become a Pawsitive Partner</h2>
                            <p class="text-center px-2 mt-3">
                                Are you a vet clinic owner or a pet shop owner? Partner with us to expand your reach and enhance your offerings. By joining the Pawsitive network, you gain access to:
                            </p>
                            <ul class="mt-3">
                                <li>
                                    <b>Exclusive Products:</b> Offer your clients the best in pet care products.
                                </li>
                                <li>
                                    <b>Collaborative Opportunities:</b> Work with a network of dedicated professionals to grow your business.
                                </li>
                                <li>
                                    <b>Marketing Support:</b> Benefit from our marketing expertise to attract more customers.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row top bteal bgorange text-center">
                <div class="col-8 mt-3">
                    <h2 class="mt-3">Sign Up Today!</h2>
                    <p class="px-5">Join the Pawsitive family and experience the difference. Whether you're looking to provide the best care for your dog or expand your business as a partner, Pawsitive Precision is here to support you every step of the way.</p>
                    <a href="/partnership" id="partnership" class="btn bgteal bwhite mt-3 fs-4">Be a partner now!</a>
                </div>
                <div class="col-4 text-center">
                    <img src="img/group.png" alt="" class="w-75" style="">
                </div>
            </div>
            <div class="row bottom borange bgteal">
                <div class="col-4 text-center pt-3">
                    <img src="img/group-dog.png" alt="" class="w-75" style="">
                </div>
                <div class="col-8 mt-5 text-center">
                    <h2 class="mt-4">Register Now!</h2>
                    <p class="px-5">Join the Pawsitive Dog Care family and give your furry friend the best care possible. By signing up, you'll gain access to: <b> Premium Pet Products</b>, <b>Our Services</b>, & <b>Dog information</b></p>
                    
                    <a href="/signup" id="registration" class="btn bgorange bwhite mt-3 fs-4">Sign Up for an account!</a>
                </div>
            </div>
        </div>
        @endif
    </div>
    @include('layout/script')
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 1,
            spaceBetween: 25,
            loop: true,
            centeredSlides: true,
            fade: 'true',
            slidesPerGroupSkip: 1,
            grabCursor: true,
            keyboard: {
            enabled: true,
          },
          breakpoints: {
            769: {
              slidesPerView: 3,
            },
          },
        //   scrollbar: {
        //     el: ".swiper-scrollbar",
        //   },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
          },
        });
      </script>
</body>
</html>