@extends('clients.layouts.app')
    @section('index')
        <!-- slider_area_start -->
        <div class="slider_area ">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="illastrator_png">
                                <img src="{{asset('img/banner/edu_ilastration.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="slider_info">
                                <h3>Мы создаём <br>
                                    единое пространство <br>
                                    для вашего обучения  </h3>
                                <a href="#tarif" class="boxed_btn">Посмотреть тарифы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->
        <!-- about_area_start -->
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="single_about_info">
                            <h3 >Что мы предлагаем <br>
                                </h3>
                            <p style="font-size: 14px" >Наши последние новости изменить контент о новостях про языковые школы,что они предлагают и что мы можем предложить взамен.
                                Подключите CRM и управляйте школой легко и быстро</p>
                            <a href="#test-form" class="boxed_btn popup-with-form">Получить CRM</a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_testmoial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testmonial_text text-center">
                                                <div class="author_img">
                                                    <img src="{{asset('img/screenshoots/screen1.png')}}" alt="">
                                                </div>
{{--                                                <p>--}}
{{--                                                    "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>--}}
{{--                                                    облегчить человеческие страдания."--}}
{{--                                                </p>--}}
{{--                                                <span>- Карина</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testmoial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testmonial_text text-center">
                                                <div class="author_img">
                                                    <img src="{{asset('img/screenshoots/screen2.png')}}" alt="" >
                                                </div>
{{--                                                <p>--}}
{{--                                                    "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>--}}
{{--                                                    облегчить человеческие страдания."--}}
{{--                                                </p>--}}
{{--                                                <span>- Карина</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testmoial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testmonial_text text-center">
                                                <div class="author_img">
                                                    <img src="{{asset('img/screenshoots/screen3.png')}}" alt="" >
                                                </div>
                                                {{--                                                <p>--}}
                                                {{--                                                    "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>--}}
                                                {{--                                                    облегчить человеческие страдания."--}}
                                                {{--                                                </p>--}}
                                                {{--                                                <span>- Карина</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testmoial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testmonial_text text-center">
                                                <div class="author_img">
                                                    <img src="{{asset('img/screenshoots/screen4.png')}}" alt="" >
                                                </div>
                                                {{--                                                <p>--}}
                                                {{--                                                    "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>--}}
                                                {{--                                                    облегчить человеческие страдания."--}}
                                                {{--                                                </p>--}}
                                                {{--                                                <span>- Карина</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testmoial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testmonial_text text-center">
                                                <div class="author_img">
                                                    <img src="{{asset('img/screenshoots/screen6.png')}}" alt="" >
                                                </div>
                                                {{--                                                <p>--}}
                                                {{--                                                    "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>--}}
                                                {{--                                                    облегчить человеческие страдания."--}}
                                                {{--                                                </p>--}}
                                                {{--                                                <span>- Карина</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 style="text-align: center;font-size: 40px;">Отзывы</h3>
        <hr>
        <!-- testimonial_area_start -->
        <div class="testimonial_area testimonial_bg_1 overlay">
            <div class="testmonial_active owl-carousel">
                <div class="single_testmoial">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testmonial_text text-center">
                                    <div class="author_img">
                                        <img src="{{asset('img/testmonial/author_img.png')}}" alt="">
                                    </div>
                                    <p>
                                        "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>
                                        облегчить человеческие страдания."
                                    </p>
                                    <span>- Карина</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_testmoial">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testmonial_text text-center">
                                    <div class="author_img">
                                        <img src="{{asset('img/testmonial/author_img.png')}}" alt="">
                                    </div>
                                    <p>
                                        "Работая совместно с гуманитарными агентствами, мы поддерживали программы <br>
                                        облегчить человеческие страдания."
                                    </p>
                                    <span>- Карина</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial_area_end -->
    @endsection
