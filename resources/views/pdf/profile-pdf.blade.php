<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{$user->name}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      table{
        font-size: 12px;
      }
      h2{
        font-size: 20px;
      }
      h3{
        font-size: 15px;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12">
        <div class="col-xs-8">
          <h2>{{$user->section->class->school->name}}</h2>
          <div style="font-size: 10px;">{{$user->section->class->school->about}}</div>
        </div>
        <div class="col-xs-4">
          <h3>@lang('Профиль студента')</h3>
          <div style="font-size: 10px;">@lang('Printing Date'): {{Carbon\Carbon::now()->format('d/m/Y')}}</div>
        </div>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-md-12">
        <p class="bg-primary" style="text-align:center;">
          @lang('Академическая информация')
        </p>
        <div class="col-xs-9">
          <table class="table table-condensed">
            <tr>
              <td>@lang('Студент ID'):</td>
              <td>{{$user->student_code}}</td>
              <td>@lang('Имя Студента'):</td>
              <td>{{$user->name}}</td>
            </tr>
            <tr>
              <td>@lang('Класс'):</td>
              <td>{{$user->section->class->class_number}}</td>
              <td>@lang('Раздел'):</td>
              <td>{{$user->section->section_number}}</td>
            </tr>
            <tr>
              <td>@lang('Сессия'):</td>
              <td>{{$user->session}}</td>
              <td>@lang('Версия'):</td>
              <td>{{$user->version}}</td>
            </tr>
            <tr>
              <td>@lang('Группа'):</td>
              <td>{{$user->group}}</td>
              <td colspan="2"></td>
            </tr>
          </table>
        </div>
        <div class="col-xs-3">
          <img src="https://avatars.io/platform/{{$user->student_code}}" width="120px" height="120px">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="bg-primary" style="text-align:center;">
          @lang('Персональные детали')
        </p>
        <div class="col-xs-12">
          <table class="table table-condensed">
            <tr>
              <td>@lang('Email адрес'):</td>
              <td>{{$user->email}}</td>
              <td>@lang('Контактный номер')</td>
              <td>{{$user->phone_number}}</td>
            </tr>
            <tr>
              <td>@lang('Пол'):</td>
              <td>{{$user->gender}}</td>
              <td>@lang('Группа крови'):</td>
              <td>{{$user->blood_group}}</td>
            </tr>
            <tr>
              <td>@lang('Нация'):</td>
              <td>{{$user->nationality}}</td>
              <td>@lang('День рождение'):</td>
              <td>{{Carbon\Carbon::parse($user->birthday)->format('d/m/Y')}}</td>
            </tr>
            <tr>
              <td>@lang('Религия'):</td>
              <td>{{$user->religion}}</td>
              <td>@lang('Имя отца'):</td>
              <td>{{$user->father_name}}</td>
            </tr>
            <tr>
              <td>@lang('Имя мамы'):</td>
              <td>{{$user->mother_name}}</td>
              <td>@lang('Адрес'):</td>
              <td>{{$user->address}}</td>
            </tr>
            <tr>
              <td>@lang('Номер телефона'):</td>
              <td>{{$user->phone_number}}</td>
              <td>@lang('Номер отца'):</td>
              <td>{{$user->father_phone_number}}</td>
            </tr>
            <tr>
              <td>@lang('Father's National ID'):</td>
              <td>{{$user->father_national_id}}</td>
              <td>@lang('Father's Occupation'):</td>
              <td>{{$user->father_occupation}}</td>
            </tr>
            <tr>
              <td>@lang('Father's Designation'):</td>
              <td>{{$user->father_designation}}</td>
              <td>@lang('Father's Annual Income'):</td>
              <td>{{$user->father_annual_income}}</td>
            </tr>
            <tr>
              <td>@lang('Mother's Phone Number'):</td>
              <td>{{$user->mother_phone_number}}</td>
              <td>@lang('Mother's National ID'):</td>
              <td>{{$user->mother_national_id}}</td>
            </tr>
            <tr>
              <td>@lang('Mother's Occupation'):</td>
              <td>{{$user->mother_occupation}}</td>
              <td>@lang('Mother's Designation'):</td>
              <td>{{$user->mother_designation}}</td>
            </tr>
            <tr>
              <td>@lang('Mother's Annual Income'):</td>
              <td>{{$user->mother_annual_income}}</td>
              <td>@lang('О себе'):</td>
              <td>{{$user->about}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
