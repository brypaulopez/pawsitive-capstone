<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col-6">
                <img src="/img/dogs/{{$dog->dog_image}}" alt="" class="w-100 rounded bsblack borange">
            </div>
            <div class="col-6 bteal rounded p-4 bsblack">
                <h2 class="fs-1">{{$dog->dog_name}}</h2>
                <p class="">{{$dog->dog_desc}}</p>
            </div>
            <div class="accordion mt-5 bsblack p-0 rounded" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#health" aria-expanded="true" aria-controls="health">
                      Health
                    </button>
                  </h2>
                  <div id="health" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{$dog->dog_health}}</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exercise" aria-expanded="false" aria-controls="exercise">
                      Exercise
                    </button>
                  </h2>
                  <div id="exercise" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{$dog->dog_exercise}}</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#training" aria-expanded="false" aria-controls="training">
                      Traiming
                    </button>
                  </h2>
                  <div id="training" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{$dog->dog_training}}</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#groom" aria-expanded="false" aria-controls="groom">
                        Groom
                      </button>
                    </h2>
                    <div id="groom" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>{{$dog->dog_grooming}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nutrition" aria-expanded="false" aria-controls="nutrition">
                        Nutrition
                      </button>
                    </h2>
                    <div id="nutrition" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>{{$dog->dog_nutrition}}</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                    <h2 class="fs-1">Breed Traits & Characteristics</h2>
                </div>
                <div class="col-5">
                    <p>Affectionate with Family: 
                        @if ($dog->affectionate_with_family === 1 || $dog->affectionate_with_family === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->affectionate_with_family}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->affectionate_with_family}}/10</div>
                        </div>
                        @elseif ($dog->affectionate_with_family === 3 || $dog->affectionate_with_family === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->affectionate_with_family}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->affectionate_with_family}}/10</div>
                        </div>
                        @elseif ($dog->affectionate_with_family === 5 || $dog->affectionate_with_family === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->affectionate_with_family}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->affectionate_with_family}}/10</div>
                        </div>
                        @elseif ($dog->affectionate_with_family === 7 || $dog->affectionate_with_family === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->affectionate_with_family}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->affectionate_with_family}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->affectionate_with_family}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->affectionate_with_family}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How affectionate a breed is likely to be with family members, or other people he knows well. Some breeds can be aloof with everyone but their owner, while other breeds treat everyone they know like their best friend.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Affectionate with Young Children: 
                        @if ($dog->good_with_children === 1 || $dog->good_with_children === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_children}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->good_with_children}}/10</div>
                        </div>
                        @elseif ($dog->good_with_children === 3 || $dog->good_with_children === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_children}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->good_with_children}}/10</div>
                        </div>
                        @elseif ($dog->good_with_children === 5 || $dog->good_with_children === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_children}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->good_with_children}}/10</div>
                        </div>
                        @elseif ($dog->good_with_children === 7 || $dog->good_with_children === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_children}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->good_with_children}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_children}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->good_with_children}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        A breed's level of tolerance and patience with childrens' behavior, and overall family-friendly nature. Dogs should always be supervised around young children, or children of any age who have little exposure to dogs.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Good with other Dogs: 
                        @if ($dog->good_with_dogs === 1 || $dog->good_with_dogs === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_dogs}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->good_with_dogs}}/10</div>
                        </div>
                        @elseif ($dog->good_with_dogs === 3 || $dog->good_with_dogs === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_dogs}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->good_with_dogs}}/10</div>
                        </div>
                        @elseif ($dog->good_with_dogs === 5 || $dog->good_with_dogs === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_dogs}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->good_with_dogs}}/10</div>
                        </div>
                        @elseif ($dog->good_with_dogs === 7 || $dog->good_with_dogs === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_dogs}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->good_with_dogs}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_dogs}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->good_with_dogs}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How generally friendly a breed is towards other dogs. Dogs should always be supervised for interactions and introductions with other dogs, but some breeds are innately more likely to get along with other dogs, both at home and in public.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Shedding Level: 
                        @if ($dog->shedding_level === 1 || $dog->shedding_level === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->shedding_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->shedding_level}}/10</div>
                        </div>
                        @elseif ($dog->shedding_level === 3 || $dog->shedding_level === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->shedding_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->shedding_level}}/10</div>
                        </div>
                        @elseif ($dog->shedding_level === 5 || $dog->shedding_level === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->shedding_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->shedding_level}}/10</div>
                        </div>
                        @elseif ($dog->shedding_level === 7 || $dog->shedding_level === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->shedding_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->shedding_level}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->shedding_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->shedding_level}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How much fur and hair you can expect the breed to leave behind. Breeds with high shedding will need to be brushed more frequently, are more likely to trigger certain types of allergies, and are more likely to require more consistent vacuuming and lint-rolling.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Coat Grooming Frequency: 
                        @if ($dog->grooming_frequency === 1 || $dog->grooming_frequency === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->grooming_frequency}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->grooming_frequency}}/10</div>
                        </div>
                        @elseif ($dog->grooming_frequency === 3 || $dog->grooming_frequency === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->grooming_frequency}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->grooming_frequency}}/10</div>
                        </div>
                        @elseif ($dog->grooming_frequency === 5 || $dog->grooming_frequency === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->grooming_frequency}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->grooming_frequency}}/10</div>
                        </div>
                        @elseif ($dog->grooming_frequency === 7 || $dog->grooming_frequency === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->grooming_frequency}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->grooming_frequency}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->grooming_frequency}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->grooming_frequency}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How frequently a breed requires bathing, brushing, trimming, or other kinds of coat maintenance. Consider how much time, patience, and budget you have for this type of care when looking at the grooming effort needed. All breeds require regular nail trimming.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Drooling Level: 
                        @if ($dog->drooling_level === 1 || $dog->drooling_level === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->drooling_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->drooling_level}}/10</div>
                        </div>
                        @elseif ($dog->drooling_level === 3 || $dog->drooling_level === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->drooling_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->drooling_level}}/10</div>
                        </div>
                        @elseif ($dog->drooling_level === 5 || $dog->drooling_level === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->drooling_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->drooling_level}}/10</div>
                        </div>
                        @elseif ($dog->drooling_level === 7 || $dog->drooling_level === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->drooling_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->drooling_level}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->drooling_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->drooling_level}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How frequently a breed requires bathing, brushing, trimming, or other kinds of coat maintenance. Consider how much time, patience, and budget you have for this type of care when looking at the grooming effort needed. All breeds require regular nail trimming.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Coat Type: 
                        <b>{{$dog->coat_type}}</b>
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        Canine coats come in many different types, depending on the breed's purpose. Each coat type comes with different grooming needs, allergen potential, and shedding level. You may also just prefer the look or feel of certain coat types over others when choosing a family pet.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Coat Lenght: 
                        <b>{{$dog->coat_length}}</b>
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How long the breed's coat is expected to be. Some long-haired breeds can be trimmed short, but this will require additional upkeep to maintain.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Openness to Strangers:
                        @if ($dog->good_with_strangers === 1 || $dog->good_with_strangers === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_strangers}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->good_with_strangers}}/10</div>
                        </div>
                        @elseif ($dog->good_with_strangers === 3 || $dog->good_with_strangers === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_strangers}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->good_with_strangers}}/10</div>
                        </div>
                        @elseif ($dog->good_with_strangers === 5 || $dog->good_with_strangers === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_strangers}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->good_with_strangers}}/10</div>
                        </div>
                        @elseif ($dog->good_with_strangers === 7 || $dog->good_with_strangers === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_strangers}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->good_with_strangers}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->good_with_strangers}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->good_with_strangers}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How welcoming a breed is likely to be towards strangers. Some breeds will be reserved or cautious around all strangers, regardless of the location, while other breeds will be happy to meet a new human whenever one is around!
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Playfulness Level:
                        @if ($dog->playful === 1 || $dog->playful === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->playful}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->playful}}/10</div>
                        </div>
                        @elseif ($dog->playful === 3 || $dog->playful === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->playful}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->playful}}/10</div>
                        </div>
                        @elseif ($dog->playful === 5 || $dog->playful === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->playful}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->playful}}/10</div>
                        </div>
                        @elseif ($dog->playful === 7 || $dog->playful === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->playful}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->playful}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->playful}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->playful}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        How enthusiastic about play a breed is likely to be, even past the age of puppyhood. Some breeds will continue wanting to play tug-of-war or fetch well into their adult years, while others will be happy to just relax on the couch with you most of the time.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Watchdog / Protective Nature:
                        @if ($dog->protective_nature === 1 || $dog->protective_nature === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->protective_nature}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->protective_nature}}/10</div>
                        </div>
                        @elseif ($dog->protective_nature === 3 || $dog->protective_nature === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->protective_nature}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->protective_nature}}/10</div>
                        </div>
                        @elseif ($dog->protective_nature === 5 || $dog->protective_nature === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->protective_nature}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->protective_nature}}/10</div>
                        </div>
                        @elseif ($dog->protective_nature === 7 || $dog->protective_nature === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->protective_nature}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->protective_nature}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->protective_nature}}/10</div>
                        </div>
                        @endif
                    </p>
                </div>
                <div class="col-7">
                    <p>
                        A breed's tendency to alert you that strangers are around. These breeds are more likely to react to any potential threat, whether it's the mailman or a squirrel outside the window. These breeds are likely to warm to strangers who enter the house and are accepted by their family.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Adaptability Level :
                        @if ($dog->adaptability_level === 1 || $dog->adaptability_level === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->adaptability_level}}/10</div>
                        </div>
                        @elseif ($dog->adaptability_level === 3 || $dog->adaptability_level === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->adaptability_level}}/10</div>
                        </div>
                        @elseif ($dog->adaptability_level === 5 || $dog->adaptability_level === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->adaptability_level}}/10</div>
                        </div>
                        @elseif ($dog->adaptability_level === 7 || $dog->adaptability_level === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->adaptability_level}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->adaptability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->adaptability_level}}/10</div>
                        </div>
                        @endif
                </div>
                <div class="col-7">
                    <p>
                        How easily a breed handles change. This can include changes in living conditions, noise, weather, daily schedule, and other variations in day-to-day life.
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Trainability Level :
                        @if ($dog->trainability_level === 1 || $dog->trainability_level === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->trainability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->trainability_level}}/10</div>
                        </div>
                        @elseif ($dog->trainability_level === 3 || $dog->trainability_level === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->trainability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->trainability_level}}/10</div>
                        </div>
                        @elseif ($dog->trainability_level === 5 || $dog->trainability_level === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->trainability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->trainability_level}}/10</div>
                        </div>
                        @elseif ($dog->trainability_level === 7 || $dog->trainability_level === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->trainability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->trainability_level}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->trainability_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->trainability_level}}/10</div>
                        </div>
                        @endif
                </div>
                <div class="col-7">
                    <p>
                        How easy it will be to train your dog, and how willing your dog will be to learn new things. Some breeds just want to make their owner proud, while others prefer to do what they want, when they want to, wherever they want!
                    </p>
                </div>
                <hr>
                <div class="col-5">
                    <p>Energy Level :
                        @if ($dog->energy_level === 1 || $dog->energy_level === 2)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->energy_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 10%">{{$dog->energy_level}}/10</div>
                        </div>
                        @elseif ($dog->energy_level === 3 || $dog->energy_level === 4)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->energy_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 25%">{{$dog->energy_level}}/10</div>
                        </div>
                        @elseif ($dog->energy_level === 5 || $dog->energy_level === 6)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->energy_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 50%">{{$dog->energy_level}}/10</div>
                        </div>
                        @elseif ($dog->energy_level === 7 || $dog->energy_level === 8)
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->energy_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 75%">{{$dog->energy_level}}/10</div>
                        </div>
                        @else 
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$dog->energy_level}}" aria-valuemin="0" aria-valuemax="10">
                            <div class="progress-bar" style="width: 100%">{{$dog->energy_level}}/10</div>
                        </div>
                        @endif
                </div>
                <div class="col-7">
                    <p>
                        The amount of exercise and mental stimulation a breed needs. High energy breeds are ready to go and eager for their next adventure. They'll spend their time running, jumping, and playing throughout the day. Low energy breeds are like couch potatoes - they're happy to simply lay around and snooze.
                    </p>
                </div>
              </div>
        </div>
    </div>
    @include('layout/script')
</body>
</html>