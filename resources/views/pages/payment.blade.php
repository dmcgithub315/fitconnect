@php
    $current_tab = 'app';
@endphp
@extends('layout.main')
@section('title', 'Payment for Premium Plan')
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
                        <h2>Payment for Premium Plan</h2>
                        <div class="links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('exercises')}}" class="rt-breadcrumb">Payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container text-center">
            <h2 class="my-4">Payment for Premium Plan</h2>
            <p>Amount to pay: <strong>{{ number_format($amount) }} VND</strong></p>
            <p>Scan the QR code below to complete your payment:</p>
            <img src="{{ $qrCodeUrl }}" alt="QR Code for Payment" class="img-fluid">
            <p>We are checking your payment status...</p>
            <div id="paymentStatus" class="alert alert-info">Waiting for payment confirmation...</div>
            <a href="{{ route('home') }}" class="btn btn-primary mt-4">Return to Home</a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            const amount = {{ $amount }};
            const transactionCode = "{{ session('transactionCode') }}"; // Lấy mã giao dịch từ session

            const checkPayment = function() {
                $.get('/check-payment/{{$transactionCode}}', function (response) {
                    // Kiểm tra phản hồi từ server
                    if (response.message === "OK") {
                        clearInterval(paymentCheckInterval); // Dừng kiểm tra
                        $('#paymentStatus').removeClass('alert-info').addClass('alert-success').text('Payment successful!'); // Thông báo thành công
                    } else {
                        $('#paymentStatus').removeClass('alert-info').addClass('alert-danger').text('No payment data found.');
                    }
                }).fail(function () {
                    // $('#paymentStatus').removeClass('alert-info').addClass('alert-danger').text('Error fetching payment status.');
                });
            };

            // Kiểm tra mỗi 10 giây
            const paymentCheckInterval = setInterval(checkPayment, 10000);

            // Dừng kiểm tra sau 5 phút
            setTimeout(function () {
                clearInterval(paymentCheckInterval);
                $('#paymentStatus').removeClass('alert-info').addClass('alert-danger').text('Payment timeout. Please try again.');
            }, 300000); // 300000ms = 5 phút
        });
    </script>
@endsection

