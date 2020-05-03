{{$books->links()}}
<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('Название книги')</th>
        <th scope="col">@lang('Код книги')</th>
        <th scope="col">@lang('Автор')</th>
        <th scope="col">@lang('Тип')</th>
        <th scope="col">@lang('Количество')</th>
        <th scope="col">@lang('О книге')</th>
        <th scope="col">@lang('Для класса')</th>
        <th scope="col">@lang('Цена')</th>
        <th scope="col">@lang('№ Стеллаж')</th>
        <th scope="col">@lang('№ Строка')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{($loop->index + 1)}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->book_code}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->type}}</td>
        <td>{{$book->quantity}}</td>
        <td>{{$book->about}}</td>
        <td>{{$book->class->class_number}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->rackNo}}</td>
        <td>{{$book->rowNo}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$books->links()}}
