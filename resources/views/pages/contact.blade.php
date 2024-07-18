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
                        <h2>Contact</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('login')}}" class="rt-breadcrumb">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-details">
                            <h2>Get in Touch</h2>
                            <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis
                                nulla pretium, vitae ornare leo.Aenean id auctor libero, gravida venenatis justo. Sed ut
                                arcu nibh. Fusce lacinia arcu in ultrices finibus. Donec vestibulum imperdiet efficitur.
                            </p>
                            <ul class="address">
                                <li>Main Str, no 23, New York</li>
                                <li>+546 990221 123</li>
                                <li>Fitness@contact.com</li>
                            </ul>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Subject">
                                        <textarea placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48359.89302507648!2d-73.95762813994347!3d40.75117343692072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592bc7bab159%3A0x56156cc4c5ee8e31!2sLong+Island+City%2C+Queens%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1561474745218!5m2!1sen!2sbd"
                style="border:0" allowfullscreen></iframe></div>
    </section>
@endsection

@section('script')

@endsection
