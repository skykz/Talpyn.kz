{{--<div class="well" style="font-size: 15px;">@lang('Choose Field to Display')</div>--}}
<style>
  #grade-labels > .label{
    margin-right: 1%;
  }
</style>
<div class="col-md-12" id="grade-labels">
  <span class="label label-danger checkbox-inline">
    <input type="checkbox" name="attendance" value="4" checked> @lang('Посещаемость')
  </span>
  <span class="label label-primary checkbox-inline">
    <input type="checkbox" name="quiz[]" value="5" checked> @lang('Куиз') 1
  </span>
  <span class="label label-primary checkbox-inline">
    <input type="checkbox" name="quiz[]" value="6"> @lang('Куиз') 2
  </span>
  <span class="label label-primary checkbox-inline">
    <input type="checkbox" name="quiz[]" value="7"> @lang('Куиз') 3
  </span>
  <span class="label label-primary checkbox-inline">
    <input type="checkbox" name="quiz[]" value="8"> @lang('Куиз') 4
  </span>
  <span class="label label-primary checkbox-inline">
    <input type="checkbox" name="quiz[]" value="9"> @lang('Куиз') 5
  </span>
  <span class="label label-success checkbox-inline">
    <input type="checkbox" name="assignment[]" value="10" checked> @lang('Упржанение') 1
  </span>
  <span class="label label-success checkbox-inline">
    <input type="checkbox" name="assignment[]" value="11"> @lang('Упржанение') 2
  </span>
  <span class="label label-success checkbox-inline">
    <input type="checkbox" name="assignment[]" value="12"> @lang('Упржанение') 3
  </span>
  <span class="label label-info checkbox-inline">
    <input type="checkbox" name="ct[]" value="13" checked> @lang('Тест класса') 1
  </span>
  <span class="label label-info checkbox-inline">
    <input type="checkbox" name="ct[]" value="14"> @lang('Тест класса') 2
  </span>
  <span class="label label-info checkbox-inline">
    <input type="checkbox" name="ct[]" value="15"> @lang('Тест класса') 3
  </span>
  <span class="label label-info checkbox-inline">
    <input type="checkbox" name="ct[]" value="16"> @lang('Тест класса') 4
  </span>
  <span class="label label-info checkbox-inline">
    <input type="checkbox" name="ct[]" value="17"> @lang('Тест класса') 5
  </span>
  <span class="label label-default checkbox-inline">
    <input type="checkbox" name="few" value="18">@lang('Письменный экзамен')
  </span>
  <span class="label label-default checkbox-inline">
    <input type="checkbox" name="fem" value="19">@lang('Финальный экзамен MCQ')
  </span>
  <span class="label label-warning checkbox-inline">
    <input type="checkbox" name="practical" value="20">@lang('Практический')
  </span>
</div>
<br />
<br />
<form action="{{url('grades/save-grade')}}" method="POST">
  {{csrf_field()}}
  <input type="hidden" name="section_id" value="{{$section_id}}">
  <input type="hidden" name="course_id" value="{{$course_id}}">
  <input type="hidden" name="exam_id" value="{{$exam_id}}">
  <input type="hidden" name="teacher_id" value="{{$teacher_id}}">
  <div class="table-responsive">
    <table class="table table-condensed table-hover" id="marking-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">@lang('Код')</th>
          <th scope="col">@lang('Название')</th>
          <th scope="col">@lang('Посещаемость')</th>
          <th scope="col">@lang('Куиз') 1</th>
          <th scope="col">@lang('Куиз') 2</th>
          <th scope="col">@lang('Куиз') 3</th>
          <th scope="col">@lang('Куиз') 4</th>
          <th scope="col">@lang('Куиз') 5</th>
          <th scope="col">@lang('Упражнение') 1</th>
          <th scope="col">@lang('Упражнение') 2</th>
          <th scope="col">@lang('Упражнение') 3</th>
          <th scope="col">@lang('CT') 1</th>
          <th scope="col">@lang('CT') 2</th>
          <th scope="col">@lang('CT') 3</th>
          <th scope="col">@lang('CT') 4</th>
          <th scope="col">@lang('CT') 5</th>
          <th scope="col">@lang('Письменный')</th>
          <th scope="col">@lang('MCQ')</th>
          <th scope="col">@lang('Практический')</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($grades as $grade)
        <input type="hidden" name="grade_ids[]" value="{{$grade->id}}">
        <tr>
          <th scope="row">{{($loop->index + 1)}}</th>
          <td>{{$grade->student->student_code}}</td>
          <td>{{$grade->student->name}}</td>
          <td>
            <input type="number" name="attendance[]" class="form-control input-sm" placeholder="@lang('Посещаемость')" value="{{$grade->attendance}}">
          </td>
          <td>
            <input type="number" name="quiz1[]" class="form-control input-sm input-sm" value="{{$grade->quiz1}}"
              placeholder="@lang('Куиз 1')" max="20">
          </td>
          <td>
            <input type="number" name="quiz2[]" class="form-control input-sm" value="{{$grade->quiz2}}" placeholder="@lang('Куиз 2')">
          </td>
          <td>
            <input type="number" name="quiz3[]" class="form-control input-sm" value="{{$grade->quiz3}}" placeholder="@lang('Куиз 3')">
          </td>
          <td>
            <input type="number" name="quiz4[]" class="form-control input-sm" value="{{$grade->quiz4}}" placeholder="@lang('Куиз 4')">
          </td>
          <td>
            <input type="number" name="quiz5[]" class="form-control input-sm" value="{{$grade->quiz5}}" placeholder="@lang('Куиз 5')">
          </td>
          <td>
            <input type="number" name="assign1[]" class="form-control input-sm" placeholder="@lang('Упражнение 1')" value="{{$grade->assignment1}}">
          </td>
          <td>
            <input type="number" name="assign2[]" class="form-control input-sm" placeholder="@lang('Упражнение 2')" value="{{$grade->assignment2}}">
          </td>
          <td>
            <input type="number" name="assign3[]" class="form-control input-sm" placeholder="@lang('Упражнение 3')" value="{{$grade->assignment3}}">
          </td>
          <td>
            <input type="number" name="ct1[]" class="form-control input-sm" placeholder="@lang('CT 1')" value="{{$grade->ct1}}">
          </td>
          <td>
            <input type="number" name="ct2[]" class="form-control input-sm" placeholder="@lang('CT 2')" value="{{$grade->ct2}}">
          </td>
          <td>
            <input type="number" name="ct3[]" class="form-control input-sm" placeholder="@lang('CT 3')" value="{{$grade->ct3}}">
          </td>
          <td>
            <input type="number" name="ct4[]" class="form-control input-sm" placeholder="@lang('CT 4')" value="{{$grade->ct4}}">
          </td>
          <td>
            <input type="number" name="ct5[]" class="form-control input-sm" placeholder="@lang('CT 5')" value="{{$grade->ct5}}">
          </td>
          <td>
            <input type="number" name="written[]" class="form-control input-sm" placeholder="@lang('Письменный')" value="{{$grade->written}}">
          </td>
          <td>
            <input type="number" name="mcq[]" class="form-control input-sm" placeholder="@lang('Mcq')" value="{{$grade->mcq}}">
          </td>
          <td>
            <input type="number" name="practical[]" class="form-control input-sm" placeholder="@lang('Практический')" value="{{$grade->practical}}">
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div style="text-align:center;">
    <input type="submit" name="save" class="btn btn-primary" value="@lang('Сохранить')">
  </div>
</form>

<script>
  $(function () {
    for (var i = 6; i < 21; i++) {
      if (i == 10 || i == 13)
        continue;
      $("#marking-table td:nth-child(" + i + "),#marking-table th:nth-child(" + i + ")").hide();
    }
    $(":checkbox").change(function () {
      if ($(this).is(':checked')) {
        $("#marking-table td:nth-child(" + $(this).val() + "),#marking-table th:nth-child(" + $(this).val() +
          ")").show();
      } else {
        $("#marking-table td:nth-child(" + $(this).val() + "),#marking-table th:nth-child(" + $(this).val() +
          ")").hide();
      }
    });
  });
</script>
