{{--@php--}}
{{--    $current_tab = 'app';--}}
{{--@endphp--}}
@extends('layout.main')
@section('title', 'Home')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" data-setbg="/assets/img/bg.jpg">
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i class="fa fa-play"></i></a>
                <h1>BMI Control</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/assets/img/bg-2.jpg">
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i class="fa fa-play"></i></a>
                <h1>Science BMR</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="/assets/img/bg-3.jpg">
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i class="fa fa-play"></i></a>
                <h1>Smart Meal Suggestion</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->
    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/assets/img/features/feature-1.jpg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/assets/img/features/icon-1.png" alt="">
                            </div>
                            <h5>BMI Calculator</h5>
                            <p>We will calculate your BMI based on your height and weight measurements..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/assets/img/features/feature-2.jpg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/assets/img/features/icon-2.png" alt="">
                            </div>
                            <h5>BMR Calculator</h5>
                            <p>We will calculate your BMR based on your height, weight, and age..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-features">
                        <div class="features-img">
                            <img src="/assets/img/features/feature-3.jpg" alt="">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <img src="/assets/img/features/icon-3.png" alt="">
                            </div>
                            <h5>Meal Suggestion</h5>
                            <p>We will suggest your diet based on your height, weight, and level of exercise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="upcoming-classes">--}}
{{--                        <div class="up-title">--}}
{{--                            <span>Next</span>--}}
{{--                            <h5>Upcomming Classes</h5>--}}
{{--                        </div>--}}
{{--                        <ul class="classes-time">--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Pilates <span>12:00 - 13:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Spinning <span>13:00 - 14:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-6 col-md-6">
                    <div class="membership-card set-bg" data-setbg="https://www.suburbansimplicity.com/wp-content/uploads/2017/03/Meal-Planning.jpg">
                        <div class="membership-details" style="margin-top: 150px; margin-left: 150px">
                            <div class="up-title">
                                <span>Next</span>
                                <h5>Premium Member</h5>
                            </div>
                            <div class="discount">
                                <h1>25% <span>Discount</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="member-sign-up set-bg" data-setbg="/assets/img/signup-bg.jpg">
                        <div class="up-title">
                            <span>New</span>
                            <h5>Premium Member</h5>
                        </div>

                        <ul class="text-white">
                            <li>Remove ads</li>
                            <li>Meal suggestion</li>
                            <li>Nutrition Tracking</li>
                            <li>Activity Tracking</li>
                            <li>Body Tracking</li>
                        </ul>
                        <div class="member-signup-btn mt-5">
                            <a href="{{route('pricing')}}" class="primary-btn">Sign up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
{{--    <!-- Trainer Section Begin -->--}}
{{--    <section class="trainer-section set-bg" data-setbg="/assets/img/trainer-bg.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <div class="section-title">--}}
{{--                        <span>The Best</span>--}}
{{--                        <h2>Trainers</h2>--}}
{{--                        <a href="#" class="primary-btn trainer-btn">See All</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-trainer">--}}
{{--                        <div class="trainer-img">--}}
{{--                            <img src="/assets/img/trainer/trainer-1.jpg" alt="">--}}
{{--                            <div class="/assets/img-hover">--}}
{{--                                <a href="#"><i class="fa fa-plus"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="trainer-text">--}}
{{--                            <h5>Rachel Smith <span>Aerobics Instructor</span></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-trainer">--}}
{{--                        <div class="trainer-img">--}}
{{--                            <img src="/assets/img/trainer/trainer-2.jpg" alt="">--}}
{{--                            <div class="/assets/img-hover">--}}
{{--                                <a href="#"><i class="fa fa-plus"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="trainer-text">--}}
{{--                            <h5>Micheal Williams <span>Aerobics Instructor</span></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-trainer">--}}
{{--                        <div class="trainer-img">--}}
{{--                            <img src="/assets/img/trainer/trainer-3.jpg" alt="">--}}
{{--                            <div class="/assets/img-hover">--}}
{{--                                <a href="#"><i class="fa fa-plus"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="trainer-text">--}}
{{--                            <h5>James Brown <span>Aerobics Instructor</span></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Traniner Section End -->--}}
{{--    <!-- Upcoming Event Begin -->--}}
{{--    <section class="upcoming-event-section spad-2">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="upcoming-classes">--}}
{{--                        <div class="up-title">--}}
{{--                            <span>Next</span>--}}
{{--                            <h5>Upcomming Classes</h5>--}}
{{--                        </div>--}}
{{--                        <ul class="classes-time">--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Pilates <span>12:00 - 13:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Spinning <span>13:00 - 14:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>--}}
{{--                            <li><img src="/assets/img/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="membership-card set-bg" data-setbg="/assets/img/m-card.jpg">--}}
{{--                        <div class="membership-details">--}}
{{--                            <div class="up-title">--}}
{{--                                <span>Next</span>--}}
{{--                                <h5>Premium Member</h5>--}}
{{--                            </div>--}}
{{--                            <div class="discount">--}}
{{--                                <h1>25% <span>Discount</span></h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="member-sign-up set-bg" data-setbg="/assets/img/signup-bg.jpg">--}}
{{--                        <div class="up-title">--}}
{{--                            <span>New</span>--}}
{{--                            <h5>Premium Member</h5>--}}
{{--                        </div>--}}

{{--                        <ul class="text-white">--}}
{{--                            <li>Remove ads</li>--}}
{{--                            <li>Trainer Selection</li>--}}
{{--                            <li>Nutrition and personal training</li>--}}
{{--                            <li>Nutrition Tracking</li>--}}
{{--                            <li>Activity Tracking</li>--}}
{{--                            <li>Body Tracking</li>--}}
{{--                        </ul>--}}
{{--                        <div class="member-signup-btn mt-5">--}}
{{--                            <a href="#" class="primary-btn">Sign up Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Upcoming Event End -->
@endsection

@section('script')

@endsection
