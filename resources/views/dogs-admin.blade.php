<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/admin-nav')
    <div class="content pt-5">
        <h1>Dogs</h1>
        <a class="btn bgteal borange bsblack" href="{{url('/dogs-admin/create-dogs')}}">Create New Dog</a>
    {{$dog->onEachSide(5)->links('pagination::bootstrap-5')}}
    <table class="table table-hovered table-bordered my-3 bsblack bblack">
        <thead>
            <tr>
                <th>Dog Name</th>
                {{-- <th>Dog Description</th>
                <th>Dog Nutrition</th> --}}
                <th>Dog Coat Type</th>
                <th>Dog Coat Lenght</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        @foreach ($dog as $d)
            <tbody>
                <tr>
                    <td>{{$d -> dog_name}}</td>
                    {{-- <td>{{$d -> dog_desc}}</td>
                    <td>{{$d -> dog_nutrition}}</td> --}}
                    <td>{{$d -> coat_type}}</td>
                    <td>{{$d -> coat_length}}</td>
                    <td>
                        <a href="dogs-admin/{{$d -> dogs_id}}" class="btn bgteal">View</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="dogs-admin/edit-dogs/{{$d -> dogs_id}}">Edit</a>
                    </td>
                    <td>
                        <form action="dogs-admin/{{$d -> dogs_id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn bgdorange" type="submit" value="DELETE">
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach 
    </table>
    {{$dog->onEachSide(5)->links('pagination::bootstrap-5')}}
    </div>
    @include('layout/script')
</body>
</html>