<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @if (Session::get('role') == 1)
        @include('layout/admin-nav')
    @else
        @include('layout/nav')
    @endif
    {{-- NO --}}
    @if ($package == 'n')
    <h1>Input Vet Clinic Details - You are purchasing Membership only</h1>
    @if (Session::has('id'))
        <form action="/vet-admin" method="POST" enctype="multipart/form-data">
    @else
        <form action="/payment" method="POST" enctype="multipart/form-data" class="p-5">
    @endif
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name" required>
        </div>
        <input type="hidden" class="form-control" name="groom" value="no">
        <input type="hidden" class="form-control" name="boarding" value="no">
        <input type="hidden" class="form-control" name="products" value="no">
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="" type="hidden">
                <option value="yes">yes</option>
                <option value="no" selected>no</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet City</span>
            <input type="text" class="form-control" name="city" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Municipality</span>
            <input type="text" class="form-control" name="municipality" placeholder="Put N/A if none" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet State</span>
            <input type="text" class="form-control" name="state" required>
        </div>
        <input type="hidden" class="form-control" name="package" value="n">
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Package</span>
            <select name="package" class="form-control" id="">
                <option value="n" selected>No Package</option>
                <option value="a" >Package A</option>
                <option value="b">Package B</option>
                <option value="c">Package C</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Address</span>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Description</span>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Image</span>
            <input type="file" class="form-control" name="image">
        </div>
        <input type="submit" class="btn bgteal w-100">
    </form>
    </div>
    {{-- A --}}
    @elseif ($package == 'a')
    <h1>Input Vet Clinic Details - You are purchasing Package A</h1>
    @if (Session::has('id'))
        <form action="/vet-admin" method="POST" enctype="multipart/form-data">
    @else
        <form action="/payment" method="POST" enctype="multipart/form-data" class="p-5">
    @endif
        @csrf
        <input type="hidden" class="form-control" name="products" value="no">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Boarding</span>
            <select name="boarding" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet City</span>
            <input type="text" class="form-control" name="city" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Municipality</span>
            <input type="text" class="form-control" name="municipality" placeholder="put N/A if none" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet State</span>
            <input type="text" class="form-control" name="state" required>
        </div>
        <input type="hidden" class="form-control" name="package" value="a">
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Package</span>
            <select name="package" class="form-control" id="">
                <option value="n" selected>No Package</option>
                <option value="a" >Package A</option>
                <option value="b">Package B</option>
                <option value="c">Package C</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Address</span>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Description</span>
            <input type="text" class="form-control" name="description" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Image</span>
            <input type="file" class="form-control" name="image" required>
        </div>
        <input type="submit" class="btn bgteal w-100">
    </form>
    {{-- B --}}
    @elseif ($package == 'b')
    <h1>Input Vet Clinic Details - You are purchasing Package B</h1>
    @if (Session::has('id'))
        <form action="/vet-admin" method="POST" enctype="multipart/form-data">
    @else
        <form action="/payment" method="POST" enctype="multipart/form-data" class="p-5">
    @endif
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Boarding</span>
            <select name="boarding" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Products</span>
            <select name="products" class="form-control" id="">
                <option value="yes" selected>yes</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet City</span>
            <input type="text" class="form-control" name="city" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Municipality</span>
            <input type="text" class="form-control" name="municipality" placeholder="put N/A if none" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet State</span>
            <input type="text" class="form-control" name="state" required>
        </div>
        <input type="hidden" class="form-control" name="package" value="b">
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Package</span>
            <select name="package" class="form-control" id="">
                <option value="n" selected>No Package</option>
                <option value="a" >Package A</option>
                <option value="b">Package B</option>
                <option value="c">Package C</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Address</span>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Description</span>
            <input type="text" class="form-control" name="description" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Image</span>
            <input type="file" class="form-control" name="image" required>
        </div>
        <input type="submit" class="btn bgteal w-100">
    </form>
    {{-- C --}}
    @elseif ($package == 'c')
    <h1>Input Vet Clinic Details - You are purchasing Package C</h1>
    @if (Session::has('id'))
        <form action="/vet-admin" method="POST" enctype="multipart/form-data">
    @else
        <form action="/payment" method="POST" enctype="multipart/form-data" class="p-5">
    @endif
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Boarding</span>
            <select name="boarding" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Products</span>
            <select name="products" class="form-control" id="">
                <option value="yes" selected>yes</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet City</span>
            <input type="text" class="form-control" name="city" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Municipality</span>
            <input type="text" class="form-control" name="municipality" placeholder="put N/A if none" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet State</span>
            <input type="text" class="form-control" name="state" required>
        </div>
        <input type="hidden" class="form-control" name="package" value="c">
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Package</span>
            <select name="package" class="form-control" id="">
                <option value="n" selected>No Package</option>
                <option value="a" >Package A</option>
                <option value="b">Package B</option>
                <option value="c">Package C</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Address</span>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Description</span>
            <input type="text" class="form-control" name="description" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Image</span>
            <input type="file" class="form-control" name="image" required>
        </div>
        <input type="submit" class="btn bgteal w-100">
    </form>
    @else
        <h1>Wrong Data! Please rest assured as we will fix this as soon as possible. Thanks!</h1>
    @endif
    @include('layout/script')
</body>
</html>