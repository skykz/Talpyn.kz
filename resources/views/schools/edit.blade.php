@extends('layouts.app')

@section('title', __('Изменить школу'))

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center">@lang('Изменить') {{$school->name}}</h2>

            <form class="form-horizontal" action="{{ route('schools.update', $school) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">@lang('Название школы')</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $school->name }}" placeholder="@lang('Название школы')" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                    <label for="about" class="col-md-4 control-label">@lang('О школе')</label>

                    <div class="col-md-6">
                        <textarea id="about" type="text" class="form-control" name="about"
                            placeholder="@lang('О школе')" required>{{ $school->about }}</textarea>

                        @if ($errors->has('about'))
                            <span class="help-block">
                                <strong>{{ $errors->first('about') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <a href="{{ route('schools.index') }}" class="btn btn-primary" style="margin-right: 10px;">@lang('Назад')</a>
                        <button  type="submit" class="btn btn-success">@lang('Сохранить')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
