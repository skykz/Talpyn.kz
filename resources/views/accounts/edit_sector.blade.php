@extends('layouts.app')
@section('title', __('Изменить Раздел'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-8" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('Изменить Раздел')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @isset($sector)
                    <form class="form-horizontal" action="{{url('accounts/update-sector')}}" method="post">
                      {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$sector->id}}">
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">@lang('Название раздела')</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{$sector->name}}" placeholder="@lang('Название раздела')" required>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                          <label for="type" class="col-md-4 control-label">@lang('Тип раздела'): {{ucfirst($sector->type)}} (@lang('Текущий'))</label>

                          <div class="col-md-6">
                              <select class="form-control" name="type">
                                    <option value="income">@lang('Доход')</option>
                                    <option value="expense">@lang('Расходы')</option>
                              </select>

                              @if ($errors->has('type'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('type') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <a href="javascript:history.back()" class="btn btn-danger" style="margin-right: 2%;" role="button">@lang('Назад')</a>
                          <button type="submit" class="btn btn-danger">@lang('Сохранить')</button>
                        </div>
                      </div>
                    </form>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
