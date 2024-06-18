<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="container-fluid mt-5">
        <div class="container">
            <h1>Dogs</h1>
    <a class="btn btn-primary" href="{{url('/dogs-admin/create-dogs')}}">Create New Dog</a>
    <table class="table table-hovered table-bordered my-3">
        <thead>
            <tr>
                <th>Dog Name</th>
                <th>Dog Description</th>
                <th>Dog Nutrition</th>
                <th>Dog Coat Type</th>
                <th>Dog Coat Lenght</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    @foreach ($dogs as $d)
        <tbody>
            <tr>
                <td>{{$d -> dog_name}}</td>
                <td>{{$d -> dog_desc}}</td>
                <td>{{$d -> dog_nutrition}}</td>
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
                        <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach 
    </table>
        </div>
    </div>
    @include('layout/script')
</body>
</html>