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
                            <a href="{{route('trainers')}}" class="rt-breadcrumb">Trainers</a>
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
                    <div class="trainer-profile-left col-3 my-3">
                        <div class="mb-2">
                            <div class="trainer-bg-img">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvFbLRAkvIhiVBNYwuccndqqn8fGgE-OoxbZykTbuswZbO2HaS5sdb2-m67lv15z1Ly2x2W1Hgd_GmcXf4f3CF8vYM74vd9_zaLQ8P2Ek9fcfHCvl9J2INcZ20vRSeNAQGsWZUylE8_3w/s640/pt-la-gi.jpg" class="img-trainer" alt="">
                            </div>
                        </div>
                        <div class="trainer-title mb-2">Đang sẵn sàng</div>
                        <div class="trainer-desc mb-4"><span class="joining-date-text">Ngày tham gia:</span> 18/07/2022</div>
                        <div class="achievements-trainer border-bottom">Thành Tích</div>
                    </div>
                    <div class="trainer-profile-main col-6 my-3">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="trainer_name">Thien Huong</div>
                            <div class="btn-favourite">
                                <svg class="feather feather-bookmark" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                                <div class="ml-1">Theo dõi</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-main-text">Số người theo dõi</div>
                                <div class="profile-main-title">469 người</div>
                            </div>
                            <div class="col-md-4">
                                <div class="profile-main-text">Đã được thuê</div>
                                <div class="profile-main-title">1672 giờ</div>
                            </div>
                            <div class="col-md-4">
                                <div class="profile-main-text">Tỷ lệ hoàn thành</div>
                                <div class="profile-main-title">98.81 %</div>
                            </div>
                        </div>
                        <div class="my-3 border-bottom"></div>
                        <div class="d-flex align-items-center">
                            <div class="btn btn-choose-category mr-3">
                                <div class="trainer_desc">Gym</div>
                            </div>
                            <div class="btn btn-choose-category mr-3">
                                <div class="trainer_desc">Yoga</div>
                            </div>
                            <div class="btn btn-choose-category mr-3">
                                <div class="trainer_desc">Pilates</div>
                            </div>
                            <div class="btn btn-choose-category mr-3">
                                <div class="trainer_desc">Lựa chọn khác</div>
                            </div>
                        </div>
                        <div class="my-3 border-bottom"></div>
                        <div class="profile-detail">
                            <h2>Thông tin</h2>
                        <div class="d-flex align-items-center">
                            <svg enable-background="new 0 0 64 64" height="64px" id="Layer_1" version="1.1" viewBox="0 0 64 64" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M40.359,1.877v1.519c0,1.027-0.826,1.856-1.84,1.856h-0.644v2.976c-6.321-1.319-11.75,0-11.75,0V5.252    h-0.644c-1.013,0-1.841-0.829-1.841-1.856V1.877c0-1.027,0.828-1.841,1.841-1.841H38.52C39.533,0.036,40.359,0.85,40.359,1.877z" fill="#241F20"/></g><g><path d="M55.332,12.794l-8.273-5.782l0,0c-0.51-0.355-0.848-0.139-1.027,0.06l-0.148,0.213l-2.066,2.957    c0,0,5.215,2.037,9.641,6.736l2.078-2.974C56.012,13.316,55.395,12.84,55.332,12.794z" fill="#241F20"/></g><g><path d="M32.001,10.277c-14.826,0-26.843,12.018-26.843,26.844c0,14.823,12.018,26.843,26.843,26.843    c14.823,0,26.841-12.02,26.841-26.843C58.842,22.295,46.824,10.277,32.001,10.277z M32.001,37.121V15.892    c0,0,19.94-0.333,21.228,21.229C38.9,37.075,32.001,37.121,32.001,37.121z" fill="#241F20"/></g></g></svg>
                            <div class="profile-detail-item pl-2">On job: 2000h</div>
                        </div>
                        </div>
                    </div>
                    <div class="trainer-profile-right col-3 my-3 ">
                    <div class="price-text">200,000 đ/n</div>
                    <div class="evaluate d-flex align-content-center">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></i>
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></i>
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></i>
                        <div class="evaluate-item">130 đánh giá</div>
                    </div>
                    <div class="btn btn-rent my-2">Thuê</div>
                    <div class="btn btn-chat my-2">Tư vấn</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
