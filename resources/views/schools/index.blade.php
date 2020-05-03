@extends('layouts.app')

@section('title', __('Управление школой'))

@section('content')
    <div class="container-fluid">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    @include('schools.form')
                    <h2><i class="fas fa-list"></i> @lang('Список школ')</h2>
                    <h4>@lang('Управление отделами, классами, секциями, продвижением студентов, курсами')</h4>
                    <br>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('Название')</th>
                                <th scope="col">@lang('Код')</th>
                                <th scope="col">@lang('О школе')</th>
                                <th scope="col">@lang('Изменить')</th>
                                <th scope="col">@lang('Админ')</th>
                                <th scope="col">@lang('Посмотреть админов')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schools as $school)
                                <tr>
                                    <td>{{($loop->index + 1)}}</td>
                                    <td><small>{{$school->name}}</small></td>
                                    <td><small>{{$school->code}}</small></td>
                                    <td><small>{{$school->about}}</small></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" role="button" href="{{ route('schools.edit', $school) }}" dusk="edit-school-link">
                                            <small><i class="fas fa-edit"></i> @lang('Изменить школу')</small>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" role="button" href="{{url('register/admin/'.$school->id.'/'.$school->code)}}">
                                            <small><i class="fas fa-plus"></i> @lang('Создать админа')</small>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" role="button" href="{{url('school/admin-list/'.$school->id)}}">
                                            <small><i class="fas fa-eye"></i> @lang('Посмотреть админов')</small>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" role="button" href="{{url('school/remove/'.$school->id)}}">
                                            <small><i class="fas fa-trash"></i> @lang('Удалить школу')</small>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $schools->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
