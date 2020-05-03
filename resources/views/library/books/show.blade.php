@extends('layouts.app')

@section('title', __('Все книги'))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" id="side-navbar">
                @include('layouts.leftside-menubar')
            </div>
            <div class="col-md-10" id="main-container">
                <div class="panel panel-default">
                    <div class="page-panel-title">@lang('Детали книги')</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('Код книги')</th>
                                    <td>{{ $book->book_code }}</td>
                                    <th>@lang('Название книги')</th>
                                    <td>{{ $book->title }}</td>
                                    <th>@lang('Автор')</th>
                                    <td>{{ $book->author }}</td>
                                    <th>@lang('О книге')</th>
                                    <td>{{ $book->about }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('Количество')</th>
                                    <td>{{ $book->quantity }}</td>
                                    <th>@lang('№ Стеллаж')</th>
                                    <td>{{ $book->rackNo }}</td>
                                    <th>@lang('№ Строка')</th>
                                    <td>{{ $book->rowNo }}</td>
                                    <th>@lang('Тип')</th>
                                    <td>{{ $book->type }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('Картинка')</th>
                                    <td>
                                        <img src="{{ $book->img_path }}" alt="{{ $book->title }}" />
                                    </td>
                                    <th>@lang('Цена')</th>
                                    <td>{{ $book->price }}</td>
                                    <th>@lang('Класс')</th>
                                    <td>{{ $book->class->class_number }}</td>
                                    <th>@lang('Школа')</th>
                                    <td>{{ $book->school->name }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('Создан в')</th>
                                    <td>{{ $book->created_at }}</td>
                                    <th>@lang('Обновлен в')</th>
                                    <td>{{ $book->updated_at }}</td>
                                    <th>@lang('Добавлен ')</th>
                                    <td>{{ $book->user->name }}</td>
                                </tr>
                            </thead>
                        </table>

                    </div>
                    <div class="row">
                        <a href="{{ route('library.books.index') }}" class="btn btn-xs btn-primary">@lang('Все книги')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
