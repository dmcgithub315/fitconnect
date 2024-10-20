<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | FitConnect</title>

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
    <link rel="icon" type="image/x-icon" href="/assets/img/logo_fitconnect.png">
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
                        <a href="{{route('home')}}">
                            <img src="/assets/img/logo_fitconnect.png" width="100" height="100" alt="">
                        </a>
                    </div>
                    <nav class="mobile-menu">
                        <ul>
{{--                            <li><a href="{{route('home')}}">Home</a></li>--}}
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                            <li><a href="{{route('meals')}}">Meal plans</a></li>
                            <li><a href="{{route('exercises')}}">BMI Calculate</a></li>
                            <li><a href="{{route('about')}}">Nutrition Handbook</a></li>
{{--                            <li><a href="{{route('contact')}}">Contact</a></li>--}}
                            <li class="search-btn search-trigger">
                                @if(Auth::check())
                                    <a href="{{ route('profile') }}" class="bg-transparent border-0">
                                        <img src="/assets/img/icons/user.svg" width="24" height="24" alt="User Profile">
                                    </a>
                                @else
                                    <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#modal_login">
                                        <img src="/assets/img/icons/user.svg" width="24" height="24" alt="Login">
                                    </button>
                                @endif
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
<section>
    <div class="container py-5 box_chat d-none">

        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">

                <div class="card" id="chat1" style="border-radius: 15px;">
                    <div
                        class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
                        style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <img src="/assets/img/back.svg" width="20" height="20" alt="">
                        <p class="mb-0 fw-bold">Live chat</p>
                        <img class="close_chat" src="/assets/img/close.svg" width="20" height="20" alt="">
                    </div>
                    <div class="card-body">

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                <p class="small mb-0">Thank you for choosing me as your personal trainer. Please let me know your free time and expected training schedule.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end mb-4">
                            <div class="p-3 me-3 border bg-body-tertiary" style="border-radius: 15px;">
                                <p class="small mb-0">6pm to 8pm, everyday.</p>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div class="ms-3" style="border-radius: 15px;">
                                <div class="bg-image">
                                    <img src="/assets/img/schedule.jpg" width="250" height="120"
                                         style="border-radius: 15px;" alt="video">
                                    <a href="#!">
                                        <div class="mask"></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                <p class="small mb-0">It is your schedule.</p>
                            </div>
                        </div>

                        <div data-mdb-input-init class="form-outline">
                            <textarea class="form-control bg-body-tertiary" id="textAreaExample" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample">Type your message</label>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<button class="open_chat d-none">
    <img src="/assets/img/chat.svg" width="50" height="50" alt="">
</button>

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
                            <li><a href="{{route('home')}}">Home</a></li>
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
<script>
    $('#btn-login').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('login') }}",
            method: "POST",
            data: {
                email: $('#email_login').val(),
                password: $('#password_login').val(),
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    window.location.reload();
                } else {
                    $('.sign_in_message').text(response.message);
                }
            },
            error: function(xhr) {
                $('.sign_in_message').text('Invalid credentials');
            }
        });
    });
    $('#sign_up_btn').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('register') }}",
            method: "POST",
            data: {
                fullName: $('#fullName').val(),
                email: $('#email_register').val(),
                password: $('#password_register').val(),
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    window.location.reload();
                } else {
                    $('.check_password').text(response.message);
                }
            },
            error: function(xhr) {
                $('.check_password').text('Registration failed');
            }
        });
    });

</script>
</body>

</html>
