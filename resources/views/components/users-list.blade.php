{{$users->links()}}
<div class="table-responsive">
<table class="table table-bordered table-data-div table-condensed table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      @if(Auth::user()->role == 'admin')
        @if (!Session::has('section-attendance'))
        <th scope="col">@lang('Действие')</th>
        @endif
      @endif
      <th scope="col">@lang('Код')</th>
        <th scope="col">@lang('Аватарка')</th>
        <th scope="col">@lang('Полное имя')</th>
      @foreach ($users as $user)
        @if($user->role == 'student')
          @if(Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
            <th scope="col">@lang('Посещаемость')</th>
            {{--@if (!Session::has('section-attendance'))
            <th scope="col">@lang('Marks')</th>
            @endif --}}
          @endif
            @if (!Session::has('section-attendance'))
            <th scope="col">@lang('Сессия')</th>
            <th scope="col">@lang('Версия')</th>
            <th scope="col">@lang('Класс')</th>
            <th scope="col">@lang('Раздел')</th>
            <th scope="col">@lang('Отец')</th>
            <th scope="col">@lang('Мама')</th>
            @endif
        @elseif($user->role == 'teacher')
          @if (!Session::has('section-attendance'))
          <th scope="col">@lang('Email адрес')</th>
          @if(Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
            <th scope="col">@lang('Курсы')</th>
          @endif
          @endif
        @elseif($user->role == 'accountant' || $user->role == 'librarian')
          @if (!Session::has('section-attendance'))
          <th scope="col">@lang('Email адрес')</th>
          @endif
        @endif
        @break($loop->first)
      @endforeach
      @if (!Session::has('section-attendance'))
      <th scope="col">@lang('Пол')</th>
      <th scope="col">@lang('Кровь')</th>
      <th scope="col">@lang('Номер телефона')</th>
      <th scope="col">@lang('Адрес')</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$user)
    <tr>
      <th scope="row">{{ ($current_page-1) * $per_page + $key + 1 }}</th>
      @if(Auth::user()->role == 'admin')
        @if (!Session::has('section-attendance'))
        <td>
          <a class="btn btn-xs btn-danger" href="{{url('edit/user/'.$user->id)}}"><i class="fas fa-edit"></i> @lang('Изменить')</a>
        </td>
        @endif
      @endif
      <td><small>{{$user->student_code}}</small></td>
      <td>
        <small>
          @if(!empty($user->pic_path))
            <img src="{{asset('01-progress.gif')}}" data-src="{{url($user->pic_path)}}" style="border-radius: 50%;" width="50px" height="50px">
          @else
            @if(strtolower($user->gender) == trans('male'))
              <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/50/000000/user.png" style="border-radius: 50%;" width="50px" height="50px">&nbsp;
            @else
              <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/50/000000/user-female.png" style="border-radius: 50%;" width="50px" height="50px">&nbsp;
            @endif
          @endif
          </small>
      </td>
      <td><small>{{$user->name}}</small></td>
    @if($user->role == 'student')
        @if(Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
          <td><small><a class="btn btn-xs btn-info" role="button" href="{{url('attendances/0/'.$user->id.'/0')}}">@lang('Посмотреть посещаемость')</a></small></td>
          {{--@if (!Session::has('section-attendance'))
          <td><small><a class="btn btn-xs btn-success" role="button" href="{{url('grades/'.$user->id)}}">@lang('View Marks')</a></small></td>
          @endif --}}
        @endif
        @if (!Session::has('section-attendance'))
        <td>
          <small>
            {{$user->studentInfo['session']}}
            @if($user->studentInfo['session'] == now()->year || $user->studentInfo['session'] > now()->year)
              <span class="label label-success">@lang('Назначен')</span>
            @else
              <span class="label label-danger">@lang('Не назначен')</span>
            @endif
          </small>
        </td>
        <td><small>{{ucfirst($user->studentInfo['version'])}}</small></td>
        <td><small>{{$user->section->class->class_number}} {{!empty($user->group)? '- '.$user->group:''}}</small></td>
        <td style="white-space: nowrap;"><small>{{$user->section->section_number}}
          {{-- @if(Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
            - <a class="btn btn-xs btn-primary" role="button" href="{{url('courses/0/'.$user->section->id)}}">@lang('All Courses')</a>
          @endif --}}
          </small>
        </td>
        <td><small>{{$user->studentInfo['father_name']}}</small></td>
        <td><small>{{$user->studentInfo['mother_name']}}</small></td>
        @endif
      @elseif($user->role == 'teacher')
        @if (!Session::has('section-attendance'))
        <td>
          <small>{{$user->email}}</small>
        </td>
        @if(Auth::user()->role == 'student' || Auth::user()->role == 'teacher' || Auth::user()->role == 'admin')
        <td style="white-space: nowrap;">
          <small>
            <a class="btn-sm btn-primary" href="{{url('courses/'.$user->id.'/0')}}">@lang('Все курсы')</a>
          </small>
        </td>
        @endif
        @endif
      @elseif($user->role == 'accountant' || $user->role == 'librarian')
        @if (!Session::has('section-attendance'))
        <td>
          <small>{{$user->email}}</small>
        </td>
        @endif
      @endif
      @if (!Session::has('section-attendance'))
      <td><small>{{ucfirst($user->gender)}}</small></td>
      <td><small>{{$user->blood_group}}</small></td>
      <td><small>{{$user->phone_number}}</small></td>
      <td><small>{{$user->address}}</small></td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
</div>
{{$users->links()}}
