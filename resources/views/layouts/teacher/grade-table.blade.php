<div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@lang('Код студента')</th>
      <th scope="col">@lang('Имя студента')</th>
      <th scope="col">@lang('Посещаемость')</th>
        @for($i=1;$i<=5;$i++)
          <th scope="col">@lang('Куиз') {{$i}}</th>
        @endfor
        @for($i=1;$i<=3;$i++)
          <th scope="col">@lang('Упражнение') {{$i}}</th>
        @endfor
        @for($i=1;$i<=5;$i++)
          <th scope="col">@lang('CT') {{$i}}</th>
        @endfor
        @if($grade->course->final_exam_percent > 0)
          <th scope="col">@lang('Письменный')</th>
          <th scope="col">@lang('Mcq')</th>
        @endif
        @if($grade->course->practical_percent > 0)
          <th scope="col">@lang('Практический')</th>
        @endif
      <th scope="col">@lang('Всего оценок')</th>
      <th scope="col">@lang('GPA')</th>
      <th scope="col">@lang('Оценка')</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($grades as $grade)
    <tr>
      <th scope="row">{{($loop->index + 1)}}</th>
      <td>{{$grade->student->student_code}}</td>
      <td><a href="{{url('user/'.$grade->student->student_code)}}">{{$grade->student->name}}</a></td>
      <td>{{$grade->attendance}}</td>
      @for($i=1;$i<=5;$i++)
        <td>{{$grade['quiz'.$i]}}</td>
      @endfor
      @for($i=1;$i<=3;$i++)
        <td>{{$grade['assignment'.$i]}}</td>
      @endfor
      @for($i=1;$i<=5;$i++)
        <td>{{$grade['ct'.$i]}}</td>
      @endfor
      @if($grade->course->final_exam_percent > 0)
        <td>{{$grade->written}}</td>
        <td>{{$grade->mcq}}</td>
      @endif
      @if($grade->course->practical_percent > 0)
        <td>{{$grade->practical}}</td>
      @endif
      <td>{{$grade->marks}}</td>
      <td>{{$grade->gpa}}</td>
      <td>
        @foreach($gradesystems as $gs)
          @if($gs->point == $grade->gpa)
            {{$gs->grade}}
            @break
          @endif
        @endforeach
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
