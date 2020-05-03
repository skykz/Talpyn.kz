<form class="form-horizontal" action="{{url('library/issue-books')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('student_code') ? ' has-error' : '' }}">
        <label for="student_code" class="col-md-4 control-label">@lang('Код студента')</label>

        <div class="col-md-6">
            <input id="student_code" type="text" class="form-control" name="student_code" value="{{ old('student_code') }}"
                placeholder="@lang('Код студента')" required>

            @if ($errors->has('student_code'))
            <span class="help-block">
                <strong>{{ $errors->first('student_code') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('book_code') ? ' has-error' : '' }}">
        <label for="book_code" class="col-md-4 control-label">@lang('Название книги') &amp; @lang('Код') (<small>@lang('Тип') & @lang('Поиск по имени / коду.')
                @lang('Вы можете выбрать несколько книг') (<i>@lang('Максимум') 10 @lang('книги')</i>)</small>)</label>

        <div class="col-md-6">
            <select id="book_code" class="form-control" multiple name="book_id[]">
                @foreach($books as $book)
                <option value="{{$book->id}}">{{$book->title}} - {{$book->book_code}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group{{ $errors->has('issue_date') ? ' has-error' : '' }}">
        <label for="issue_date" class="col-md-4 control-label">@lang('Дата выпуска')</label>

        <div class="col-md-6">
            <input id="issue_date" class="form-control datepicker" name="issue_date" value="{{ old('issue_date') }}"
                placeholder="@lang('Дата выпуска')" required>

            @if ($errors->has('issue_date'))
            <span class="help-block">
                <strong>{{ $errors->first('issue_date') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('return_date') ? ' has-error' : '' }}">
        <label for="return_date" class="col-md-4 control-label">@lang('Дата возврата')</label>

        <div class="col-md-6">
            <input id="return_date" class="form-control datepicker" name="return_date" value="{{ old('return_date') }}"
                placeholder="@lang('Дата возврата')" required>

            @if ($errors->has('return_date'))
            <span class="help-block">
                <strong>{{ $errors->first('return_date') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-danger">@lang('Сохранить')</button>
        </div>
    </div>
</form>

<script>
    $(function () {
        $('#book_code').chosen({
            max_selected_options: 10,
            display_selected_options: true,
            width: "100%"
        });
    })
</script>
