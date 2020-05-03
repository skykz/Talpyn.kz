<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ (Auth::check() && (Auth::user()->role == 'student' || Auth::user()->role == 'teacher'
        || Auth::user()->role == 'admin' || Auth::user()->role == 'accountant' || Auth::user()->role ==
        'librarian'))?Auth::user()->school->name:config('app.name') }}</title>

    <link rel="stylesheet" href="{{ url('css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset("fontawesome-free-5.13.0-web/css/all.css")}}">

    <script src="{{ url('js/vendors.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/application.js') }}"></script>
    @yield('after_scripts')
    <style>
        .card-custom{
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            /*background-color: #fff;*/
            /*color: white;*/
            background-clip: border-box;
            border: none;
            /*box-shadow: 0px 0px 8px 6px rgba(0, 0, 0, 0.05);*/
            border: 1px solid #e6e6e6;
            border-radius: 10px;
        }
         .nav-item.active {
             background-color: #50fc30;
             font-weight: bold;
         }

        .nav-item.active a {
            color: #d93025;
        }

        .nav-link-text {
            padding-left: 10%;
        }

        #side-navbar ul>li>a {
            padding: 8px 15px;
        }

        /*#side-navbar {*/
        /*    position: fixed;*/
        /*    height: 100%;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*}*/

        .dropdown-menu > li > a:hover {
            text-decoration: none;
            color: #ffffff;
            background-color: #f3969a;
        }
    </style>
</head>

<body>
    @include('components.loader')
    <div id="app">
        @include('components.navbar-top')
        @yield('content')
    </div>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons&style=normal&weight=400"
      rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}" id="bootswatch-print-id">
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">
{{--    <script>--}}
{{--        var coll = document.getElementsByClassName("collapsible");--}}
{{--        var i;--}}

{{--        for (i = 0; i < coll.length; i++) {--}}
{{--            coll[i].addEventListener("click", function() {--}}
{{--                this.classList.toggle("active");--}}
{{--                var content = this.nextElementSibling;--}}
{{--                if (content.style.maxHeight){--}}
{{--                    content.style.maxHeight = null;--}}
{{--                } else {--}}
{{--                    content.style.maxHeight = content.scrollHeight + "px";--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
</body>

</html>
