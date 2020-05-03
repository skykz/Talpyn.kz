@extends('masters.layouts.appbar')
@section('main')

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                </button>

                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link" href="#">Page</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Page</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Page</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Page</a>--}}
{{--                        </li>--}}
                    </ul>
            </div>
{{--                <div class="page-panel-title">@lang('Админ Панель')</div>--}}


            </div>
        </nav>
        <div class="panel-body">
            <a class="btn btn-success btn-lg btn-block" href="{{ route('schools.index') }}" role="button">
                @lang('Начать управление школами')
            </a>
        </div>
    </div>

@endsection

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="page-panel-title">@lang('Админ Панель')</div>--}}

{{--                <div class="panel-body">--}}
{{--                    <a class="btn btn-success btn-lg btn-block" href="{{ route('schools.index') }}" role="button">--}}
{{--                        @lang('Начать управление школами')--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <h3><b>Список заявок от клиентов</b></h3>--}}
{{--                <hr>--}}
{{--                <table class="table table-striped">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col">#</th>--}}
{{--                        <th scope="col">Имя Клиента</th>--}}
{{--                        <th scope="col">Номер телефона</th>--}}
{{--                        <th scope="col">Дата создание</th>--}}
{{--                        <th scope="col">Действие</th>--}}

{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @if(!$orders->isEmpty())--}}
{{--                        @foreach($orders as $order)--}}

{{--                            <tr>--}}
{{--                                <th scope="row">{{$order->id}}</th>--}}
{{--                                <td>{{$order->name}}</td>--}}
{{--                                <td>{{$order->telephone}}</td>--}}
{{--                                <td>{{$order->created_at}}</td>--}}
{{--                                <td><a href="/delete/{{$order->id}}" class="btn btn-danger">--}}
{{--                                        <i class="fas fa-trash-alt"></i> Удалить</a>--}}
{{--                                    <a style="margin-left: 10px" href="tel:{{$order->telephone}}"  class="btn btn-primary">--}}
{{--                                        <i class="fas fa-phone-alt"></i> Позвонить</a></td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    @else--}}
{{--                        <tr>--}}
{{--                            <td></td>--}}
{{--                            <td></td>--}}
{{--                            <td style="text-align: center">Пока нет заявок</td>--}}
{{--                            <td></td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                    @endif--}}
{{--                    </tbody>--}}
{{--                </table>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
