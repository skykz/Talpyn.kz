<div class="table-responsive">
    <form action="{{url('school/promote-students')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="section_id" value="{{$section_id}}">
        <table class="table table-bordered table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('Код')</th>
                    <th scope="col">@lang('Название')</th>
                    <th scope="col">@lang('Покинуть школу')</th>
                    <th scope="col">@lang('От сессии')</th>
                    <th scope="col">@lang('На сессию')</th>
                    <th scope="col">@lang('Из раздела')</th>
                    <th scope="col">@lang('В раздел')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key=>$student)
                <tr>
                    <th scope="row">{{ ($loop->index + 1) }}</th>
                    <td><small>{{$student->student_code}}</small></td>
                    <td>
                        <small><a href="{{url('student/'.$student->student_code)}}">{{$student->name}}</a></small>
                    </td>
                    <td>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="left_school{{$loop->index}}"> @lang('Оставили')
                            </label>
                        </div>
                    </td>
                    <td>
                        <small>
                            {{$student->session}}
                            @if($student->session == now()->year || $student->session > now()->year)
                            <span class="label label-success">@lang('Назначен/Новый')</span>
                            @else
                            <span class="label label-danger">@lang('Не назначен')</span>
                            @endif
                        </small>
                    </td>
                    <td>
                        <input class="form-control datepicker" name="to_session[]"
                            value="{{date('Y', strtotime('+1 year'))}}">
                    </td>
                    <td style="text-align: center;">
                        <small>@lang('Класс'): {{$student->section->class->class_number}} - @lang('Раздел'):
                            {{$student->section->section_number}}</small>
                    </td>
                    <td>
                        <select id="to_section" class="form-control" name="to_section[]" required>
                            @foreach($classes as $class)
                            @foreach($class->sections as $section)
                            <option value="{{$section->id}}">
                                @lang('Класс'): {{$class->class_number}} -
                                @lang('Раздел'): {{$section->section_number}}
                            </option>
                            @endforeach
                            @endforeach
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align:center;">
            <input type="submit" class="btn btn-primary" value="@lang('Сохранить')">
        </div>
    </form>
</div>

<script>
    $(function () {
        $('.datepicker').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
    })

</script>
