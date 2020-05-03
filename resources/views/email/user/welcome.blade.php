@component('mail::message')

# @lang('Добро пожаловать в') {{ config('app.name') }}

@lang('Привет, ') {{ $name }},

@lang('Мы рады, что вы здесь.')

@if(!is_null($password))
@lang('Ваши данные для входа в систему следующие:')

**@lang('Email адрес')**: {{ $email }}

**@lang('Пароль')**: {{ $password }}

@lang('Вы можете изменить свой пароль после входа в систему.')
@else
@lang('Пожалуйста, попросите администратора сайта узнать ваш логин.')
@endif

@component('mail::button', ['url' => url('login')])
@lang('Посетить сайт')
@endcomponent

@lang('Спасибо большое'),<br>
{{ config('app.name') }}
@endcomponent
