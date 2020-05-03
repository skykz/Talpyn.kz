@extends('layouts.app')

@section('title', __('Добавить поле формы'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('Добавить поле формы')
              </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{url('fees/create')}}" method="post">
                      {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('fee_name') ? ' has-error' : '' }}">
                          <label for="fee_name" class="col-md-4 control-label">@lang('Название поле формы')</label>

                          <div class="col-md-6">
                              <input id="fee_name" type="text" class="form-control" name="fee_name" value="{{ old('fee_name') }}" placeholder="@lang('Название поле формы')" required>

                              @if ($errors->has('fee_name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('fee_name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-danger">@lang('Сохранить')</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
