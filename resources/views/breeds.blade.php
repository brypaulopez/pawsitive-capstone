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
            <div class="col-12 mt-5 clinic-container text-center">
                <img src="/img/breeds-svc.jpg" alt="" class="w-75 rounded-pill borange">
            </div>
            <div class="col-12 text-center">
                <h2 class="" style="font-size: 70px;">Dog Breeds</h2>
            </div>
            <div class="d-flex flex-row">
                @if (url()->current() == url('breeds/a'))
                <div class="px-1">
                    <form action="/breeds/{{'a'}}" method="POST">
                        @csrf
                        <input type="hidden" value="a" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="A">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'a'}}" method="POST">
                        @csrf
                        <input type="hidden" value="a" name="letter">
                        <input type="submit" class="btn bgteal borange" value="A">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/b'))
                <div class="px-1">
                    <form action="/breeds/{{'b'}}" method="POST">
                        @csrf
                        <input type="hidden" value="b" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="B">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'b'}}" method="POST">
                        @csrf
                        <input type="hidden" value="b" name="letter">
                        <input type="submit" class="btn bgteal borange" value="B">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/c'))
                <div class="px-1">
                    <form action="/breeds/{{'c'}}" method="POST">
                        @csrf
                        <input type="hidden" value="c" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="C">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'c'}}" method="POST">
                        @csrf
                        <input type="hidden" value="c" name="letter">
                        <input type="submit" class="btn bgteal borange" value="C">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/d'))
                <div class="px-1">
                    <form action="/breeds/{{'d'}}" method="POST">
                        @csrf
                        <input type="hidden" value="d" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="D">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'d'}}" method="POST">
                        @csrf
                        <input type="hidden" value="d" name="letter">
                        <input type="submit" class="btn bgteal borange" value="D">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/e'))
                <div class="px-1">
                    <form action="/breeds/{{'e'}}" method="POST">
                        @csrf
                        <input type="hidden" value="e" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="E">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'e'}}" method="POST">
                        @csrf
                        <input type="hidden" value="e" name="letter">
                        <input type="submit" class="btn bgteal borange" value="E">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/f'))
                <div class="px-1">
                    <form action="/breeds/{{'f'}}" method="POST">
                        @csrf
                        <input type="hidden" value="f" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="F">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'f'}}" method="POST">
                        @csrf
                        <input type="hidden" value="f" name="letter">
                        <input type="submit" class="btn bgteal borange" value="F">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/g'))
                <div class="px-1">
                    <form action="/breeds/{{'g'}}" method="POST">
                        @csrf
                        <input type="hidden" value="g" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="G">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'g'}}" method="POST">
                        @csrf
                        <input type="hidden" value="g" name="letter">
                        <input type="submit" class="btn bgteal borange" value="G">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/h'))
                <div class="px-1">
                    <form action="/breeds/{{'h'}}" method="POST">
                        @csrf
                        <input type="hidden" value="h" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="H">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'h'}}" method="POST">
                        @csrf
                        <input type="hidden" value="h" name="letter">
                        <input type="submit" class="btn bgteal borange" value="H">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/i'))
                <div class="px-1">
                    <form action="/breeds/{{'i'}}" method="POST">
                        @csrf
                        <input type="hidden" value="i" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="I">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'i'}}" method="POST">
                        @csrf
                        <input type="hidden" value="i" name="letter">
                        <input type="submit" class="btn bgteal borange" value="I">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/j'))
                <div class="px-1">
                    <form action="/breeds/{{'j'}}" method="POST">
                        @csrf
                        <input type="hidden" value="j" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="J">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'j'}}" method="POST">
                        @csrf
                        <input type="hidden" value="j" name="letter">
                        <input type="submit" class="btn bgteal borange" value="J">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/k'))
                <div class="px-1">
                    <form action="/breeds/{{'k'}}" method="POST">
                        @csrf
                        <input type="hidden" value="k" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="K">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'k'}}" method="POST">
                        @csrf
                        <input type="hidden" value="k" name="letter">
                        <input type="submit" class="btn bgteal borange" value="K">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/l'))
                <div class="px-1">
                    <form action="/breeds/{{'l'}}" method="POST">
                        @csrf
                        <input type="hidden" value="l" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="L">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'l'}}" method="POST">
                        @csrf
                        <input type="hidden" value="l" name="letter">
                        <input type="submit" class="btn bgteal borange" value="L">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/m'))
                <div class="px-1">
                    <form action="/breeds/{{'m'}}" method="POST">
                        @csrf
                        <input type="hidden" value="m" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="M">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'m'}}" method="POST">
                        @csrf
                        <input type="hidden" value="m" name="letter">
                        <input type="submit" class="btn bgteal borange" value="M">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/n'))
                <div class="px-1">
                    <form action="/breeds/{{'n'}}" method="POST">
                        @csrf
                        <input type="hidden" value="n" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="N">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'n'}}" method="POST">
                        @csrf
                        <input type="hidden" value="n" name="letter">
                        <input type="submit" class="btn bgteal borange" value="N">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/o'))
                <div class="px-1">
                    <form action="/breeds/{{'o'}}" method="POST">
                        @csrf
                        <input type="hidden" value="o" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="O">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'o'}}" method="POST">
                        @csrf
                        <input type="hidden" value="o" name="letter">
                        <input type="submit" class="btn bgteal borange" value="O">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/p'))
                <div class="px-1">
                    <form action="/breeds/{{'p'}}" method="POST">
                        @csrf
                        <input type="hidden" value="p" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="P">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'p'}}" method="POST">
                        @csrf
                        <input type="hidden" value="p" name="letter">
                        <input type="submit" class="btn bgteal borange" value="P">
                    </form>
                </div>
                @endif
                <div class="px-1">
                    <a class="btn bg-light borange">Q</a>
                </div>
                @if (url()->current() == url('breeds/r'))
                <div class="px-1">
                    <form action="/breeds/{{'r'}}" method="POST">
                        @csrf
                        <input type="hidden" value="r" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="R">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'r'}}" method="POST">
                        @csrf
                        <input type="hidden" value="r" name="letter">
                        <input type="submit" class="btn bgteal borange" value="R">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/s'))
                <div class="px-1">
                    <form action="/breeds/{{'s'}}" method="POST">
                        @csrf
                        <input type="hidden" value="s" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="S">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'s'}}" method="POST">
                        @csrf
                        <input type="hidden" value="s" name="letter">
                        <input type="submit" class="btn bgteal borange" value="S">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/t'))
                <div class="px-1">
                    <form action="/breeds/{{'t'}}" method="POST">
                        @csrf
                        <input type="hidden" value="t" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="T">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'t'}}" method="POST">
                        @csrf
                        <input type="hidden" value="t" name="letter">
                        <input type="submit" class="btn bgteal borange" value="T">
                    </form>
                </div>
                @endif
                <div class="px-1">
                    <a class="btn bg-light borange">U</a>
                </div>
                @if (url()->current() == url('breeds/v'))
                <div class="px-1">
                    <form action="/breeds/{{'v'}}" method="POST">
                        @csrf
                        <input type="hidden" value="v" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="V">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'v'}}" method="POST">
                        @csrf
                        <input type="hidden" value="v" name="letter">
                        <input type="submit" class="btn bgteal borange" value="V">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/w'))
                <div class="px-1">
                    <form action="/breeds/{{'w'}}" method="POST">
                        @csrf
                        <input type="hidden" value="w" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="W">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'w'}}" method="POST">
                        @csrf
                        <input type="hidden" value="w" name="letter">
                        <input type="submit" class="btn bgteal borange" value="W">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/x'))
                <div class="px-1">
                    <form action="/breeds/{{'x'}}" method="POST">
                        @csrf
                        <input type="hidden" value="x" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="X">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'x'}}" method="POST">
                        @csrf
                        <input type="hidden" value="x" name="letter">
                        <input type="submit" class="btn bgteal borange" value="X">
                    </form>
                </div>
                @endif
                @if (url()->current() == url('breeds/y'))
                <div class="px-1">
                    <form action="/breeds/{{'y'}}" method="POST">
                        @csrf
                        <input type="hidden" value="y" name="letter">
                        <input type="submit" class="btn bgorange bteal" value="Y">
                    </form>
                </div>
                @else
                <div class="px-1">
                    <form action="/breeds/{{'y'}}" method="POST">
                        @csrf
                        <input type="hidden" value="y" name="letter">
                        <input type="submit" class="btn bgteal borange" value="Y">
                    </form>
                </div>
                @endif
                <div class="px-1">
                    <a class="btn bg-light borange">Z</a>
                </div>
            </div>
            <div class="row mt-3 g-4 mb-5">
                @foreach ($dog as $d)
                    <div class="col-4">
                        <div class="card bteal bsblack bgorange">
                            <a href="/traits/{{$d -> dog_name}}">
                                <img src="/img/dogs/{{$d -> dog_image}}" alt="" class="card-img-top w-100">
                            </a>
                            <div class="card-body">
                                <h2>{{$d -> dog_name}}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$dog->onEachSide(1)->links('pagination::bootstrap-5')}}
        </div>
    </div>
    @include('layout/script')
</body>
</html>