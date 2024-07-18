<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    @yield('style')
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-menu">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="/assets/img/logo_fitconnect.png" width="100" height="100" alt="">
                        </a>
                    </div>
                    <nav class="mobile-menu">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="./about-us.html">About us</a></li>
                            <li><a href="{{route('classes')}}">Classes</a></li>
                            <li><a href="{{route('trainers')}}">Trainers</a></li>
                            <li><a href="./blog.html">News</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li class="search-btn search-trigger">
                                <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#modal_login">
                                    <img src="/assets/img/icons/user.svg" width="24" height="24" alt="">
                                </button>
                            </li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Search Bar Begin -->
{{--<section class="search-bar-wrap">--}}
{{--    <span class="search-close"><i class="fa fa-close"></i></span>--}}
{{--    <div class="search-bar-table">--}}
{{--        <div class="search-bar-tablecell">--}}
{{--            <div class="search-bar-inner">--}}
{{--                <h2>Search</h2>--}}
{{--                <form action="#">--}}
{{--                    <input type="search" placeholder="Type Keywords">--}}
{{--                    <button type="submit">Search</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Search Bar End -->
<!-- Top Social Begin -->
{{--<div class="top-social">--}}
{{--    <div class="top-social-links">--}}
{{--        <ul>--}}
{{--            <li><a href="{{route('login')}}">Login</a></li>--}}
{{--            <li><a href="#">Sign up</a></li>--}}
{{--            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-behance"></i></a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Top Social End -->
@yield('content')

<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #16181E !important">
            <div class="modal-body" >
                <div class="mb-3 text-center">
                    <h1 class="modal-title" id="exampleModalLabel">
                        <img src="/assets/img/logo_fitconnect.png" width="100" height="100" alt="">
                    </h1>
                </div>
                <form action="" method="post" id="sign_in_form" class="mx-auto w-100 px-4 ">
                    <div class="mb-3">
                        <div class="position-relative">
                            <input type="text" name="email" id="email_login" class="form-control px-5 py-3 text-white"  placeholder="Email" style="font-size: 12px; background-color: #293244; border: none;"/>
                            <img src="/assets/img/icons/user.svg" width="24" height="24" class="user-img" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="position-relative">
                            <input type="password" class="form-control px-5 py-3" name="password" id="password_login" style="font-size: 12px; background-color: #293244; border: none;" placeholder="{{__('Password')}}" />
                            <img src="/assets/img/icons/lock.png" width="24" height="24" class="lock-img" alt="">
                            <a href="#" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill toggle-password-login" viewBox="0 0 16 16">
                                    <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" fill="gray"/>
                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" fill="gray"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill toggle-password-login d-none" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" fill="gray"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" fill="gray"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <p class="sign_in_message text-danger fs-8"></p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="check-user" style="background-color: #293244; border: none;">
                            <label class="form-check-label" for="check-user" style="font-size: 12px; color: #5E6272">
                                {{__('Remember me')}}
                            </label>
                        </div>
                        <span style="font-size:12px; color: #A8CDFF">{{__('Forgot Password')}}</span>
                    </div>
                    <div class="mb-3">
                        <a href="#" type="button" id="btn-login" class="btn w-100">{{__('Log In')}}</a>
                    </div>
                    <div class="text-center" style="font-size: 14px;color: #5E6272">
                        {{__('Don\'t have account')}}?
                        <span>
                            <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#modal_register" style="color: #A8CDFF">
                                    Sign Up
                            </button>
{{--                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_register" class="register_button open_modal_offcanvas">{{__('Sign Up')}}</a>--}}
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="text-center">
                <img src="/assets/img/logo_fitconnect.png" width="100" height="100" alt="">
            </div>
            <div class="modal-body">
                <form id="sign_up_form" action="" method="post" class="mx-auto px-2">
                    <div class="">
                        <div class="mb-2">
                            <label for="" class="form-label" style="font-size: 10px; color: #A8CDFF;">{{__('Full Name')}}</label>
                            <input type="text" class="form-control py-3" name="fullName" id="fullName" style="background-color: #293244; border: none;" placeholder="{{__('Enter your first name')}}" value="">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label" style="font-size: 10px; color: #A8CDFF;">{{__('Role')}}</label>
                            <select name="role" class="custom-select" id="inputGroupSelect01" style="background-color: #293244; color: #ffffff; border: none;">
                                <option selected>Choose...</option>
                                <option value="clients">User</option>
                                <option value="trainer">Trainer</option>
                            </select>
{{--                            <input type="text" class="form-control py-3" name="last_name" id="last_name" style="background-color: #293244; border: none;" placeholder="{{__('Enter your last name')}}">--}}
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label" style="font-size: 10px; color: #A8CDFF;">Email</label>
                            <input type="email" class="form-control py-3" name="email" id="email_register" style="background-color: #293244; border: none;" placeholder="{{__('Enter your email')}}">
                        </div>
                        <div class="mb-1">
                            <div>
                                <label for="" class="form-label" style="font-size: 10px; color: #A8CDFF;">{{__('Password')}}</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control py-3" name="password" id="password_register" placeholder="{{__('Enter a secure password')}}" style="background-color: #293244; border: none;" />
                                    <a href="#" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill toggle-password" viewBox="0 0 16 16">
                                            <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" fill="gray"/>
                                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" fill="gray"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill toggle-password d-none" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" fill="gray"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" fill="gray"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="check_password"></span>
                        </div>

                        <div class="mb-3 d-none">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check_info" />
                                <label class="form-check-label" for="" id="check_contact_info">
                                    I do not wish to receive communications
                                </label>
                            </div>
                            <div class="mt-3">
                                <p class="check_contact_info_item">We will send you news, updates and promotions from 9Score. If you wish to opt out please select the tick box above.</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check_age" name="check_age" />
                                <label class="form-check-label" for="" id="check_age_item">
                                    {{__('I agree to FitConnect\'s')}} <span><a class="text-primary" style="font-size: 10px" href="">{{__('Terms & Conditions')}}</a></span>
                                </label>
                            </div>
                            <div class="mt-3">
                                <p class="check_age_title">{{__('You can find out about your rights and choices and how we use your information in our')}} <span><a class="text-primary" href="">{{__('privacy policy')}}</a></span>.</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="javascript:void(0);" id="sign_up_btn" type="submit" class="btn w-100 text-white semibold" style="background-color: #4C40F7">{{__('Create account')}}</a>
                        </div>
                        <div class="text-center" style="font-size: 14px; color: #5E6272">
                            {{__('Already have an account?')}}<span> <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_login" class="register_button open_modal_offcanvas">{{__('Log In')}}</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section Begin -->
<footer class="footer-section set-bg" data-setbg="/assets/img/footer-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content">
                    <div class="footer-logo">
                        <a href="#"><img src="/assets/img/logo_fitconnect.png" width="150" height="150" alt=""></a>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Classes</a></li>
                            <li><a href="#">Instructors</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="text" placeholder="your Email">
                            <button type="submit">Sign Up</button>
                        </form>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <div class="footer-icon-img">
                        <img src="/assets/img/footer-icon.png" alt="">
                    </div>
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.slicknav.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/circle-progress.min.js"></script>
<script src="/assets/js/jquery.barfiller.js"></script>
<script src="/assets/js/main.js"></script>
@yield('script')
</body>

</html>
