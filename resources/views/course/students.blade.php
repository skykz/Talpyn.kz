@extends('layouts.app')

@section('title', __('Курс Студента'))

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<style>
.ck-editor__editable{
    min-height: 200px;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            @if(count($students) > 0)
            @foreach ($students as $student)
                    <h3>@lang('Курс Студента класса'): <b>{{$student->student->section->class->class_number}}</b>  @lang('Раздел'):
                        <b>{{$student->student->section->section_number}}</b></h3>
            @break
            @endforeach
            <h4>@lang('Выберите студентов, чтобы отправить сообщение')</h4>
            @endif
            <div class="panel panel-default">
                @if(count($students) > 0)
                <div class="panel-body">
                    <div class="col-md-6">
                        <table class="table table-bordered table-condensed table-striped">
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <label style="font-weight:bold;">
                                            <input type="checkbox" id="selectAll"> @lang('Все')
                                        </label>
                                    </div>
                                </th>
                                <th>@lang('Код студента')</th>
                                <th>@lang('Имя студента')</th>
                            </tr>
                            @foreach ($students as $student)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="recipients[]" form="msgForm"
                                                value="{{$student->student->id}}">
                                        </label>
                                    </div>
                                </td>
                                <td>{{$student->student->student_code}}</td>
                                <td><a
                                        href="{{url('user/'.$student->student->student_code)}}">{{$student->student->name}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-md-6">
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
                        <form action="{{url('message/students')}}" method="POST" id="msgForm">
                            {{ csrf_field() }}
                            <input type="hidden" name="teacher_id" value="{{$teacher_id}}">
                            <input type="hidden" name="section_id" value="{{$section_id}}">
                            <div class="form-group">
                                <label for="msg">@lang('Напишите сообщение'): </label>
                                <textarea name="msg" class="form-control" id="msg" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">send</i> @lang('Отправить')</button>
                        </form>
                    </div>
                </div>
                <script>
                    $(function () {
                        var r = $(':checkbox[name="recipients[]"]');
                        $('#selectAll').on('change', function () {
                            if ($(this).is(':checked')) {
                                r.prop('checked', true);
                            } else {
                                r.prop('checked', false);
                            }
                        });
                        ClassicEditor
                            .create(document.querySelector('#msg'), {
                                toolbar: ['bold', 'italic','Heading', 'Link', 'bulletedList', 'numberedList', 'blockQuote']
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    });

                </script>
                @else
                <div class="panel-body">
                    @lang('Нету данных.')
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
