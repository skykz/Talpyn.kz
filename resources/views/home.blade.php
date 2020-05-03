@extends('layouts.app')

@section('content')
<style>
    .badge-download {
        background-color: transparent !important;
        color: #464443 !important;
    }
    .list-group-item-text{
      font-size: 12px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default" style="border-top: 0px;">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                        <div class="row">
                            <div class="page-panel-title" style="text-align: center;font-size: 55px;font-weight: bold;color: #703dcb">Панель мониторинга</div>
                            <hr>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card-custom" style="background-color: #82c2f9;
                                box-shadow: 0px 0px 8px 6px rgba(161, 185, 244, 0.46);
                                color: #194599;
                                border: 1px solid #b3bdf7;">
                                    <div class="card-body">
                                        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                            <div class="float-left">
                                                <i class="mdi mdi-cube text-danger icon-lg"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Общий доход</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0"><b>₸ 1,650,650</b></h3>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">--}}
{{--                                            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth </p>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card-custom" style="background-color: #a9fba2;
                                box-shadow: 0px 0px 8px 6px rgba(175, 244, 161, 0.46);
                                color: #146004;
                                border: 1px solid #a2ed86;">
                                    <div class="card-body">
                                        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                            <div class="float-left">
                                                <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Преподователи</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0"><b>{{$totalTeachers}}</b></h3>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">--}}
{{--                                            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales </p>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card-custom" style="background-color: #fba2a2;
                                box-shadow: 0px 0px 8px 6px rgba(244, 161, 161, 0.46);
                                color: #b00404;
                                border: 1px solid #ed8686;">
                                    <div class="card-body">
                                        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                            <div class="float-left">
                                                <i class="mdi mdi-poll-box text-success icon-lg"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Ученики</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0"><b>{{$totalStudents}}</b></h3>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">--}}
{{--                                            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales </p>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                                <div class="card-custom" style="background-color: #d7a2fb;
                                box-shadow: 0px 0px 8px 6px rgba(218, 161, 244, 0.46);
                                color: #5a1382;
                                border: 1px solid #d597e6;">
                                    <div class="card-body">
                                        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                            <div class="float-left">
                                                <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
                                            </div>
                                            <div class="float-right">
                                                <p class="mb-0 text-right">Классы / Курсы</p>
                                                <div class="fluid-container">
                                                    <h3 class="font-weight-medium text-right mb-0"><b>{{$totalClasses}}</b></h3>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">--}}
{{--                                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales </p>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
{{--                    <div class="row">--}}
{{--                        <div class="page-panel-title">Панель мониторинга</div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="card text-white bg-primary mb-3">--}}
{{--                                <div class="card-header">@lang('Учеников') - <b>{{$totalStudents}}</b></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="card text-white bg-success mb-3">--}}
{{--                                <div class="card-header">@lang('Учителя') - <b>{{$totalTeachers}}</b></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-4">--}}
{{--                            <div class="card text-white bg-dark mb-3">--}}
{{--                                <div class="card-header">@lang('Виды книг в библиотеке') - <b>{{$totalBooks}}</b></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="card text-white bg-danger mb-3">--}}
{{--                                <div class="card-header">@lang('Классы/Курсы') - <b>{{$totalClasses}}</b></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="card text-white bg-info mb-3">--}}
{{--                                <div class="card-header">@lang('Разделов') - <b>{{$totalSections}}</b></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <p></p>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel panel-default" style="background-color: rgba(242,245,245,0.8);">
                                <div class="panel-body">
                                    <h3>@lang('Добро пожаловать в ') <b>{{Auth::user()->school->name}}</b></h3>
                                    @lang('Ваше присутствие и сотрудничество помогут нам улучшить систему образования нашей организации.')
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Активные экзамены')</div>
                                <div class="panel-body">
                                    @if(count($exams) > 0)
                                    <table class="table">
                                        <tr>
                                            <th>@lang('Название Экзамена')</th>
                                            <th>@lang('Уведомление опубликовано')</th>
                                            <th>@lang('Результат опубликован')</th>
                                        </tr>
                                        @foreach($exams as $exam)
                                        <tr>
                                            <td>{{$exam->exam_name}}</td>
                                            <td>{{($exam->notice_published === 1)?__('Да'):__('Нет')}}</td>
                                            <td>{{($exam->result_published === 1)?__('Да'):__('Нет')}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    @lang('Нет активных экзаменов')
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Уведомление')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($notices) > 0)
                                    <div class="list-group">
                                        @foreach($notices as $notice)
                                        <a href="{{url($notice->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$notice->title}}</h5>
                                            <p class="list-group-item-text">@lang('Опубликовано в'):
                                                {{$notice->created_at->format('M d Y h:i:sa')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('Нет нового уведомления')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('События')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($events) > 0)
                                    <div class="list-group">
                                        @foreach($events as $event)
                                        <a href="{{url($event->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$event->title}}</h5>
                                            <p class="list-group-item-text">@lang('Опубликовано в'):
                                                {{$event->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('Нет нового события')
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Подпрограммы')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($routines) > 0)
                                    <div class="list-group">
                                        @foreach($routines as $routine)
                                        <a href="{{url($routine->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$routine->title}}</h5>
                                            <p class="list-group-item-text">@lang('Опубликовано в'):
                                                {{$routine->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('Нет новой рутины')
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="page-panel-title">@lang('Силлабусы')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($syllabuses) > 0)
                                    <div class="list-group">
                                        @foreach($syllabuses as $syllabus)
                                        <a href="{{url($syllabus->file_path)}}" class="list-group-item" download>
                                            <i class="badge badge-download material-icons">
                                                get_app
                                            </i>
                                            <h5 class="list-group-item-heading">{{$syllabus->title}}</h5>
                                            <p class="list-group-item-text">@lang('Опубликовано в'):
                                                {{$syllabus->created_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    @lang('Нет новой силлабуса')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
