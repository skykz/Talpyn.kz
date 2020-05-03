@extends('layouts.app')

@section('title', __('Оценка'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-8" id="main-container">
            @if(Auth::user()->role != 'student')
            <ol class="breadcrumb" style="margin-top: 3%;">
                <li><a href="{{url('grades/all-exams-grade')}}" style="color:#3b80ef;">@lang('Оценки')</a></li>
                <li class="active">@lang('Оценка Раздела')</li>
            </ol>
            @endif
            <h2>@lang('Знаки и оценки')</h2>
            <div class="panel panel-default">
              @if(count($grades) > 0)
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($grades as $grade)
                        <b>@lang('Класс'):</b> {{$grade->course->class->class_number}} &nbsp;
                        <b>@lang('Раздел'):</b> {{$grade->student->section->section_number}}
                        @break
                    @endforeach
                    <table class="table table-data-div table-bordered table-striped">
                        <thead>
                        <tr>
                            <th scope="row">@lang('Название экзамена')</th>
                            <th scope="row">@lang('Название курса')</th>
                            <th scope="row">@lang('Код студента')</th>
                            <th scope="row">@lang('Имя студента')</th>
                            <th scope="row">@lang('Общая оценка')</th>
                            <th scope="row">@lang('GPA')</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($grades as $grade)
                        <tr>
                            <td>{{$grade->exam->exam_name}}</td>
                            <td>{{$grade->course->course_name}}</td>
                            <td>{{$grade->student->student_code}}</td>
                            <td><a href="{{url('user/'.$grade->student->student_code)}}">{{$grade->student->name}}</a></td>
                            <td>{{$grade->marks}}</td>
                            <td>{{$grade->gpa}}</td>
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
