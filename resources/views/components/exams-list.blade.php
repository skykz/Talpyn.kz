<div class="card text-white bg-primary mb-3">
    <div class="card-header">@lang('Информация')</div>
    <div class="card-body">
      @lang('Экзамен представляет семестр. Все курсы семестра относятся к экзамену. Таким образом, все тесты, тесты по классам, задание, посещаемость, письменные, практические и т. Д. В курсе подлежат этому конкретному экзамену.')
    </div>
</div>
{{$exams->links()}}
<div class="table-responsive">
  @foreach ($exams as $exam)
    <form id="form{{$exam->id}}" action="{{url('exams/activate-exam')}}" method="POST">
      {{csrf_field()}}
    </form>
  @endforeach
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@lang('Название экзамена')</th>
      <th scope="col">@lang('Уведомление опубликовано')</th>
      <th scope="col">@lang('Результат опубликован')</th>
      <th scope="col">@lang('Создан в')</th>
      <th scope="col">@lang('Поставить активн')</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($exams as $exam)
    <tr>
      <th scope="row">{{($loop->index + 1)}}</th>
      <td scope="row">{{$exam->exam_name}}</td>
      <td scope="row">
        @if($exam->notice_published === 1)
          @lang('Да')
        @else
          @if($exam->result_published === 1)
            @lang('Нет')
          @else
            <label class="checkbox-label"> @lang('Yes')
              <input type="checkbox" name="notice_published" form="form{{$exam->id}}" />
              <span class="checkmark"></span>
            </label>
          @endif
        @endif
      </td>
      <td scope="row">
        @if($exam->result_published === 1)
          @lang('Да')
        @else
          <label class="checkbox-label"> @lang('Да')
            <input type="checkbox" name="result_published" form="form{{$exam->id}}" />
            <span class="checkmark"></span>
          </label>
        @endif
      </td>
      <td scope="row">{{Carbon\Carbon::parse($exam->created_at)->format('d/m/Y')}}</td>
      <td scope="row">
        <input type="hidden" name="exam_id" value="{{$exam->id}}" form="form{{$exam->id}}"/>
        @if($exam->active === 1)
          <label class="checkbox-label">
              @lang('Активный')
            <input type="checkbox" name="active" form="form{{$exam->id}}" checked />
            <span class="checkmark"></span>
          </label>
        @else
          @if($exam->result_published === 1)
            @lang('Завершенный')
          @else
            <label class="checkbox-label">
              @lang('Не активный')
              <input type="checkbox" name="active" form="form{{$exam->id}}" />
              <span class="checkmark"></span>
            </label>
          @endif
        @endif
        @if($exam->result_published != 1)
        <span>
          <input type="submit" class="btn btn-info btn-xs pull-right" style="margin-left: 1%;" value="@lang('Сохранить')" form="form{{$exam->id}}"/>
        </span>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
{{$exams->links()}}
<style>
.checkbox-label {
  position: relative;
  padding-left: 35px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.checkbox-label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #0000004d;
  border-radius: 15px;
}

.checkbox-label:hover input ~ .checkmark {
  background-color: #ccc;
}

.checkbox-label input:checked ~ .checkmark {
  background-color: #E74C3C;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.checkbox-label input:checked ~ .checkmark:after {
  display: block;
}

.checkbox-label .checkmark:after {
  left: 10px;
  top: 6px;
  width: 5px;
  height: 10px;
  border: solid #fff;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
