<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <h1>Create Partner</h1>
    <form action="create-partners/select-package" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Name</span>
            <input type="text" class="form-control" name="name">
        </div>
        {{-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Groom</span>
            <select name="groom" class="form-control" id="">
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
        </div> --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet City</span>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Municipality</span>
            <input type="text" class="form-control" name="municipality">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet State</span>
            <input type="text" class="form-control" name="state">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Address</span>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vet Package</span>
            <select name="package" class="form-control" id="">
                <option value="a">Package A</option>
                <option value="b">Package B</option>
                <option value="c">Package C</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Image</span>
            <input type="file" class="form-control" name="image">
        </div>
        <hr>
        <input type="submit" class="btn bgteal w-100">
    </form>
</body>
</html>