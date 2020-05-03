@extends('layouts.app')

@section('title', __('Все классы и разделы'))

@section('content')
<style>
    #cls-sec .panel{
        margin-bottom: 0%;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <h2>@lang('Все классы и разделы')</h2>
            <div class="panel panel-default" id="cls-sec">
              @if(count($classes) > 0)
                @foreach ($classes as $class)
                    <div class="panel panel-default">
                        <div class="page-panel-title" role="tab" id="heading{{$class->id}}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$class->id}}" aria-expanded="false" aria-controls="collapse{{$class->id}}">{{$class->class_number}} {{ucfirst($class->group)}}</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$class->id}}" aria-expanded="false" aria-controls="collapse{{$class->id}}"><small><b>@lang('Нажмите, чтобы посмотреть все разделы в этом классе') <i class="material-icons">keyboard_arrow_down</i></b></small></a>
                                    </div>
                                    @if(isset($_GET['course']) && $_GET['course'] == 1)
                                    <div class="col-md-4">
                                        <a role="button" class="btn btn-info btn-xs" href="{{url('academic/syllabus/'.$class->id)}}"><i class="material-icons">visibility</i> @lang('Посмотреть программу для этого класса')</a>
                                    </div>
                                    @endif
                                </div>
                        </div>
                        <div id="collapse{{$class->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$class->id}}">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>@lang('Название раздела')</th>
                                            @if(isset($_GET['att']) && $_GET['att'] == 1)
                                            <th>@lang('Посмотреть сегодняшнюю посещаемость')</th>
                                            <th>@lang('Посмотреть посещаемость каждого студента')</th>
                                            <th>@lang('Дай посещаемость')</th>
                                            @endif
                                            @if(isset($_GET['course']) && $_GET['course'] == 1)
                                            <th>@lang('Посмотреть курсы')</th>
                                            <th>@lang('Посмотреть студентов')</th>
                                            <th>@lang('Посмотреть подпрограммы')</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sections as $section)
                                            @if($class->id == $section->class_id)
                                            <tr>
                                            <td>
                                                <a href="{{url('courses/0/'.$section->id)}}">{{$section->section_number}}</a>
                                            </td>
                                            @if(isset($_GET['att']) && $_GET['att'] == 1)
                                                @foreach ($exams as $ex)
                                                    @if ($ex->class_id == $class->id)
                                                        <td>
                                                            <a role="button" class="btn btn-primary btn-xs" href="{{url('attendances/'.$section->id.'/0/'.$ex->exam_id)}}"><i class="material-icons">visibility</i> @lang('Посмотреть сегодняшнюю посещаемость')</a>
                                                        </td>
                                                    @endif
                                                @endforeach
                                            <td>
                                                <a role="button" class="btn btn-danger btn-xs" href="{{url('attendances/'.$section->id)}}"><i class="material-icons">visibility</i> @lang('Посмотреть посещаемость каждого студента')</a>
                                            </td>
                                            <td>
                                                <?php
                                                    $ce = 0;    
                                                ?>
                                                @foreach ($exams as $ex)
                                                    @if ($ex->class_id == $class->id)
                                                        <?php
                                                            $ce = 1;
                                                        ?>
                                                        <a role="button" class="btn btn-info btn-xs" href="{{url('attendances/'.$section->id.'/0/'.$ex->exam_id)}}"><i class="material-icons">spellcheck</i> @lang('Принять участие')</a>
                                                    @endif
                                                @endforeach
                                                @if($ce == 0)
                                                    @lang('Назначить класс на экзамене')
                                                @endif
                                            </td>
                                            @endif
                                            @if(isset($_GET['course']) && $_GET['course'] == 1)
                                            <td>
                                                <a role="button" class="btn btn-info btn-xs" href="{{url('courses/0/'.$section->id)}}"><i class="material-icons">visibility</i> @lang('Посмотреть курсы в этом разделе')</a>
                                            </td>
                                            <td>
                                                <a role="button" class="btn btn-danger btn-xs" href="{{url('section/students/'.$section->id.'?section=1')}}"><i class="material-icons">visibility</i> @lang('Посмотреть студентов этого раздела')</a>
                                            </td>
                                            <td>
                                                <a role="button" class="btn btn-primary btn-xs" href="{{url('academic/routine/'.$section->id)}}"><i class="material-icons">visibility</i> @lang('Посмотреть подпрограммы для этого раздела')</a>
                                            </td>
                                            @endif
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
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
