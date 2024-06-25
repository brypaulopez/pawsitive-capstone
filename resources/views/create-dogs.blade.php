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
                <h1>Create New Dog</h1>
                <form action="/dogs-admin" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Name</span>
                        <input type="text" class="form-control" name="dog_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Description</span>
                        <input type="text" class="form-control" name="dog_desc">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Health</span>
                        <input type="text" class="form-control" name="dog_health">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Grooming</span>
                        <input type="text" class="form-control" name="dog_grooming">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Exercise</span>
                        <input type="text" class="form-control" name="dog_exercise">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Training</span>
                        <input type="text" class="form-control" name="dog_training">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dog Nutrition</span>
                        <input type="text" class="form-control" name="dog_nutrition">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Affectionate with Family</span>
                        <input type="number" placeholder="number" class="form-control" name="affectionate_with_family">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Dogs</span>
                        <input type="number" placeholder="number" class="form-control" name="good_with_dogs">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Children</span>
                        <input type="number" placeholder="number" class="form-control" name="good_with_children">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Shedding Level</span>
                        <input type="number" placeholder="number" class="form-control" name="shedding_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Grooming Frequency</span>
                        <input type="number" placeholder="number" class="form-control" name="grooming_frequency">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Drooling Level</span>
                        <input type="number" placeholder="number" class="form-control" name="drooling_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Coat Type</span>
                        <input type="text" class="form-control" name="coat_type">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Coat Length</span>
                        <input type="text" class="form-control" name="coat_length">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Good with Strangers</span>
                        <input type="number" placeholder="number" class="form-control" name="good_with_strangers">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Playful</span>
                        <input type="number" placeholder="number" class="form-control" name="playful">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Protective Nature</span>
                        <input type="number" placeholder="number" class="form-control" name="protective_nature">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Adaptability Level</span>
                        <input type="number" placeholder="number" class="form-control" name="adaptability_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Trainability Level</span>
                        <input type="number" placeholder="number" class="form-control" name="trainability_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Barking Level</span>
                        <input type="number" placeholder="number" class="form-control" name="barking_level">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Energy Level</span>
                        <input type="number" placeholder="number" class="form-control" name="energy_level">
                    </div> 
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Image</span>
                        <input type="file" class="form-control" name="image">
                    </div> 
                    <input type="submit" class="btn btn-primary w-100">           
                </form>
            </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>