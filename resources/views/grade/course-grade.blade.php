@extends('layouts.app')

@section('title', __('Оценка'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('courses/save-configuration')}}" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$course_id}}">
            <div class="panel panel-default" id="main-container">
              @if(count($grades) > 0)
              @foreach ($grades as $grade)
                <div class="page-panel-title" style="font-size: 15px;"><b>@lang('Курс')</b> - {{$grade->course->course_name}} &nbsp; <b>@lang('Класс')</b> - {{$grade->course->section->class->class_number}} &nbsp;<b>@lang('Раздел')</b> - {{$grade->course->section->section_number}} &nbsp;<b>@lang('Экзамен')</b> - {{$grade->exam->exam_name}}
                  <button type="submit" class="btn btn-success btn-xs pull-right">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> @lang('Сохранить')
                  </button>
                </div>
                @break($loop->first)
              @endforeach
                <div class="panel-body" style="padding-top: 0px;">
                  <div class="alert alert-info alert-dismissible" style="font-size:13px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                      <li>
                        @lang('Выберите, какую систему оценок вы хотите использовать.')
                      </li>
                      <li>
                        <b>@lang('Пример подсчета'):</b> @lang('Если вы берете 3 куиза и хотите посчитать лучшие 2, то количество куиза равно 2.')
                      </li>
                      <li>
                        <b>@lang('Пример процента'):</b> @lang('Общий процент должен быть 100%. Вы можете поместить 100% в поле или распределить его в соответствии с вашими потребностями. Для работы в процентах также необходима полная оценка').
                      </li>
                      <li>
                        <b>@lang('Пример полной оценки'):</b> @lang('Если вы сдаете тест по классу, где полный балл равен 15, тогда полный балл по тесту класса составляет 15').
                      </li>
                    </ul>
                  </div>
                      <table class="table table-condensed table-hover">
                        <thead>
                          <tr>
                            <th scope="col" style="width:10%;">@lang('Выберите систему оценок')</th>
                            <th scope="col" style="width:10%;">@lang('Количество куиза')</th>
                            <th scope="col" style="width:10%;">@lang('Количество упражнений')</th>
                            <th scope="col" style="width:10%;">@lang('Количество тестов класса')</th>
                            <th scope="col" style="width:10%;">@lang('посещаемость %')</th>
                            <th scope="col" style="width:10%;">@lang('Упражнение ')%</th>
                            <th scope="col" style="width:10%;">@lang('Куиз %')</th>
                            <th scope="col" style="width:10%;">@lang('Тест класса %')</th>
                          </tr>
                        </thead>
                        <?php
                          $section_id = 0;
                        ?>
                        @foreach ($grades as $grade)
                        <tbody>
                          <tr>
                            <td>
                              <select class="form-control input-sm" name="grade_system_name">
                                @foreach($gradesystems as $gs)
                              <option {{($grade->course->grade_system_name == $gs->grade_system_name)?'selected=selected':''}}>{{$gs->grade_system_name}}</option>
                                @endforeach
                              </select>
                            </td>
                            <td>
                            <input type="number" class="form-control input-sm" id="quiz-count" name="quiz_count" placeholder="@lang('Счет куиза')" max="5" value="{{$grade->course->quiz_count}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="assignment-count" name="assignment_count" placeholder="@lang('Счет упражнений')" max="3" value="{{$grade->course->assignment_count}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="ct-count" name="ct_count" placeholder="@lang('Счет CT')" max="5" value="{{$grade->course->ct_count}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="attendance" name="attendance_percent" placeholder="@lang('Процент')" max="50" value="{{$grade->course->attendance_percent}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="assignment" name="assignment_percent"
                              placeholder="@lang('Процент')" max="50" value="{{$grade->course->assignment_percent}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="quiz" name="quiz_percent" placeholder="@lang('Процент')" max="50" value="{{$grade->course->quiz_percent}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="class-test" name="ct_percent" placeholder="@lang('Процент')" max="50" value="{{$grade->course->ct_percent}}">
                            </td>
                          </tr>
                          <tr>
                            <th scope="col" style="width:10%;">@lang('Финальный экзамен %')</th>
                            <th scope="col" style="width:10%;">@lang('Практика %')</th>
                            <th scope="col" style="width:10%;">
                              @lang('Общий оценки куизов')
                            </th>
                            <th scope="col" style="width:10%;">
                              @lang('Полная оценка упражнений')
                            </th>
                            <th scope="col" style="width:10%;">
                              @lang('CT полная оценка')
                            </th>
                            <th scope="col" style="width:10%;">
                              @lang('Итоговый экзамен')
                            </th>
                            <th scope="col" style="width:10%;">
                              @lang('Практические полные оценки')
                            </th>
                            <th scope="col" style="width:10%;">
                              @lang('Полные оценки посещаемости ')
                            </th>
                          </tr>
                          <tr>
                            <td>
                              <input type="number" class="form-control input-sm" id="final" name="final_exam_percent" placeholder="@lang('Процент')" max="100" value="{{$grade->course->final_exam_percent}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="practical_percent" name="practical_percent" placeholder="@lang('Процент')" max="100" value="{{$grade->course->practical_percent}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="q_full" name="quiz_fullmark" placeholder="@lang('Полная оценка куизов')" max="20" value="{{$grade->course->quiz_fullmark}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="a_full" name="a_fullmark" placeholder="@lang('Полная оценка упражнений')" max="20" value="{{$grade->course->a_fullmark}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="ct_full" name="ct_fullmark" placeholder="@lang('Полная оценка CT')" max="20" value="{{$grade->course->ct_fullmark}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="final_full" name="final_fullmark" placeholder="@lang('Полная финальная оценка')" max="100" value="{{$grade->course->final_fullmark}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="practical_full" name="practical_fullmark" placeholder="@lang('Полная практическая оценка')" max="100" value="{{$grade->course->practical_fullmark}}">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm" id="att_full" name="att_fullmark" placeholder="@lang('Полная оценка посещаемости')" max="100" value="{{$grade->course->att_fullmark}}">
                            </td>
                          </tr>
                        </tbody>
                          <?php
                            $section_id = $grade->course->section->id;
                          ?>
                          @break($loop->first)
                        @endforeach
                      </table>
                </div>
              @else
                <div class="panel-body">
                  @lang('No Related Data Found.')
                </div>
              @endif
            </div>
          </form>
            <div class="panel panel-default">
              @if(count($grades) > 0)
              <div class="page-panel-title" style="font-size: 15px;">
                <form action="{{url('grades/calculate-marks')}}" method="POST">
                  {{csrf_field()}}
                  @lang('Give Marks to Students')
                  <input type="hidden" name="course_id" value="{{$course_id}}">
                  <input type="hidden" name="section_id" value="{{$section_id}}">
                  
                  @foreach($gradesystems as $gs)
                    <input type="hidden" name="grade_system_name" value="{{$gs->grade_system_name}}">
                  @endforeach
                  <input type="hidden" name="exam_id" value="{{$exam_id}}">
                  <input type="hidden" name="teacher_id" value="{{$teacher_id}}">
                  <button type="submit" class="btn btn-info btn-xs pull-right">
                    <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> @lang('Получить итоговою оценку')
                  </button>
                </form>
              </div>
              <div class="panel-body">
                @include('layouts.teacher.grade-form')
              </div>
              @else
                <div class="panel-body">
                  @lang('No Related Data Found.')
                </div>
              @endif
            </div>
        </div>
    </div>
</div>
@endsection
