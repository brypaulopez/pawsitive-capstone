@if (Session::get('id') && Session::get('role') == 0 || Session::get('role') == 3)
<div class="container-fluid sticky-top bgdteal">
    <nav class="navbar navbar-expand-lg" style="padding: 0 150px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/img/pawsitive-logo2.webp" alt="pawsitive-logo" style="width: 80px; height: 80px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active user-btn" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link user-btn" href="/breeds">Breeds A-Z</a>
            </li>
            <li class="nav-item">
              <a class="nav-link user-btn" href="/products">Products</a>
            </li>
            <li class="nav-item dropdown">
              <a href="/services" class="nav-link dropdown-toggle user-btn"  role="button" data-bs-toggle="dropdown">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item user-btn" href="/search-clinic">Clinic</a></li>
                <li><a class="dropdown-item user-btn" href="/search-grooming">Grooming</a></li>
                <li><a class="dropdown-item user-btn" href="/search-boarding">Boarding</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item user-btn" href="#">Looking for a trainer?</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link user-btn user-btn" href="/about-us">About Us</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="nav-link btn bgdteal torange fs-5 navi-cart counter-container" href="" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                <span id="cart-counter" style="font-size: 18px;">
                  {{$showCart->count()}}
                </span><i class="fa-solid fa-cart-shopping fa-2xl mt-3"></i>
              </button>
            </li>
            <li class="nav-item">
              <a class="nav-link btn bgdteal torange fs-5 navi-logout" href="/logout"><h2 class="m-0">Logout</h2></a>
            </li>
            <li class="nav-item">
              <a class="pt-1 nav-link btn bgdteal torange fs-5 navi-logout" href="/user-profile"><h2 class="m-0"></h2><i class="fa-solid fa-user fa-xl mt-3 pt-1"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
@elseif(Session::get('id') && Session::get('role') == 1)
<div class="sidebar">
  <a id="" class="image" href="/dogs-admin"><img src="/img/pawsitive-logo2.webp" alt="pawsitive-logo" class="w-100"></a>
  @if (url()->current()==url('/dogs-admin'))
      <a id="admin-dogs" class="active" href="/dogs-admin">Dogs</a>
  @else
      <a id="admin-dogs" class="" href="/dogs-admin">Dogs</a>
  @endif
  @if (url()->current()==url('/vet-admin'))
      <a id="admin-partners" class="active" href="/vet-admin">Partners</a>
  @else
      <a id="admin-partners" class="" href="/vet-admin">Partners</a>
  @endif
  <a id="admin-btn" href="/">Orders</a>
  <a id="admin-btn" href="/logout">Logout</a>
</div>  
@else
<div class="container-fluid sticky-top bgorange">
    <nav class="navbar navbar-expand-lg" style="padding: 0 150px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/img/pawsitive-logo2.webp" alt="pawsitive-logo" style="width: 80px; height: 80px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn bgorange tteal fs-5 navi-btn" id="login" href="/login"><h2 class="m-0">Login</h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn bgorange tteal fs-5 navi-btn" id="signup" href="/signup"><h2 class="m-0">Signup</h2></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
@endif