<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <h1>Input Vet Details</h1>
    @if ($package == 'a')
    <form action="/vet-admin" method="POST" enctype="multipart/form-data">
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
    @elseif ($package == 'b')
    <form action="/vet-admin" method="POST" enctype="multipart/form-data">
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
    @else
    <form action="/vet-admin" method="POST" enctype="multipart/form-data">
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
    @endif
</body>
</html>