@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Premium | FitConnect')
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
                        <h2>Premium</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('trainers')}}" class="rt-breadcrumb">Premium</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section my-5">
        <div class="container">
            <h4 class="text-center mt-3" style="font-size: 40px">Experience the difference</h4>
            <h5 class="text-center font-weight-normal my-3">Go Premium and enjoy full control of your training. Cancel anytime.</h5>
            <table class="table">
                <tr>
                    <th>What you'll get</th>
                    <th class="text-center">FitConnect's free plan</th>
                    <th class="text-center">FitConnect's premium plan</th>
                </tr>
                <tr>
                    <td>
                        Remove ads
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Trainer Selection
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nutrition and personal training
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nutrition Tracking
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Activity Tracking
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Body Tracking
                    </td>
                    <td class="text-center">
                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="0.513672" y="0.826172" width="22.8767" height="3" fill="#949494"></rect></svg>
                    </td>
                    <td class="text-center">
                        <span class="">
                            <svg style="width: 24px; height: 24px;" data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 24 24" class="Svg-sc-ytk21e-0 jjKKTt"><path d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm16.398-2.38a1 1 0 0 0-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 0 0-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>
                        </span>
                    </td>
                </tr>
            </table>
            <div class="premium_payment_btn d-flex justify-content-center">
                <button class="btn btn-light mx-3" style="border: 1px solid #cccccc; border-radius: 25px; padding: 10px 15px">One-time Payment</button>
                <button class="btn btn-primary mx-3" style="border-radius: 25px; padding: 10px 15px">Get Premium Individual</button>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
