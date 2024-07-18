@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Login')
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
                        <h2>Trainers</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('trainers')}}" class="rt-breadcrumb">Exercises</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="trainer_filters mt-3">
                <select name="gender" class="filter_select" id="">
                    <option selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select name="" class="filter_select" id="">
                    <option selected>Class</option>
                    <option value="gym">Gym</option>
                    <option value="yoga">Yoga</option>
                    <option value="pilates">Pilates</option>
                </select>
                <select name="" class="filter_select" id="">
                    <option selected>City</option>
                    <option value="hanoi">Ha Noi</option>
                    <option value="hcm">Ho Chi Minh City</option>
                    <option value="danang">Da Nang</option>
                    <option value="haiphong">Hai Phong</option>
                </select>
                <input type="text" class="trainer_name_input" placeholder="Trainer Name">
                <button class="btn float-right filter-button" style="font-size: 13px">
                    <i class="fa fa-search"></i>
                    <span>Search</span>
                </button>
            </div>
            <div class="trainers_list">
                <div class="row">
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video1.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        COMPLETE 20 MIN ABS WORKOUT (From Home)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video2.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        7 MIN HOME CHEST WORKOUT | FOLLOW ALONG
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video3.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        This Is What Happens When You Fast
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video4.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        Muscle Imbalance? Just Do THIS!
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video4.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        COMPLETE 20 MIN ABS WORKOUT (From Home)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video3.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        7 MIN HOME CHEST WORKOUT | FOLLOW ALONG
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video2.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        This Is What Happens When You Fast
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 my-3">
                        <a href="{{route('exercise_details')}}">
                            <div class="trainer_item">
                                <div class="trainer-image">
                                    <div style="background-image: url('/assets/img/video1.png')"></div>
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">
                                        Muscle Imbalance? Just Do THIS!
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
