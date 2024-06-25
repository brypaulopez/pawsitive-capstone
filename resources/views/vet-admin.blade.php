<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
        <div class="content pt-5">
            <h1>Partners</h1>
            {{-- Create new partners that adds everything that needs to be added specially products --}}
            <a class="btn bgteal borange bsblack" href="/select-package">Create New Partners</a>
            <table class="table table-hovered table-bordered my-3 bsblack bblack">
                <thead>
                    <tr>
                        <th>Vet Name</th>
                        <th>Vet Groom</th>
                        <th>Vet Boarding</th>
                        <th>Vet Products</th>
                        <th>Vet Address</th>
                        <th>Vet Package</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                </thead>
            @foreach ($vet as $v)
                <tbody>
                    <tr>
                        <td>{{$v -> vet_name}}</td>
                        <td>{{$v -> vet_groom}}</td>
                        <td>{{$v -> vet_boarding}}</td>
                        <td>{{$v -> vet_products}}</td>
                        <td>{{$v -> vet_address}}</td>
                        <td>{{$v -> vet_package}}</td>
                        <td>
                            <a href="/vet-admin/{{$v -> vet_id}}" class="btn bgteal">View</a>
                        </td>
                        <td>
                            <form action="vet-admin/{{$v -> vet_id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn bgorange" type="submit" value="DELETE">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach 
            </table>
            {{$vet->onEachSide(1)->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>