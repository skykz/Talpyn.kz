<script>
  $(document).ready(function () {
    $('.nav-item.active').removeClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
  });
</script>

@if(Auth::user()->role != 'master')
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="{{url('user/'.Auth::user()->student_code)}}"><i class="fas fa-user"></i> <span
        class="nav-link-text">@lang('Мой профиль')</span></a>
  </li>
</ul>
@endif
<ul class="nav flex-column">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-columns"></i><span class="nav-link-text"> Главный панель</span></a>
  </li>
  @if(Auth::user()->role == 'admin')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="fas fa-calendar-alt"></i> <span class="nav-link-text">Посещаемость</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 280px;">
      <li class="nav-item">
        <a class="dropdown-item" href="#"><i class="material-icons">contacts</i> <span class="nav-link-text">Посещаемость учителя</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{url('school/sections?att=1')}}"><i class="material-icons">contacts</i> <span
            class="nav-link-text">Посещаемость ученика</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="#"><i class="material-icons">account_balance_wallet</i> <span class="nav-link-text">Посещаемость сотрудников</span></a>
      </li>
    </ul>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('school/sections?course=1') }}"><i class="material-icons">class</i> <span class="nav-link-text">Классы и Разделы</span></a>
  </li>
  @endif
  @if(Auth::user()->role != 'student')
  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/1/0')}}"><i class="fas fa-users"></i>
      <span class="nav-link-text">Ученики</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/0/1')}}"><i class="fas fa-users"></i>
      <span class="nav-link-text">Учителя</span></a>
  </li>
  @endif
  @if(Auth::user()->role == 'admin')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">line_style</i> <span class="nav-link-text">Экзамены</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 240px">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('exams/create') }}"><i class="material-icons">note_add</i> <span class="nav-link-text">Добавить экзамен</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('exams/active') }}"><i class="material-icons">developer_board</i> <span
            class="nav-link-text">Активные экзамены</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('exams') }}"><i class="material-icons">settings</i> <span class="nav-link-text">Управлять экзаменами</span></a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('grades/all-exams-grade') }}"><i class="material-icons">assignment</i> <span class="nav-link-text">Оценки</span></a>
  </li>
  <li class="nav-item" style="border-bottom: 1px solid #dbd8d8;"></li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/routine') }}"><i class="material-icons">calendar_today</i> <span class="nav-link-text">Класс рутин</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/syllabus') }}"><i class="material-icons">vertical_split</i> <span class="nav-link-text">Силлабусы</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/notice') }}"><i class="material-icons">announcement</i> <span class="nav-link-text">Уведомление</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/event') }}"><i class="material-icons">event</i> <span class="nav-link-text">События</span></a>
  </li>
  <li class="nav-item" style="border-bottom: 1px solid #dbd8d8;"></li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('settings.index') }}"><i class="material-icons">settings</i> <span class="nav-link-text">Академические настройки</span></a>
  </li>
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">chrome_reader_mode</i> <span class="nav-link-text">Управление GPA</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 250px;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('gpa/all-gpa') }}"><i class="material-icons">developer_board</i> <span
            class="nav-link-text">@lang('Все GPA')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('gpa/create-gpa') }}"><i class="material-icons">note_add</i> <span class="nav-link-text">Добавить новый GPA</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">monetization_on</i> <span class="nav-link-text">Генератор зарплаты</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('fees/all') }}"><i class="material-icons">developer_board</i> <span class="nav-link-text">Генератор формы</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('fees/create') }}"><i class="material-icons">note_add</i> <span class="nav-link-text">Добавить поля зп.</span></a>
      </li>
    </ul>
  </li>
  @endif

  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">account_balance_wallet</i> <span class="nav-link-text">Управление счетами</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 250px;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/accountant')}}"><i class="material-icons">account_balance_wallet</i>
          <span class="nav-link-text">Список бухгалтеров</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/sectors') }}"><i class="material-icons">developer_board</i>
		<span class="nav-link-text">Добавить сектор аккаунта</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/expense') }}"><i class="material-icons">note_add</i> <span
            class="nav-link-text">Добавить новый расход</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/expense-list') }}"><i class="material-icons">developer_board</i>
          <span class="nav-link-text">Список расходов</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/income') }}"><i class="material-icons">note_add</i> <span class="nav-link-text">Добавить новый доход</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/income-list') }}"><i class="material-icons">developer_board</i>
          <span class="nav-link-text">Список доходов</span></a>
      </li>
    </ul>
  </li>
  @endif
      @if(Auth::user()->role == 'student')
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('attendances/0/'.Auth::user()->id.'/0') }}"><i class="far fa-calendar-alt"></i>
          <span class="nav-link-text"> @lang('Моя посещаемость')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('courses/0/'.Auth::user()->section_id) }}"><i class="fas fa-book"></i>
          <span class="nav-link-text">@lang('Мои курсы')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('grades/'.Auth::user()->id) }}"><i class="far fa-file-powerpoint"></i> <span
            class="nav-link-text">@lang('Моя оценка')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('stripe/charge')}}"><i class="far fa-credit-card"></i><span class="nav-link-text">@lang('Оплата')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('stripe/receipts')}}"><i class="fas fa-file-invoice-dollar"></i> <span class="nav-link-text">@lang('Счета')</span></a>
      </li>
      @endif
{{--  <div style="text-align:center;">@lang('Student')</div>--}}
{{--  <div style="text-align:center;">@lang('Teacher')</div>--}}
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'librarian')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
        class="material-icons">local_library</i> <span class="nav-link-text">@lang('Управление библиотекой')</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 250px;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/librarian')}}"><i class="material-icons">local_library</i>
          <span class="nav-link-text">@lang('Список библиотекарей')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ route('library.books.index') }}"><i class="material-icons">developer_board</i>
          <span class="nav-link-text">@lang('Все книги')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('library/issued-books') }}"><i class="material-icons">developer_board</i>
          <span class="nav-link-text">@lang('Все выпущенные книги')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('library/issue-books') }}"><i class="material-icons">receipt</i> <span
            class="nav-link-text">@lang('Выпущенные книги')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ route('library.books.create') }}"><i class="material-icons">note_add</i> <span
            class="nav-link-text">@lang('Добавить новую книгу')</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'teacher')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('courses/'.Auth::user()->id.'/0') }}"><i class="fas fa-book-reader"></i>
      <span class="nav-link-text">@lang('Мои курсы')</span></a>
  </li>
  @endif
</ul>
<br><br>
{{--<div class="container-fluid p-0">--}}

{{--    <!-- Bootstrap row -->--}}
{{--    <div class="row" id="body-row">--}}
{{--        <!-- Sidebar -->--}}
{{--        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->--}}
{{--            <!-- Bootstrap List Group -->--}}
{{--            <ul class="list-group">--}}
{{--                <!-- Separator with title -->--}}
{{--                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">--}}
{{--                    <small>MAIN MENU</small>--}}
{{--                </li>--}}
{{--                <!-- /END Separator -->--}}
{{--                <!-- Menu with submenu -->--}}
{{--                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-dashboard fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Dashboard</span>--}}
{{--                        <span class="submenu-icon ml-auto"></span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- Submenu content -->--}}
{{--                <div id='submenu1' class="collapse sidebar-submenu">--}}
{{--                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">--}}
{{--                        <span class="menu-collapsed">Charts</span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">--}}
{{--                        <span class="menu-collapsed">Reports</span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">--}}
{{--                        <span class="menu-collapsed">Tables</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-user fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Profile</span>--}}
{{--                        <span class="submenu-icon ml-auto"></span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- Submenu content -->--}}
{{--                <div id='submenu2' class="collapse sidebar-submenu">--}}
{{--                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">--}}
{{--                        <span class="menu-collapsed">Settings</span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">--}}
{{--                        <span class="menu-collapsed">Password</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <a href="#" class="bg-dark list-group-item list-group-item-action">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-tasks fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Tasks</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- Separator with title -->--}}
{{--                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">--}}
{{--                    <small>OPTIONS</small>--}}
{{--                </li>--}}
{{--                <!-- /END Separator -->--}}
{{--                <a href="#" class="bg-dark list-group-item list-group-item-action">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-calendar fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Calendar</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="#" class="bg-dark list-group-item list-group-item-action">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-envelope-o fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Messages <span class="badge badge-pill badge-primary ml-2">5</span></span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- Separator without title -->--}}
{{--                <li class="list-group-item sidebar-separator menu-collapsed"></li>--}}
{{--                <!-- /END Separator -->--}}
{{--                <a href="#" class="bg-dark list-group-item list-group-item-action">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span class="fa fa-question fa-fw mr-3"></span>--}}
{{--                        <span class="menu-collapsed">Help</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">--}}
{{--                    <div class="d-flex w-100 justify-content-start align-items-center">--}}
{{--                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>--}}
{{--                        <span id="collapse-text" class="menu-collapsed">Collapse</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- Logo -->--}}
{{--                <li class="list-group-item logo-separator d-flex justify-content-center">--}}
{{--                    <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30" />--}}
{{--                </li>--}}
{{--            </ul><!-- List Group END-->--}}
{{--        </div><!-- sidebar-container END -->--}}

{{--    </div><!-- body-row END -->--}}


{{--</div><!-- container -->--}}

{{--<style>--}}
{{--    @import url('https://fonts.googleapis.com/css?family=Montserrat');--}}

{{--    /*-------------------------------- END ----*/--}}
{{--    #body-row {--}}
{{--        margin-left: 0;--}}
{{--        margin-right: 0;--}}
{{--    }--}}

{{--    #sidebar-container {--}}
{{--        min-height: 100vh;--}}
{{--        background-color: #132644;--}}
{{--        padding: 0;--}}
{{--        /* flex: unset; */--}}
{{--    }--}}

{{--    .sidebar-expanded {--}}
{{--        width: 230px;--}}
{{--    }--}}

{{--    .sidebar-collapsed {--}}
{{--        /*width: 60px;*/--}}
{{--        width: 100px;--}}
{{--    }--}}

{{--    /* ----------| Menu item*/--}}
{{--    #sidebar-container .list-group a {--}}
{{--        height: 50px;--}}
{{--        color: white;--}}
{{--    }--}}

{{--    /* ----------| Submenu item*/--}}
{{--    #sidebar-container .list-group li.list-group-item {--}}
{{--        background-color: #132644;--}}
{{--    }--}}

{{--    #sidebar-container .list-group .sidebar-submenu a {--}}
{{--        height: 45px;--}}
{{--        padding-left: 30px;--}}
{{--    }--}}

{{--    .sidebar-submenu {--}}
{{--        font-size: 0.9rem;--}}
{{--    }--}}

{{--    /* ----------| Separators */--}}
{{--    .sidebar-separator-title {--}}
{{--        background-color: #132644;--}}
{{--        height: 35px;--}}
{{--    }--}}

{{--    .sidebar-separator {--}}
{{--        background-color: #132644;--}}
{{--        height: 25px;--}}
{{--    }--}}

{{--    .logo-separator {--}}
{{--        background-color: #132644;--}}
{{--        height: 60px;--}}
{{--    }--}}

{{--    a.bg-dark {--}}
{{--        background-color: #132644 !important;--}}
{{--    }--}}

{{--</style>--}}

{{--<script>--}}
{{--    // Hide submenus--}}
{{--    $('#body-row .collapse').collapse('hide');--}}

{{--    // Collapse/Expand icon--}}
{{--    $('#collapse-icon').addClass('fa-angle-double-left');--}}

{{--    // Collapse click--}}
{{--    $('[data-toggle=sidebar-colapse]').click(function() {--}}
{{--        SidebarCollapse();--}}
{{--    });--}}

{{--    function SidebarCollapse () {--}}
{{--        $('.menu-collapsed').toggleClass('d-none');--}}
{{--        $('.sidebar-submenu').toggleClass('d-none');--}}
{{--        $('.submenu-icon').toggleClass('d-none');--}}
{{--        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');--}}

{{--        // Treating d-flex/d-none on separators with title--}}
{{--        var SeparatorTitle = $('.sidebar-separator-title');--}}
{{--        if ( SeparatorTitle.hasClass('d-flex') ) {--}}
{{--            SeparatorTitle.removeClass('d-flex');--}}
{{--        } else {--}}
{{--            SeparatorTitle.addClass('d-flex');--}}
{{--        }--}}

{{--        // Collapse/Expand icon--}}
{{--        $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');--}}
{{--    }--}}
{{--</script>--}}
