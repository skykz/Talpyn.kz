
<nav id="sidebar">
    <div class="sidebar-header">
        <img src="{{asset('img/logo.png')}}" width="200px" alt="logo">
    </div>

    <ul class="list-unstyled components">
        @if(Auth::user()->role == 'master')
            <div class="col-lg-8">
                <img src="{{url(Auth::user()->pic_path)}}" alt="Profile Picture"
                     style="horiz-align: center;border-style: none;border-radius: 50%;width: 70px;height: 70px;font-size: 15px;
                     box-shadow: 0 4px 8px 0 rgb(121,108,203), 0 6px 20px 0 rgb(90,86,203);">
            </div>
            <p>Приветствую, <span>{{Auth::user()->name}}</span></p>
        @endif

        <li class="{{Request::is('masters') ? 'active' : ''}}">
            <a href="{{url('masters/')}}" > Главная</a>
        </li>
        <li class="{{Request::is('orders') ? 'active' : ''}}">
            <a href="{{url('orders/')}}" > Заявки</a>
        </li>
        <li class="{{Request::is('income') ? 'active' : ''}}">
            <a href="{{url('income/')}}"> Счета</a>
        </li>
        <li>
            <a href="{{url('user/config/impersonate')}}"> Войти в другую роль</a>
        </li>
        <li>
            <a href="{{ route('logout') }}" style="color: #5610cb" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                @lang('Выйти')
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        {{--            <li>--}}
        {{--                <a href="#">Contact</a>--}}
        {{--            </li>--}}
    </ul>

</nav>
