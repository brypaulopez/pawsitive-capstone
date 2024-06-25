<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    <div class="content pt-5">
        <div class="card">
            <div class="card-body">
                <h1>Edit Dogs</h1>
                <form action="/dogs-admin/{{$dogs->dogs_id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Name</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_name}}" name="dog_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Description</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_desc}}" name="dog_desc">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Health</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_health}}" name="dog_health">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Grooming</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_grooming}}" name="dog_grooming">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Exercise</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_exercise}}" name="dog_exercise">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Training</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_training}}" name="dog_training">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Nutrition</span>
                        <input type="text" class="form-control" value="{{$dogs->dog_nutrition}}" name="dog_nutrition">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Affectionate with Family</span>
                        <input type="number" class="form-control" value="{{$dogs->affectionate_with_family}}" name="affectionate_with_family">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Dogs</span>
                        <input type="number" class="form-control" value="{{$dogs->good_with_dogs}}" name="good_with_dogs">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Children</span>
                        <input type="number" class="form-control" value="{{$dogs->good_with_children}}" name="good_with_children">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Shedding Level</span>
                        <input type="number" class="form-control" value="{{$dogs->shedding_level}}" name="shedding_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Grooming Frequency</span>
                        <input type="number" class="form-control" value="{{$dogs->grooming_frequency}}" name="grooming_frequency">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Drooling Level</span>
                        <input type="number" class="form-control" value="{{$dogs->drooling_level}}" name="drooling_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Coat Type</span>
                        <input type="text" class="form-control" value="{{$dogs->coat_type}}" name="coat_type">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Coat Length</span>
                        <input type="text" class="form-control" value="{{$dogs->coat_length}}" name="coat_length">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Strangers</span>
                        <input type="number" class="form-control" value="{{$dogs->good_with_strangers}}" name="good_with_strangers">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Playful</span>
                        <input type="number" class="form-control" value="{{$dogs->playful}}" name="playful">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Protective Nature</span>
                        <input type="number" class="form-control" value="{{$dogs->protective_nature}}" name="protective_nature">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Adaptability Level</span>
                        <input type="number" class="form-control" value="{{$dogs->adaptability_level}}" name="adaptability_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Trainability Level</span>
                        <input type="number" class="form-control" value="{{$dogs->trainability_level}}" name="trainability_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Barking Level</span>
                        <input type="number" class="form-control" value="{{$dogs->barking_level}}" name="barking_level">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Energy Level</span>
                        <input type="number" class="form-control" value="{{$dogs->energy_level}}" name="energy_level">
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>