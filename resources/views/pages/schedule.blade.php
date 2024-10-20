@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Schedule | FitConnect')
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
                        <h2>Schedule</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('trainers')}}" class="rt-breadcrumb">Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section my-5">
        <div class="container">
            <h6 class="text-left mt-3" style="font-size: 40px">Daily monitoring</h6>
            <div class="row my-4">
                <div class="col-4">
                    <div>
                        <img src="/assets/img/icons/fire.png" width="32" height="32" alt="">
                        <div class="font-weight-bold mt-2">2500</div>
                        <div>Daily Calories</div>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="/assets/img/icons/moon.png" width="32" height="32" alt="">
                        <div class="font-weight-bold mt-2">6h 45min</div>
                        <div>Sleep Time</div>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="/assets/img/icons/clock.png" width="32" height="32" alt="">
                        <div class="font-weight-bold mt-2">2w 4days</div>
                        <div>Total Workout</div>
                    </div>
                </div>
            </div>
            <h6 class="text-left mt-3" style="font-size: 40px">Your personal schedule</h6>
{{--            <h5 class="text-center font-weight-normal my-3">Go Premium and enjoy full control of your training. Cancel anytime.</h5>--}}
            <table class="table schedule_table my-5">
                <tr>
                    <th></th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wednesday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Saturday</th>
                    <th class="text-center">Sunday</th>
                </tr>
                <tr>
                    <td>6.00am - 8.00am</td>
                    <td class="text-center">
                        <div>WEIGHT LOOSE</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class="text-center">
                        <div>CARDIO</div>
                        <span>Hoang Bao</span>
                    </td>
                    <td class=text-center>
                        <div>YOGA</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>FITNESS</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>

                    </td>
                    <td class=text-center>
                        <div>BOXING</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BODY BUILDING</div>
                        <span>Thien Huong</span>
                    </td>
                </tr>
                <tr>
                    <td>8.00am - 10.00am</td>
                    <td class="text-center">
                        <div>CARDIO</div>
                        <span>Hoang Bao</span>
                    </td>
                    <td class=text-center>
                        <div>YOGA</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>FITNESS</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>

                    </td>
                    <td class="text-center">
                        <div>WEIGHT LOOSE</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BOXING</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BODY BUILDING</div>
                        <span>Thien Huong</span>
                    </td>
                </tr>
                <tr>
                    <td>5.00pm - 7.00pm</td>
                    <td class="text-center">
                        <div>WEIGHT LOOSE</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class="text-center">
                        <div>CARDIO</div>
                        <span>Hoang Bao</span>
                    </td>
                    <td class=text-center>
                        <div>FITNESS</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>

                    </td>
                    <td class=text-center>
                        <div>BOXING</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BODY BUILDING</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>YOGA</div>
                        <span>Thien Huong</span>
                    </td>
                </tr>
                <tr>
                    <td>7.00pm - 9.00pm</td>
                    <td class=text-center>

                    </td>
                    <td class="text-center">
                        <div>WEIGHT LOOSE</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class="text-center">
                        <div>CARDIO</div>
                        <span>Hoang Bao</span>
                    </td>
                    <td class=text-center>
                        <div>YOGA</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>FITNESS</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BOXING</div>
                        <span>Thien Huong</span>
                    </td>
                    <td class=text-center>
                        <div>BODY BUILDING</div>
                        <span>Thien Huong</span>
                    </td>
                </tr>
            </table>
{{--            <div class="premium_payment_btn d-flex justify-content-center">--}}
{{--                <button class="btn btn-light mx-3" style="border: 1px solid #cccccc; border-radius: 25px; padding: 10px 15px">One-time Payment</button>--}}
{{--                <button class="btn btn-primary mx-3" style="border-radius: 25px; padding: 10px 15px">Get Premium Individual</button>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection

@section('script')

@endsection
