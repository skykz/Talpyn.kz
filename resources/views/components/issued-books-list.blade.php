{{$books->links()}}
<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('Название книги')</th>
        <th scope="col">@lang('Код книги')</th>
        <th scope="col">@lang('Тип')</th>
        <th scope="col">@lang('Имя заемщика')</th>
        <th scope="col">@lang('Код Заемщика')</th>
        <th scope="col">@lang('Дата выпуска')</th>
        <th scope="col">@lang('Дата возврата')</th>
        <th scope="col">@lang('Активный')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{($loop->index + 1)}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->book->book_code}}</td>
        <td>{{$book->type}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->student_code}}</td>
        <td>{{Carbon\Carbon::parse($book->issue_date)->format('d/m/Y')}}</td>
        <td>{{Carbon\Carbon::parse($book->return_date)->format('d/m/Y')}}</td>
        <td>
          <form action="{{url('library/save_as_returned')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="issue_id" value="{{$book->id}}">
            <input type="hidden" name="book_id" value="{{$book->book_id}}">
            <button class="btn btn-xs btn-success">@lang('Сохранить как возвращенный')</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$books->links()}}
