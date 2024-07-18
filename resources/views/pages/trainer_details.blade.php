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
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://danviet.mediacdn.vn/thumb_w/650/2021/2/12/9-16131230562841360576541.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Thien Huong
                                </div>
                                <div class="trainer_desc">
                                    Only Girl
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvFbLRAkvIhiVBNYwuccndqqn8fGgE-OoxbZykTbuswZbO2HaS5sdb2-m67lv15z1Ly2x2W1Hgd_GmcXf4f3CF8vYM74vd9_zaLQ8P2Ek9fcfHCvl9J2INcZ20vRSeNAQGsWZUylE8_3w/s640/pt-la-gi.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Bich Thuy
                                </div>
                                <div class="trainer_desc">
                                    Yoga, Pilates, Gym
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://www.bodyfit.vn/uploads/contents/dich-vu-cho-thue-pt-gym-bodyfit_1608984685.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Tien Dat
                                </div>
                                <div class="trainer_desc">
                                    Gym in Ha Dong
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://kenh14cdn.com/2020/4/11/4473799821095317193764876592516233738846208o-1586613383237162104757.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Hoang Khoa
                                </div>
                                <div class="trainer_desc">
                                    Trai đẹp vô cùng tận quận Cầu Giấy
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://img.ws.mms.shopee.vn/ea48343d3ffcd45c9ed05fce56265f26')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Thu Thao
                                </div>
                                <div class="trainer_desc">
                                    Yoga in Thanh Xuan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://htsport.vn/wp-content/uploads/2021/03/pt-gym-la-gi.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Daniel Michael
                                </div>
                                <div class="trainer_desc">
                                    Gym in California
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvFbLRAkvIhiVBNYwuccndqqn8fGgE-OoxbZykTbuswZbO2HaS5sdb2-m67lv15z1Ly2x2W1Hgd_GmcXf4f3CF8vYM74vd9_zaLQ8P2Ek9fcfHCvl9J2INcZ20vRSeNAQGsWZUylE8_3w/s640/pt-la-gi.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Bich Thuy
                                </div>
                                <div class="trainer_desc">
                                    Yoga, Pilates, Gym
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="trainer_item">
                            <div class="trainer-image">
                                <div style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvFbLRAkvIhiVBNYwuccndqqn8fGgE-OoxbZykTbuswZbO2HaS5sdb2-m67lv15z1Ly2x2W1Hgd_GmcXf4f3CF8vYM74vd9_zaLQ8P2Ek9fcfHCvl9J2INcZ20vRSeNAQGsWZUylE8_3w/s640/pt-la-gi.jpg')"></div>
                            </div>
                            <div class="trainer_info">
                                <div class="trainer_name">
                                    Bich Thuy
                                </div>
                                <div class="trainer_desc">
                                    Yoga, Pilates, Gym
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
