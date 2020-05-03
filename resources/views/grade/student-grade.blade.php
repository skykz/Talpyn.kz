@extends('layouts.app')

@section('title', __('Оценка'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            @if(Auth::user()->role != 'student')
            <ol class="breadcrumb" style="margin-top: 3%;">
                <li><a href="{{url('grades/all-exams-grade')}}" style="color:#3b80ef;">@lang('Оценки')</a></li>
                <li><a href="{{url()->previous()}}" style="color:#3b80ef;">@lang('Раздел студентов')</a></li>
                <li class="active">@lang('История')</li>
            </ol>
            @endif
            <h2>@lang('История оценок')</h2>
            <div class="panel panel-default">
              @if(count($grades) > 0)
              @foreach ($grades as $grade)
                <?php
                    $studentName = $grade->student->name;
                    $classNumber = $grade->student->section->class->class_number;
                    $sectionNumber = $grade->student->section->section_number;
                ?>
                <div class="page-panel-title"><b>@lang('Код студента')</b> - {{$grade->student->student_code}} &nbsp;<b>@lang('Имя')</b> -  {{$grade->student->name}} &nbsp;<b>@lang('Класс')</b> - {{$grade->student->section->class->class_number}} &nbsp;<b>@lang('Раздел')</b> - {{$grade->student->section->section_number}}</div>
                 @break($loop->first)
              @endforeach
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('layouts.student.grade-table')
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
