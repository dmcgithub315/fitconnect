@php
    $current_tab = 'pricing';
@endphp
@extends('layout.main')
@section('title', 'Pricing')
@section('style')
    <style>
        .pricing-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        .pricing-card {
            border: 1px solid #e0e0e0;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }
        .pricing-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
        }
        .pricing-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .pricing-price {
            font-size: 40px;
            color: #27ae60;
            margin-bottom: 15px;
        }
        .benefits-list {
            margin-bottom: 20px;
        }
        .benefits-list li {
            list-style-type: none;
            padding-left: 20px;
            position: relative;
        }
        .benefits-list li::before {
            content: "\f00c";
            font-family: 'FontAwesome';
            position: absolute;
            left: 0;
            color: #27ae60;
        }
        .btn-primary {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-primary:hover {
            background-color: #219150;
            border-color: #219150;
        }
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area set-bg" data-setbg="/assets/img/contact/contact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>Premium Plan</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('pricing')}}" class="rt-breadcrumb">Pricing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-section">
        <div class="container">
            <h2 class="text-center mb-5">Choose Your Premium Plan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">1 Month</h5>
                            <p><strong>Price:</strong> 30,000 VND</p>
                            <ul class="benefits-list">
                                <li>Remove ads</li>
                                <li>Meal suggestion</li>
                                <li>Nutrition Tracking</li>
                                <li>Activity Tracking</li>
                                <li>Body Tracking</li>
                            </ul>
                            <a href="{{ route('payment', ['package' => '1-month']) }}" class="btn btn-primary btn-block">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <!-- 6 Month Plan -->
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">6 Months</h5>
                            <p><strong>Price:</strong> 150,000 VND</p>
                            <ul class="benefits-list">
                                <li>Remove ads</li>
                                <li>Meal suggestion</li>
                                <li>Nutrition Tracking</li>
                                <li>Activity Tracking</li>
                                <li>Body Tracking</li>
                            </ul>
                            <a href="{{ route('payment', ['package' => '6-month']) }}" class="btn btn-primary btn-block">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <!-- 12 Month Plan -->
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title">1 Year</h5>
                            <p><strong>Price:</strong> 250,000 VND</p>
                            <ul class="benefits-list">
                                <li>Remove ads</li>
                                <li>Meal suggestion</li>
                                <li>Nutrition Tracking</li>
                                <li>Activity Tracking</li>
                                <li>Body Tracking</li>
                            </ul>
                            <a href="{{ route('payment', ['package' => '1-year']) }}" class="btn btn-primary btn-block">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            // Add any necessary jQuery actions if needed
        });
    </script>
@endsection
