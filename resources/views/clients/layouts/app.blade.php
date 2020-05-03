<!doctype html>
<html class="no-js" lang="zxx" style="scroll-behavior: smooth;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Talpyn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.13.0-web/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        #loading {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
            background-image: url("//127.0.0.1:8000/loader.gif");
            background-repeat: no-repeat;
            background-position: center;
            bottom: 0;
        }

        body {
            background-color: #eee;
        }

        #generic_price_table {
            background-color: #f0eded;
        }

        /*PRICE COLOR CODE START*/
        #generic_price_table .generic_content {
            background-color: #fff;
        }

        #generic_price_table .generic_content .generic_head_price {
            background-color: #f6f6f6;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head_bg {
            border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head
        span {
            color: #525252;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .sign {
            color: #414141;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .currency {
            color: #414141;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .cent {
            color: #414141;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .month {
            color: #414141;
        }

        #generic_price_table .generic_content .generic_feature_list ul li {
            color: #a7a7a7;
        }

        #generic_price_table .generic_content .generic_feature_list ul li span {
            color: #414141;
        }
        #generic_price_table .generic_content .generic_feature_list ul li:hover {
            background-color: #e4e4e4;
            border-left: 5px solid #703dcb;
        }

        #generic_price_table .generic_content .generic_price_btn a {
            border: 1px solid #2ecc71;
            color: #703dcb;
        }

        #generic_price_table
        .generic_content.active
        .generic_head_price
        .generic_head_content
        .head_bg,
        #generic_price_table
        .generic_content:hover
        .generic_head_price
        .generic_head_content
        .head_bg {
            border-color: #5c12c7 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #9c56f2;
            color: #fff;
        }

        #generic_price_table
        .generic_content:hover
        .generic_head_price
        .generic_head_content
        .head
        span,
        #generic_price_table
        .generic_content.active
        .generic_head_price
        .generic_head_content
        .head
        span {
            color: #fff;
        }

        #generic_price_table .generic_content:hover .generic_price_btn a,
        #generic_price_table .generic_content.active .generic_price_btn a {
            background-color: #9f53cb;
            color: #fff;
        }
        #generic_price_table {
            margin: 50px 0 50px 0;
            font-family: "Raleway", sans-serif;
        }
        .row .table {
            padding: 28px 0;
        }

        /*PRICE BODY CODE START*/

        #generic_price_table .generic_content {
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        #generic_price_table .generic_content .generic_head_price {
            margin: 0 0 20px 0;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content {
            margin: 0 0 50px 0;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head_bg {
            border-style: solid;
            border-width: 90px 1411px 23px 399px;
            position: absolute;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head {
            padding-top: 40px;
            position: relative;
            z-index: 1;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head
        span {
            font-family: "Raleway", sans-serif;
            font-size: 28px;
            font-weight: 400;
            letter-spacing: 2px;
            margin: 0;
            padding: 0;
            text-transform: uppercase;
        }

        #generic_price_table .generic_content .generic_head_price .generic_price_tag {
            padding: 0 0 20px;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price {
            display: block;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .sign {
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 28px;
            font-weight: 400;
            vertical-align: middle;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .currency {
            font-family: "Lato", sans-serif;
            font-size: 60px;
            font-weight: 300;
            letter-spacing: -2px;
            line-height: 60px;
            padding: 0;
            vertical-align: middle;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .price
        .cent {
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 24px;
            font-weight: 400;
            vertical-align: bottom;
        }

        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_price_tag
        .month {
            font-family: "Lato", sans-serif;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 3px;
            vertical-align: bottom;
        }

        #generic_price_table .generic_content .generic_feature_list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #generic_price_table .generic_content .generic_feature_list ul li {
            font-family: "Lato", sans-serif;
            font-size: 18px;
            padding: 15px 0;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table .generic_content .generic_feature_list ul li:hover {
            transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            -ms-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            -webkit-transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table .generic_content .generic_feature_list ul li .fa {
            padding: 0 10px;
        }
        #generic_price_table .generic_content .generic_price_btn {
            margin: 20px 0 32px;
        }

        #generic_price_table .generic_content .generic_price_btn a {
            border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
            -webkit-border-radius: 50px;
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 18px;
            outline: medium none;
            padding: 12px 30px;
            text-decoration: none;
            text-transform: uppercase;
        }

        #generic_price_table .generic_content,
        #generic_price_table .generic_content:hover,
        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head_bg,
        #generic_price_table
        .generic_content:hover
        .generic_head_price
        .generic_head_content
        .head_bg,
        #generic_price_table
        .generic_content
        .generic_head_price
        .generic_head_content
        .head
        h2,
        #generic_price_table
        .generic_content:hover
        .generic_head_price
        .generic_head_content
        .head
        h2,
        #generic_price_table .generic_content .price,
        #generic_price_table .generic_content:hover .price,
        #generic_price_table .generic_content .generic_price_btn a,
        #generic_price_table .generic_content:hover .generic_price_btn a {
            transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            -ms-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            -webkit-transition: all 0.3s ease-in-out 0s;
        }
        @media (max-width: 320px) {
        }

        @media (max-width: 767px) {
            #generic_price_table .generic_content {
                margin-bottom: 75px;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            #generic_price_table .col-md-3 {
                float: left;
                width: 50%;
            }

            #generic_price_table .col-md-4 {
                float: left;
                width: 50%;
            }

            #generic_price_table .generic_content {
                margin-bottom: 75px;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
        }
        @media (min-width: 1200px) {
        }
        #generic_price_table_home {
            font-family: "Raleway", sans-serif;
        }

        .text-center h1,
        .text-center h1 a {
            color: #7885cb;
            font-size: 30px;
            font-weight: 300;
            text-decoration: none;
        }
        .demo-pic {
            margin: 0 auto;
        }
        .demo-pic:hover {
            opacity: 0.7;
        }

        #generic_price_table_home ul {
            margin: 0 auto;
            padding: 0;
            list-style: none;
            display: table;
        }
        #generic_price_table_home li {
            float: left;
        }
        #generic_price_table_home li + li {
            margin-left: 10px;
            padding-bottom: 10px;
        }
        #generic_price_table_home li a {
            display: block;
            width: 50px;
            height: 50px;
            font-size: 0px;
        }
        #generic_price_table_home .blue {
            background: #3498db;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .emerald {
            background: #2ecc71;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .grey {
            background: #7f8c8d;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .midnight {
            background: #34495e;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .orange {
            background: #e67e22;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .purple {
            background: #9b59b6;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .red {
            background: #e74c3c;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .turquoise {
            background: #1abc9c;
            transition: all 0.3s ease-in-out 0s;
        }

        #generic_price_table_home .blue:hover,
        #generic_price_table_home .emerald:hover,
        #generic_price_table_home .grey:hover,
        #generic_price_table_home .midnight:hover,
        #generic_price_table_home .orange:hover,
        #generic_price_table_home .purple:hover,
        #generic_price_table_home .red:hover,
        #generic_price_table_home .turquoise:hover {
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            transition: all 0.3s ease-in-out 0s;
        }
        #generic_price_table_home .divider {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
        }
        #generic_price_table_home .divider span {
            width: 100%;
            display: table;
            height: 2px;
            background: #ddd;
            margin: 50px auto;
            line-height: 2px;
        }
        #generic_price_table_home .itemname {
            text-align: center;
            font-size: 50px;
            padding: 50px 0 20px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 40px;
            text-decoration: none;
            font-weight: 300;
        }
        #generic_price_table_home .itemnametext {
            text-align: center;
            font-size: 20px;
            padding-top: 5px;
            text-transform: uppercase;
            display: inline-block;
        }
        #generic_price_table_home .footer {
            padding: 40px 0;
        }

        .price-heading {
            text-align: center;
        }
        .price-heading h1 {
            color: #666;
            margin: 0;
            padding: 0 0 50px 0;
        }
        .demo-button {
            background-color: #333333;
            color: #ffffff;
            display: table;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 50px;
            outline-color: -moz-use-text-color;
            outline-style: none;
            outline-width: medium;
            padding: 10px;
            text-align: center;
            text-transform: uppercase;
        }
        .bottom_btn {
            background-color: #333333;
            color: #ffffff;
            display: table;
            font-size: 28px;
            margin: 60px auto 20px;
            padding: 10px 25px;
            text-align: center;
            text-transform: uppercase;
        }
        .demo-button:hover {
            background-color: #666;
            color: #fff;
            text-decoration: none;
        }
        .bottom_btn:hover {
            background-color: #666;
            color: #fff;
            text-decoration: none;
        }

    </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<div id="loading">
</div>

<div id="content">

<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="/">
                                <img src="{{asset('img/logo.png')}}"  width="250px"  alt="">
{{--                                <h3 style="color:#00D363;font-size: 30px">Talpyn.kz</h3>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="{{ Request::is('/') ? 'active' : null }}" href="{{'/'}}">Главная</a></li>
{{--                                    <li><a href="{{url('/course')}}">Курсы</a></li>--}}
{{--                                    <li><a href="#">Страницы <i class="ti-angle-down"></i></a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li><a href="course_details.html">Курс детали</a></li>--}}
{{--                                            <li><a href="elements.html">elements</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li><a href="{{url('/about')}}" class="{{ Request::is('about') ? 'active' : null }}">О нас</a></li>
                                    <li><a href="#tarif" class="{{ Request::is('blog') ? 'active' : null }}">Тарифы
{{--                                            <i class="ti-angle-down"></i>--}}
                                        </a>
{{--                                        <ul class="submenu">--}}
{{--                                            <li><a href="blog.html">Блоги</a></li>--}}
{{--                                            <li><a href="single-blog.html">single-blog</a></li>--}}
{{--                                        </ul>--}}
                                    </li>
{{--                                    <li><a href="{{url('/contact')}}" class="{{ Request::is('contact') ? 'active' : null }}">--}}
{{--                                            Контакты--}}
{{--                                        </a></li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                            <a href="{{ route('login')}}">
                               <div class="login">
                                        <i class="fas fa-sign-in-alt"></i>
                                        <span>Войти</span>
                               </div>
                            </a>
                            <div class="live_chat_btn">
                                <a href="tel:+7777777777" class="boxed_btn_orange">
                                    <i class="fa fa-phone"></i>
                                    <span>+7 (707) 018 4708</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    @yield('index')
    @yield('contact')
    @yield('about')
    @yield('blog')
    @yield('single-course')
    @yield('single-blog')
<!-- subscribe_newsletter_Start -->
{{--<div class="subscribe_newsletter">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-6 col-lg-6">--}}
{{--                <div class="newsletter_text">--}}
{{--                    <h3>Подписаться на рассылку</h3>--}}
{{--                    <p>Панель управления вашим доменом разработана для простоты использования и учитывает все аспекты вашего</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-5 offset-xl-1 col-lg-6">--}}
{{--                <div class="newsletter_form">--}}
{{--                    <h4>Напишите свой email: </h4>--}}
{{--                    <form action="#" class="newsletter_form">--}}
{{--                        <input type="text" placeholder="Наишите свой email почту...">--}}
{{--                        <button type="submit">Подписаться</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- subscribe_newsletter_end -->
<!-- our_latest_blog_start -->
{{--<div class="our_latest_blog">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-12">--}}
{{--                <div class="section_title text-center mb-100">--}}
{{--                    <h3>Наши последние новости</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-4 col-md-4">--}}
{{--                <div class="single_latest_blog">--}}
{{--                    <a href="{{url('blog/1')}}">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="{{asset('img/latest_blog/1.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog">--}}
{{--                        <div class="date">--}}
{{--                            <p>12 Март, 2020 in <a href="#">Админ</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="blog_meta">--}}
{{--                            <h3><a href="#">Название</a></h3>--}}
{{--                        </div>--}}
{{--                        <p class="blog_text">--}}
{{--                            Описание ОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписание Описание Описание Описание--}}

{{--                        </p>--}}
{{--                    </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-md-4">--}}
{{--                <div class="single_latest_blog">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="{{asset('img/latest_blog/2.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog">--}}
{{--                        <div class="date">--}}
{{--                            <p>20 Март, 2020 in <a href="#">Админ</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="blog_meta">--}}
{{--                            <h3><a href="#">Название</a></h3>--}}
{{--                        </div>--}}
{{--                        <p class="blog_text">--}}
{{--                           Описание ОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписание Описание Описание Описание--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-md-4">--}}
{{--                <div class="single_latest_blog">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="{{asset('img/latest_blog/3.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog">--}}
{{--                        <div class="date">--}}
{{--                            <p>12 Апреля, 2020 in <a href="#">Админ</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="blog_meta">--}}
{{--                            <h3><a href="#">Название</a></h3>--}}
{{--                        </div>--}}
{{--                        <p class="blog_text">--}}
{{--                            Описание ОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписание Описание Описание Описание--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- our_latest_blog_end -->
<!-- footer -->
    <div class="popular_courses">
        <div id="generic_price_table">
            <section id="tarif">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--PRICE HEADING START-->
                            <div class="price-heading clearfix">
                                <h1>Наши Тарифы</h1>
                            </div>
                            <!--//PRICE HEADING END-->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!--BLOCK ROW START-->
                    <div class="row">
                        <div class="col-md-4">
                            <!--PRICE CONTENT START-->
                            <div class="generic_content clearfix">
                                <!--HEAD PRICE DETAIL START-->
                                <div class="generic_head_price clearfix">
                                    <!--HEAD CONTENT START-->
                                    <div class="generic_head_content clearfix">
                                        <!--HEAD START-->
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Базовый</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->
                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
								<span class="price">
								<span class="sign">KZT</span>
								<span class="currency">1500</span>
								<span class="cent">.00</span>
								<span class="month">/мес</span>
								</span>
                                    </div>
                                    <!--//PRICE END-->
                                </div>
                                <!--//HEAD PRICE DETAIL END-->
                                <!--FEATURE LIST START-->
                                <div class="generic_feature_list">
                                    <ul>
                                        <li><span>100 шт.</span> Клиентская база</li>
                                        <li><span>Безлимит</span> Посещаемость</li>
                                        <li><span>Безлимит</span> Силабусы</li>
                                        <li><span>Безлимит</span> Оценки</li>
                                        {{--                                            <li><span>5</span> Support</li>--}}
                                    </ul>
                                </div>
                                <!--//FEATURE LIST END-->
                                <!--BUTTON START-->
                                <div class="generic_price_btn clearfix">
                                    <a class="popup-with-form" href="#test-form">Получить</a>
                                </div>
                                <!--//BUTTON END-->
                            </div>
                            <!--//PRICE CONTENT END-->
                        </div>
                        <div class="col-md-4">
                            <!--PRICE CONTENT START-->
                            <div class="generic_content active clearfix">
                                <!--HEAD PRICE DETAIL START-->
                                <div class="generic_head_price clearfix">
                                    <!--HEAD CONTENT START-->
                                    <div class="generic_head_content clearfix">
                                        <!--HEAD START-->
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Рассширенный</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->
                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
								<span class="price">
								<span class="sign">KZT</span>
								<span class="currency">3800</span>
								<span class="cent">.00</span>
								<span class="month">/мес</span>
								</span>
                                    </div>
                                    <!--//PRICE END-->
                                </div>
                                <!--//HEAD PRICE DETAIL END-->
                                <!--FEATURE LIST START-->
                                <div class="generic_feature_list">
                                    <ul>
                                        <li><span>Включено</span> Все из тарифа Базовый</li>
                                        <li><span>Безлимит</span> SMS-рассылки</li>
                                        <li><span>Безлимит</span> Экзамены</li>
                                        <li><span>Безлимит</span> Уведомление</li>
                                        <li><span>Безлимит</span> Управление GPA</li>
                                        <li><span>Безлимит</span> Генератор зарплаты</li>

                                    </ul>
                                </div>
                                <!--//FEATURE LIST END-->
                                <!--BUTTON START-->
                                <div class="generic_price_btn clearfix">
                                    <a class="popup-with-form" href="#test-form">Получить</a>
                                </div>
                                <!--//BUTTON END-->
                            </div>
                            <!--//PRICE CONTENT END-->
                        </div>
                        <div class="col-md-4">
                            <!--PRICE CONTENT START-->
                            <div class="generic_content clearfix">
                                <!--HEAD PRICE DETAIL START-->
                                <div class="generic_head_price clearfix">
                                    <!--HEAD CONTENT START-->
                                    <div class="generic_head_content clearfix">
                                        <!--HEAD START-->
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Полный</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->
                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
								<span class="price">
								<span class="sign">KZT</span>
								<span class="currency">5800</span>
								<span class="cent">.00</span>
								<span class="month">/мес</span>
								</span>
                                    </div>
                                    <!--//PRICE END-->
                                </div>
                                <!--//HEAD PRICE DETAIL END-->
                                <!--FEATURE LIST START-->
                                <div class="generic_feature_list">
                                    <ul>
                                        <li><span>1</span> Все из предедущих тарифов</li>
                                        <li><span>24/7</span> Полная поддержка</li>
                                        <li><span>Безлимит</span> Добавление событый</li>
                                        <li><span>Безлимит</span> Количество юзеров</li>
                                        <li><span>Включено</span> Оплата</li>
                                        <li><span>Отчет</span> График дохода</li>

                                    </ul>
                                </div>
                                <!--//FEATURE LIST END-->
                                <!--BUTTON START-->
                                <div class="generic_price_btn clearfix">
                                    <a href="#test-form" class="popup-with-form">Получить</a>
                                </div>
                                <!--//BUTTON END-->
                            </div>
                            <!--//PRICE CONTENT END-->
                        </div>
                    </div>
                    <!--//BLOCK ROW END-->
                </div>
            </section>
        </div>
    </div>
<footer class="footer footer_bg_1">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{asset('img/logo.png')}}"  width="200px" alt="">
{{--                                <h3 style="color:#00D363;font-size: 30px">Talpyn.kz</h3>--}}
                            </a>
                        </div>
                        <p>
                            Информационная система для создания единого образовательного пространства языковых школ.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
{{--                        <h3 class="footer_title">--}}
{{--                            Наши возможности--}}
{{--                        </h3>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">курсы 1</a></li>--}}
{{--                            <li><a href="#"> курсы 1</a></li>--}}
{{--                            <li><a href="#">курсы 1</a></li>--}}
{{--                            <li><a href="#">курсы 1</a></li>--}}
{{--                            <li><a href="#">курсы 1</a></li>--}}
{{--                        </ul>--}}

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Адресс
                        </h3>
                        <p>
                            34 а, Манаса/Жандосва<br>
                            +7 (777) 777 7777 <br>
                            info@talpyn.kz
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>document.write(new Date().getFullYear());</script> &copy;  Все права защищены <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="#" target="_blank"> Talpyn</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- footer -->
<!-- form itself end-->
<div id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <h3>Оставьте свои контакты</h3>
{{--                    <h3>Talpyn.kz</h3>--}}
{{--                    <img src="{{asset('img/logo.png')}}" width="100px" alt="">--}}
                </a>
            </div>

            <form action="{{route('create')}}" method="POST">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        {{csrf_field()}}
                        <input type="number" name="telephone" placeholder="Введите номер телефона">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="text" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Отправить</button>
                    </div>
                </div>
            </form>
{{--            <div class="col-xl-6">--}}
{{--                <a type="submit" class="boxed_btn align-content-center">Закрыть</a>--}}
{{--            </div>--}}

        </div>
    </div>
</div>

<!-- form itself end -->
<!-- JS here -->
<script>
    function onReady(callback) {
        var intervalId = window.setInterval(function() {
            if (document.getElementsByTagName('body')[0] !== undefined) {
                window.clearInterval(intervalId);
                callback.call(this);
            }
        }, 2500);
    }

    function setVisible(selector, visible) {
        document.querySelector(selector).style.display = visible ? 'block' : 'none';
    }

    onReady(function() {
        setVisible('#content', true);
        setVisible('#loading', false);
    });
</script>

<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/ajax-form.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/scrollIt.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/gijgo.min.js')}}"></script>

<!--contact js-->
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
</body>

</html>

<!-- header-end -->
