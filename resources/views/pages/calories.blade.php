@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Meal Plans')
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
                        <h2>Meal Plans</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('meals')}}" class="rt-breadcrumb">Meal Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section pt-4">
        <div class="container">
            <p style="font-size: 20px">Your daily calories is: {{$dailyCalories}} kcal</p>
            <div class="row">
                @foreach ($plans as $meal)
                    <div class="col-md-4 meal-card">
                        <div class="card shadow">
                            <img src="{{ $meal->image }}" class="card-img-top" alt="Meal Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $meal->meal }}</h5>
                                <p><strong>Calories:</strong> {{ $meal->calories }} kcal</p>
                                <p><strong>Protein:</strong> {{ $meal->protein }} g</p>
                                <p><strong>Carbs:</strong> {{ $meal->carbs }} g</p>
                                <p><strong>Fat:</strong> {{ $meal->fat }} g</p>
                                <p><strong>Ingredients:</strong> {{ $meal->ingredients }}</p>
                                <p><strong>Method:</strong> {{ $meal->method }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#calorieForm').on('submit', function(){
                var height = parseFloat($('#height').val());
                var weight = parseFloat($('#weight').val());
                var age = parseInt($('#age').val());
                var gender = $('#gender').val();
                var activity = parseFloat($('#activity').val());

                if(height && weight && age){
                    // Calculate BMR
                    var bmr;
                    if (gender === 'male') {
                        bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
                    } else {
                        bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
                    }

                    // Calculate TDEE (Total Daily Energy Expenditure)
                    var tdee = bmr * activity;
                    tdee = tdee.toFixed(0); // Round to nearest integer

                    // Generate a sample weekly meal plan
                    var weeklyCalories = tdee * 7;
                    var mealPlan = `
                <h4>Your daily calorie intake should be</h4>
                <p>${tdee} calories/day</p>
                <h4>Your weekly calorie goal is</h4>
                <p>${weeklyCalories} calories/week</p>
                <h4>Sample meal plan for the week:</h4>
                <ul>
                    <li>Day 1: Breakfast - Oatmeal, Lunch - Grilled Chicken Salad, Dinner - Salmon with vegetables.</li>
                    <li>Day 2: Breakfast - Scrambled eggs, Lunch - Turkey sandwich, Dinner - Beef stir-fry with broccoli.</li>
                    <li>Day 3: Breakfast - Smoothie, Lunch - Quinoa bowl, Dinner - Chicken breast with rice.</li>
                    <!-- Add more days/meals based on the total weekly calories -->
                </ul>
            `;

                    // Display result
                    $('.calorie_result').html(mealPlan).removeClass('d-none');
                } else {
                    alert('Please fill out all fields.');
                }
            });
        });
    </script>
@endsection
