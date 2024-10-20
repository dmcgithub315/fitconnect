@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Bmi Calculator')
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
                        <h2>BMI Calculator</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('exercises')}}" class="rt-breadcrumb">BMI Calculator</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="trainers_list my-5">
                <form id="bmiForm" action="javascript:void(0);" class="p-4 bg-light rounded shadow-sm">
                    <div class="row mb-4" style="text-align: center;">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="height">Height (cm):</label>
                            <input class="form-control" id="height" type="number" placeholder="Input your height" value="{{$user->height}}">
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="weight">Weight (kg):</label>
                            <input class="form-control" id="weight" type="number" placeholder="Input your weight" value="{{$user->weight}}">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block font-weight-bold" type="submit">Calculate</button>
                </form>
                <div class="bmi_result mt-4 text-center"></div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#bmiForm').on('submit', function(){
                var height = parseFloat($('#height').val()) / 100; // Convert height from cm to meters
                var weight = parseFloat($('#weight').val());

                if(height && weight){
                    // Calculate BMI
                    var bmi = weight / (height * height);
                    bmi = bmi.toFixed(2); // Limit to 2 decimal places

                    // Determine BMI status
                    var bmiStatus = '';
                    if (bmi < 18.5) {
                        bmiStatus = 'Underweight';
                    } else if (bmi >= 18.5 && bmi < 24.9) {
                        bmiStatus = 'Normal';
                    } else if (bmi >= 25 && bmi < 29.9) {
                        bmiStatus = 'Overweight';
                    } else {
                        bmiStatus = 'Obese';
                    }

                    // Calculate ideal weight
                    var idealWeight = 22 * (height * height);
                    idealWeight = idealWeight.toFixed(1); // Limit to 1 decimal place

                    // Calculate minimum and maximum weight
                    var minWeight = 18.5 * (height * height);
                    var maxWeight = 24.9 * (height * height);
                    minWeight = minWeight.toFixed(1);
                    maxWeight = maxWeight.toFixed(1);

                    // Generate advice
                    var advice = '';
                    if (bmiStatus === 'Normal') {
                        advice = 'Your BMI is in the normal range, you are healthy. Continue maintaining your current diet and lifestyle!';
                    } else if (bmiStatus === 'Underweight') {
                        advice = 'Your BMI indicates you are underweight, consider adding more nutrition to reach your ideal weight.';
                    } else if (bmiStatus === 'Overweight') {
                        advice = 'Your BMI indicates you are overweight, adjust your diet and exercise to return to your ideal weight.';
                    } else {
                        advice = 'Your BMI indicates you are obese, consult a specialist for a safe weight loss plan.';
                    }

                    // Display result
                    $('.bmi_result').html(`
                <h4>YOUR CURRENT BMI IS</h4>
                <p>${bmi}</p>
                <h4>${bmiStatus.toUpperCase()}</h4>
                <h4>YOUR IDEAL WEIGHT IS</h4>
                <p>${idealWeight} kilograms</p>
                <h4>YOUR MAXIMUM WEIGHT IS</h4>
                <p>${maxWeight} kilograms</p>
                <h4>YOUR MINIMUM WEIGHT IS</h4>
                <p>${minWeight} kilograms</p>
                <h4>Advice for you:</h4>
                <p>${advice}</p>
            `);
                } else {
                    alert('Please enter both height and weight.');
                }
            });
        });
    </script>
@endsection
