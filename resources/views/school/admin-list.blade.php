@extends('layouts.app')

@section('title', __('Админы'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schools.index') }}"><i class="fas fa-arrow-left"></i> @lang('Управление школой')</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10" id="main-container">
            <h2>Админы</h2>
            <div class="panel panel-default">
                @if(count($admins) > 0)
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>@lang('Действие')</th>
                            <th>@lang('Действие')</th>
                            <th>@lang('Название')</th>
                            <th>@lang('Код')</th>
                            <th>@lang('Email')</th>
                            <th>@lang('Номер телефона')</th>
                            <th>@lang('Адрес')</th>
                            <th>@lang('О школе')</th>
                        </tr>
                        @foreach ($admins as $admin)
                        <tr>
                            <td>
                                @if($admin->active == 0)
                                <a href="{{url('master/activate-admin/'.$admin->id)}}" class="btn btn-xs btn-success"
                                    role="button"><i class="fas fa-check-circle"></i>
                                    @lang('Активировать')</a>
                                @else
                                <a href="{{url('master/deactivate-admin/'.$admin->id)}}" class="btn btn-xs btn-danger"
                                    role="button"><i class="fas fa-window-close"></i>
                                    @lang('Деактивировать')</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{url('master/admin/edit/'.$admin->id)}}" class="btn btn-xs btn-info"
                                    role="button"><i class="fas fa-edit"></i>
                                    @lang('Изменить')</a>
                            </td>
                            <td>
                                {{$admin->name}}
                            </td>
                            <td>{{$admin->student_code}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->phone_number}}</td>
                            <td>{{$admin->address}}</td>
                            <td>{{$admin->about}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @else
                <div class="panel-body">
                    @lang('Нету данных.')
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
