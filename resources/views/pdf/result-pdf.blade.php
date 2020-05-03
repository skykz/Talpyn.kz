<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      table{
        font-size: 12px;
      }
      #table2 thead tr, #table2 tbody tr{
        padding: 5%;
        margin: 5%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-xs-12" style="text-align:center;">
          <h2>{{$user->section->class->school->name}} @lang('Школа')</h2>
          <div style="font-size: 11px;">{{$user->section->class->school->about}}</div>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-md-12">
        <p class="bg-primary" style="text-align: center;">
          @lang('ОТЧЕТНАЯ КАРТА')
        </p>
        <div class="col-xs-5">
          <table class="table-bordered" style="width:100%;">
            <tbody>
            <tr>
              <td style="padding-left:5px;">@lang('Студент ID')</td>
              <td style="padding-left:5px;">{{$user->student_code}}</td>
            </tr>
            <tr>
              <td style="padding-left:5px;">@lang('Имя студента')</td>
              <td style="padding-left:5px;">{{$user->name}}</td>
            </tr>
            <tr>
              <td style="padding-left:5px;">@lang('Класс')</td>
              <td style="padding-left:5px;">{{$user->section->class->class_number}}</td>
            </tr>
            <tr>
              <td style="padding-left:5px;">@lang('Раздел')</td>
              <td style="padding-left:5px;">{{$user->section->section_number}}</td>
            </tr>
            <tr>
              <td style="padding-left:5px;">@lang('Сессия')</td>
              <td style="padding-left:5px;">2019-20</td>
            </tr>
          </tbody>
          </table>
        </div>
        <div class="col-xs-2">
          <img src="https://avatars.io/platform/{{$user->student_code}}" width="100px">
        </div>
        <div class="col-xs-5">
          <table id="table2">
            <thead>
            <tr>
              <td style="padding-right: 5px;">@lang('Оценка буквы')</td>
              <td style="padding-right: 5px;">@lang('Маркс Интервал')</td>
              <td style="padding-right: 5px;">@lang('Оценки ')</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>A+</td>
              <td>80-100</td>
              <td>5.0</td>
            </tr>
            <tr>
              <td>A</td>
              <td>70-79</td>
              <td>4.0</td>
            </tr>
            <tr>
              <td>A-</td>
              <td>60-69</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>B</td>
              <td>50-59</td>
              <td>3.0</td>
            </tr>
            <tr>
              <td>C</td>
              <td>40-49</td>
              <td>2.0</td>
            </tr>
            <tr>
              <td>D</td>
              <td>33-39</td>
              <td>1.0</td>
            </tr>
            <tr>
              <td>F</td>
              <td>0-32</td>
              <td>0.0</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-md-12">
        @foreach ($grades as $grade)
        <p class="bg-primary" style="text-align: center;">
          {{$grade->exam->exam_name}}
        </p>
          @break($loop->first)
        @endforeach
        <div class="col-xs-12">
          <table class="table-bordered" style="width:100%;text-align:center;">
            <tr>
              <td rowspan="2"><b>@lang('Srl.')</b></td>
              <td rowspan="2" style="width: 30%;text-align:none;padding-left:5px;"><b>@lang('Предметы')</b></td>
              <td rowspan="2">@lang('Общая оценка')</td>
              <td rowspan="2">@lang('AT')</td>
              <td rowspan="2">@lang('CT+Q')</td>
              <td colspan="4">@lang('Экзамены')</td>
              <td rowspan="2"><b>@lang('Итоговые оценки')</b></td>
              <td rowspan="2">@lang('Высокая оценка')</td>
              <td rowspan="2">@lang('Оценки ввиде букв')</td>
              <td rowspan="2">@lang('Оценки')</td>
            </tr>
            <tr>
              <td>@lang('OB')</td>
              <td>@lang('SB')</td>
              <td>@lang('Итого')</td>
              <td>75%</td>
            </tr>
            <tr>
              <td>1</td>
              <td style="text-align:none;padding-left:5px;">@lang('Bangla 1st Paper')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>2</td>
              <td style="text-align:none;padding-left:5px;">@lang('Bangla 2nd Paper')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>3</td>
              <td style="text-align:none;padding-left:5px;">@lang('English 1st Paper')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>4</td>
              <td style="text-align:none;padding-left:5px;">@lang('English 2nd Paper')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>5</td>
              <td style="text-align:none;padding-left:5px;">@lang('Math')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>6</td>
              <td style="text-align:none;padding-left:5px;">@lang('Physics')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>7</td>
              <td style="text-align:none;padding-left:5px;">@lang('Chemistry')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td>8</td>
              <td style="text-align:none;padding-left:5px;">@lang('Biology')</td>
              <td>100</td>
              <td>5</td>
              <td>11.89</td>
              <td>16</td>
              <td>34</td>
              <td>53.45</td>
              <td>33.60</td>
              <td><b>68</b></td>
              <td>89</td>
              <td>A-</td>
              <td>3.5</td>
            </tr>
            <tr>
              <td colspan="2"><b>@lang('Итоговые оценки & Итоговый GPA')</b></td>
              <td colspan="7"></td>
              <td colspan="2" style="text-align:left;padding-left:5px;">353</td>
              <td colspan="2" style="text-align:right;padding-right:5px;">15.50</td>
            </tr>
            <tr>
              <td colspan="2">
                <table class="table-bordered" style="width:100%;">
                  <tr>
                    <td style="padding-left:5px;">@lang('Средний балл')</td>
                    <td style="padding-left:5px;"><b>2.58</b></td>
                  </tr>
                </table>
              </td>
              <td colspan="7" style="padding-left:5px;">@lang('Точка в списке заслуг')</td>
              <td colspan="4" style="text-align:center;">@lang('Посещаемость')</td>
            </tr>
            <tr>
              <td colspan="2">
                <table class="table-bordered" style="width:100%;">
                  <tr>
                    <td style="padding-left:5px;">@lang('Оценка буквы')</td>
                    <td style="padding-left:5px;"><b>C</b></td>
                  </tr>
                </table>
              </td>
              <td colspan="7">
                <table class="table-bordered" style="width:100%;">
                  <tr>
                    <td style="padding-left:5px;">@lang('Раздел')</td>
                    <td style="text-align:center;">36 @lang('из') 99</td>
                  </tr>
                </table>
              </td>
              <td colspan="4">
                <table class="table-bordered" style="width:100%;">
                  <tr>
                    <td style="padding-left:5px;">@lang('Настоящие дни')</td>
                    <td style="text-align:center;">70</td>
                    <td style="padding-left:5px;">@lang('Отсутствует')</td>
                    <td style="text-align:center;">2</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td colspan="13"  style="text-align:left;padding-left:5px;height:50px;">@lang('Примечание'):</td>
            </tr>
          </table>
          <br/>
          <br/>
          <br/>
          <table style="width:100%;">
            <tr>
              <td style="padding:5px;"><b>@lang('Подпись')</b></td>
              <td style="padding:5px;">@lang('Родители / опекуны')</td>
              <td style="padding:5px;">@lang('Основной')</td>
              <td style="padding:5px;"></td>
              <td style="padding:5px;"></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
