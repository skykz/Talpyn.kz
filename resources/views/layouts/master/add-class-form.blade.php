<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#addClassModal{{$school->id}}">+ @lang('Добавить новый класс')</button>

<!-- Modal -->
<div class="modal fade" id="addClassModal{{$school->id}}" tabindex="-1" role="dialog" aria-labelledby="addClassModal{{$school->id}}Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">@lang('Добавить новый класс')</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="{{url('school/add-class')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="classNumber{{$school->id}}" class="col-sm-4 control-label">@lang('Добавить номер/класс')</label>
            <div class="col-sm-8">
              <input type="text" name="class_number" class="form-control" id="classNumber{{$school->id}}" placeholder="@lang('Добавить номер/класс')" required>
            </div>
          </div>
          {{--<div class="form-group">
            <label for="classRoomNumber{{$school->id}}" class="col-sm-4 control-label">@lang('Class Room Number')</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="classRoomNumber{{$school->id}}" placeholder="@lang('Class Room Number')">
            </div>
          </div>
          --}}
          <div class="form-group">
            <label for="classRoomNumber{{$school->id}}" class="col-sm-4 control-label">@lang('Классы группы')</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="group" id="classRoomNumber{{$school->id}}" placeholder="@lang('Русский, Казахский и т.д.')">
              <span id="helpBlock" class="help-block">@lang('Оставьте пустым, если этот класс не принадлежит ни одной группе')</span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-danger btn-sm">@lang('Сохранить')</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">@lang('Закрыть')</button>
      </div>
    </div>
  </div>
</div>
