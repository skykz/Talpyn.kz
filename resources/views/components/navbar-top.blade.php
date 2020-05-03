<nav class="navbar navbar-default navbar-static-top" style="background: linear-gradient(to right, #a64eee 0%, #3c35ce 100%);">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"
                aria-expanded="false">
                <span class="sr-only">@lang('Переключить навигацию')</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}" style="color: #ffffff;">
{{--                {{ (Auth::check() && (Auth::user()->role == 'student' || Auth::user()->role == 'teacher' ||--}}
{{--                Auth::user()->role == 'admin' || Auth::user()->role == 'accountant' || Auth::user()->role ==--}}
{{--                'librarian')) }}--}}
                <img src="{{asset('img/logo.png')}}" width="150px" alt="лого"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
{{--                <li><a href="{{ route('login') }}" style="color: #000;">@lang('Login')</a></li>--}}
                @else
                @if(\Auth::user()->role == 'student')
                <li class="nav-item">
                    <a href="{{url('user/'.\Auth::user()->id.'/notifications')}}" class="nav-link nav-link-align-btn"
                        role="button">
                        <i class="material-icons text-muted">@lang('email')</i>
                        <?php
                            $mc = \App\Notification::where('student_id',\Auth::user()->id)->where('active',1)->count();
                        ?>
                        @if($mc > 0)
                        <span class="label label-danger" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">{{$mc}}</span>
                        @endif
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle nav-link-align-btn" data-toggle="dropdown" role="button"
                        aria-expanded="false" aria-haspopup="true">
                        <i class="fas fa-user-circle-o"></i>
                        <span style="
                            font-size: 15px;
                            padding: 5px;
                            border-radius: 10px;
                            background: linear-gradient(to right, #baacea 0%, #dd1ca4 100%);">
                            {{ ucfirst(\Auth::user()->role) }}
                        </span>&nbsp;&nbsp;
                        @if(!empty(Auth::user()->pic_path))
                        <img src="{{asset('01-progress.gif')}}" data-src="{{url(Auth::user()->pic_path)}}" alt="Profile Picture"
                            style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;font-size: 15px">
                        @else
                        @if(strtolower(Auth::user()->gender) == 'male')
                        <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user.png"
                            alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                        @else
                        <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user-female.png"
                            alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                        @endif
                        @endif
                        &nbsp;&nbsp;<span style="font-size: 15px">{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        @if(Auth::user()->role != 'master')
                        <li>
                            <a href="{{url('user/'.Auth::user()->student_code)}}">@lang('Профиль')</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{url('user/config/change_password')}}">@lang('Изменить пароль')</a>
                        </li>
                        @if(env('APP_ENV') != 'production')
                        <li>
                            <a href="{{url('user/config/impersonate')}}">
                                {{ app('impersonate')->isImpersonating() ? __('Выйти из роли') : __('Войти в Роли ') }}
                            </a>                                
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                @lang('Выйти')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
