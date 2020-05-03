@extends('layouts.app')

@section('title', __('Посещаемость'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            @if(count($attendances) > 0)
                @if(Auth::user()->role != 'student')
                <ol class="breadcrumb" style="margin-top: 3%;">
                    <li><a href="{{url('school/sections?att=1')}}" style="color:#3b80ef;">@lang('Классы') &amp; @lang('Разделы')</a></li>
                    <li><a href="{{url()->previous()}}" style="color:#3b80ef;">@lang('Список студентов')</a></li>
                    <li class="active">@lang('Посмотреть посещаемость')</li>
                </ol>
                @endif
                <h2>@lang('Отрегулируйте посещаемость студента') -  {{$attendances[0]->student->name}}</h2>
            @endif
            <div class="panel panel-default">
                @if(count($attendances) > 0)
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.adjust-attendance',['attendances'=>$attendances,'student_id'=>$student_id])
                        
                    @endcomponent
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
