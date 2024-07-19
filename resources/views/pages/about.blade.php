@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'About Us | FitConnect')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <div class="links">
                            <a href="./index.html">Home</a>
                            <a href="./about-us.html" class="rt-breadcrumb">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- About Us Begin -->
    <section class="about-us-area spad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Who We Are</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <p class="t-text">Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit
                            nisl quis nulla pretium, vitae ornare leoltricies arcu a tellus pellentesque ultrices. Ut
                            euismod luctus elit id eleifend. Donec semper massa a imperdiet mattis. In vel mattis neque, nec ultricies lectus. Morbi auctor lacus nec hendrerit consectetur. </p>
                        <div class="about-features">
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="/assets/img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>We have the best Gym Trainers</h4>
                                    <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec
                                        semper massa a imperdiet mattis. In vel mattis neque, nec ultricies lectus. </p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="/assets/img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>The best fitness facilities</h4>
                                    <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec
                                        semper massa a imperdiet mattis. In vel mattis neque, nec ultricies lectus. </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Read about topgym</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="about-img" src="/assets/img/about-us.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Skills Section Begin -->
    <section class="skill-section set-bg" data-setbg="/assets/img/about-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Why Choose us?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="skill-text">
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium. Dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium. Dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium. Dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="skill-bar">
                        <div id="bar1" class="single-bar barfiller">
                            <span class="fill" data-percentage="75"></span>
                            <h5>Body building</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar2" class="single-bar barfiller">
                            <span class="fill" data-percentage="95"></span>
                            <h5>Training</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar3" class="single-bar barfiller">
                            <span class="fill" data-percentage="85"></span>
                            <h5>Fitness</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="/assets/img/shirt-icon.png" alt="">
                        </div>
                        <span class="counter">561</span>
                        <p>Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="/assets/img/certify.png" alt="">
                        </div>
                        <span class="counter">12</span>
                        <p>Trainers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="/assets/img/award-icon.png" alt="">
                        </div>
                        <span class="counter">25</span>
                        <p>Awards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="/assets/img/footer-icon.png" alt="">
                        </div>
                        <span class="counter">56</span>
                        <strong>k</strong>
                        <p>Ig folowers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->
    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What Clients Say</span>
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg" data-setbg="/assets/img/testimonial/testimonial-1.png"></div>
                        <div class="testimonial-text">
                            <h4>Megan Smith, <span>Client</span></h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. In vel mattis neque, nec ultricies lectus. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg" data-setbg="/assets/img/testimonial/testimonial-2.png"></div>
                        <div class="testimonial-text">
                            <h4>Michael Joe, <span>Client</span></h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. In vel mattis neque, nec ultricies lectus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <!-- Call To Action Section Begin -->
    <section class="about-callto-section set-bg" data-setbg="/assets/img/callto-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-callto-text">
                        <div class="cl-left">
                            <h2>Join our gym now!</h2>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. </p>
                        </div>
                        <div class="cl-right">
                            <a href="#" class="primary-btn">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
