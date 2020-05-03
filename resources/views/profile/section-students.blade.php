@extends('layouts.app')

@section('title', __('Курсы студента'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <ol class="breadcrumb" style="margin-top: 3%;">
                @if(isset($_GET['grade']) && $_GET['grade'] == 1)
                    <li><a href="{{url('grades/all-exams-grade')}}" style="color:#3b80ef;">@lang('Оценки')</a></li>
                @else
                    <li><a href="{{url('school/sections?course=1')}}" style="color:#3b80ef;">@lang('Разделы')</a></li>
                @endif
                <li class="active">@lang('Студенты')</li>
            </ol>
            <h2>@lang('Раздела ученика')</h2>
            <div class="panel panel-default">
              @if(count($students) > 0)
                <div class="panel-body">
                    <table class="table table-data-div table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">@lang('Sl.')</th>
                            <th scope="col">@lang('Код студента')</th>
                            <th scope="col">@lang('Название студента')</th>
                            <th scope="col">@lang('Статус')</th>
                            <th scope="col">@lang('История оценки')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{($loop->index+1)}}</td>
                            <td>{{$student->student_code}}</td>
                            <td><a href="{{url('user/'.$student->student_code)}}">{{$student->name}}</a></td>
                            <td>
                            @if($student->studentInfo['session'] == now()->year || $student->studentInfo['session'] > now()->year)
                            <span class="label label-success">@lang('Назначен/New')</span>
                            @else
                            <span class="label label-danger">@lang('Не повышен')</span>
                            @endif
                            </td>
                            <td><a class="btn btn-xs btn-success" role="button" href="{{url('grades/'.$student->id)}}">@lang('Посмотреть историю оценок')</a></td>
                        </tr>
                        @endforeach
                        </tbody>
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
