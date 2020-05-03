@extends('layouts.app')

@section('title', __('Выручка'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('Счета-фактуры')
              </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tr>
                            <th>@lang('Плата за')</th>
                            <th>@lang('Дата оплаты')</th>
                            <th>@lang('Количество')</th>
                            <th>@lang('Статус оплаты')</th>
                        </tr>
                        @foreach ($receipts as $receipt)
                            <tr>
                                <td>{{$receipt->charge_for}}</td>
                                <td>{{$receipt->created_at}}</td>
                                <td>{{ $receipt->amount }}</td>
                                <td>{{($receipt->payment_status)?'Оплачено':'Неоплачено'}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
