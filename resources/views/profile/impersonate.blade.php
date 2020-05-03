@extends('layouts.app')

@section('title', __('Олицетворять'))

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <h4>Все пользователи в системе</h4>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>@lang('ID')</th>
                    <th>@lang('Название')</th>
                    <th>@lang('Роль')</th>
                    <th>Попробовать</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($other_users as $other_user)
                <form method="POST" action="{{ url('/user/config/impersonate') }}">
                    {{ csrf_field() }}
                    <tr>
                        <td>{{ $other_user->id }}</td>
                        <td>{{ $other_user->name }}</td>
                        <td>{{ $other_user->role }}</td>
                        <td>
                            <input type="hidden" name="id" value="{{$other_user->id}}" />
                            <button class="btn btn-success">@lang('Войти в роли')</button>
                        </td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
