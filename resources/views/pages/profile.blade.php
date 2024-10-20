@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Profile')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area set-bg" data-setbg="/assets/img/contact/contact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>Update Profile</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('profile')}}" class="rt-breadcrumb">Update Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="tdee_calculator my-5">
                <form id="tdeeForm" action="javascript:void(0);" class="p-4 bg-light rounded shadow-sm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="goal">Goal:</label>
                            <select id="goal" class="form-control">
                                <option value="lose" {{ old('goal', $user->goal) == 'lose' ? 'selected' : '' }}>Lose weight</option>
                                <option value="gain" {{ old('goal', $user->goal) == 'gain' ? 'selected' : '' }}>Gain weight</option>
                                <option value="maintain" {{ old('goal', $user->goal) == 'maintain' ? 'selected' : '' }}>Maintain weight</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="gender">Gender:</label>
                            <select id="gender" class="form-control">
                                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" class="form-control" placeholder="Enter your age" value="{{ old('age', $user->age) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="height">Height (cm):</label>
                            <input type="number" id="height" name="height" class="form-control" placeholder="Enter your height" value="{{ old('height', $user->height) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="weight">Current Weight (kg):</label>
                            <input type="number" id="weight" name="weight" class="form-control" placeholder="Enter your current weight" value="{{ old('weight', $user->weight) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="targetWeight">Target Weight (kg):</label>
                            <input type="number" id="targetWeight" name="targetWeight" class="form-control" placeholder="Enter your target weight" value="{{ old('target', $user->target) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="activity">Activity Level:</label>
                            <select id="activity" class="form-control">
                                <option value="1" {{ old('activity', $user->activity) == 1 ? 'selected' : '' }}>Sedentary (little or no exercise)</option>
                                <option value="2" {{ old('activity', $user->activity) == 2 ? 'selected' : '' }}>Light activity (1-3 days/week)</option>
                                <option value="3" {{ old('activity', $user->activity) == 3 ? 'selected' : '' }}>Moderate activity (3-5 days/week)</option>
                                <option value="4" {{ old('activity', $user->activity) == 4 ? 'selected' : '' }}>Very active (6-7 days/week)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="rate">Rate (kg/week):</label>
                            <input type="number" id="rate" name="rate" class="form-control" placeholder="Enter desired weight change per week" value="{{ old('rate', $user->rate) }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <a class="btn btn-block" style="border: 1px solid #000" href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log out
                    </a>
                </form>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>



                {{-- <div class="tdee_result mt-4 text-center"></div> --}}
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#tdeeForm').on('submit', function(){
                var goal = $('#goal').val();
                var gender = $('#gender').val();
                var age = parseInt($('#age').val());
                var height = parseFloat($('#height').val());
                var weight = parseFloat($('#weight').val());
                var targetWeight = parseFloat($('#targetWeight').val());
                var activity = parseFloat($('#activity').val());
                var rate = parseFloat($('#rate').val());

                if(height && weight && age && targetWeight && rate){
                    // Calculate BMR (Basal Metabolic Rate)
                    var bmr;
                    if (gender === 'male') {
                        bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
                    } else {
                        bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
                    }

                    // Calculate TDEE (Total Daily Energy Expenditure)
                    var tdee = bmr * activity;
                    tdee = tdee.toFixed(0);

                    // Calculate calorie adjustment based on goal
                    var calorieAdjustment = rate * 7700 / 7; // 1 kg of body fat is roughly 7700 kcal
                    var calorieGoal;
                    var timeToGoal = Math.abs((weight - targetWeight) / rate); // Time in weeks

                    if (goal === 'lose') {
                        calorieGoal = tdee - calorieAdjustment;
                    } else if (goal === 'gain') {
                        calorieGoal = tdee + calorieAdjustment;
                    } else {
                        calorieGoal = tdee;
                    }

                    calorieGoal = calorieGoal.toFixed(0);

                    // Calculate date to reach target weight
                    var targetDate = new Date();
                    targetDate.setDate(targetDate.getDate() + timeToGoal * 7);
                    var weeks = Math.floor(timeToGoal);
                    var days = Math.round((timeToGoal - weeks) * 7);

                    // Format the target date
                    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    var targetDateFormatted = targetDate.toLocaleDateString('en-US', options);

                    // Display result
                    $('.tdee_result').html(`
                    <h4>Your TDEE (Total Daily Energy Expenditure) is</h4>
                    <p>${tdee} calories per day</p>
                    <h4>Your BMR (Basal Metabolic Rate) is</h4>
                    <p>${bmr.toFixed(0)} calories per day</p>
                    <h4>The calorie intake to ${goal === 'lose' ? 'lose weight' : 'gain weight'} is</h4>
                    <p>${calorieGoal} calories per day</p>
                    <h4>Estimated time to reach ${targetWeight} kg is</h4>
                    <p>${targetDateFormatted}</p>
                    <h4>Or, ${weeks} weeks and ${days} days from today</h4>
                `);
                } else {
                    alert('Please fill out all fields.');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tdeeForm').on('submit', function(e) {
                e.preventDefault();

                // Lấy dữ liệu từ form
                var goal = $('#goal').val();
                var gender = $('#gender').val();
                var age = $('#age').val();
                var height = $('#height').val();
                var weight = $('#weight').val();
                var targetWeight = $('#targetWeight').val();
                var activity = $('#activity').val();
                var rate = $('#rate').val();

                // Gửi request Ajax
                $.ajax({
                    url: "{{ route('save.profile') }}", // Route dẫn tới controller xử lý
                    type: "POST",
                    data: {
                        goal: goal,
                        gender: gender,
                        age: age,
                        height: height,
                        weight: weight,
                        target_weight: targetWeight,
                        activity: activity,
                        rate: rate,
                        _token: "{{ csrf_token() }}" // Token để bảo mật trong Laravel
                    },
                    success: function(response) {
                        alert('Data saved successfully!');
                    },
                    error: function(response) {
                        alert('Error saving data');
                    }
                });
            });
        });
    </script>

@endsection
