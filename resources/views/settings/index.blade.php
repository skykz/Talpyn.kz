@extends('layouts.app')

@section('title', __('Академические настройки'))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" id="side-navbar">
                @include('layouts.leftside-menubar')
            </div>
            <div class="col-md-10" id="main-container">
                <div class="panel panel-default">
                    <div class="page-panel-title">@lang('Академические настройки')</div>
                    <div class="panel-body table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('Название')</th>
                                    <th scope="col">@lang('Код')</th>
                                </tr>
                                <tr>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->code }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">@lang('Департамент')</th>
                                    <th scope="col">@lang('Классы')</th>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#departmentModal"><i class="fas fa-plus-circle"></i> @lang('Создать департмент')</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="departmentModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="departmentModalLabel">@lang('Создать департмент')</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" action="{{url('school/add-department')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="department_name" class="col-sm-2 control-label">@lang('Название Департмента')</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="department_name" name="department_name" placeholder="@lang('Англиский,Русский...')">
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
                                    </td>
                                    <td>
                                        <a href="#collapse" role="button" class="btn btn-danger btn-sm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">
                                            <i class="material-icons">class</i> @lang('Управлять секторами,классами')
                                        </a>
                                    </td>
                                </tr>
                                <tr class="collapse" id="collapse" aria-labelledby="heading" aria-expanded="false">
                                    <td colspan="12">
                                        @include('layouts.master.add-class-form')
                                        <div><small>@lang('Нажмите «Класс», чтобы просмотреть все разделы')</small></div>
                                        <div class="row">
                                            @foreach($classes as $class)
                                                @if($class->school_id == $school->id)
                                                    <div class="col-sm-3">
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$class->id}}" style="margin-top: 5%;">@lang('Управлять') {{$class->class_number}} {{!empty($class->group)? '- '.$class->group:''}}</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal{{$class->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="myModalLabel">@lang('Все разделы класса') {{$class->class_number}}</h4>
                                                                    </div>
                                                                    <div class="modal-body">
																		<div class="form-check">
																			<?php 
																				$checked = Session::has('ignoreSessions') ? (Session::get('ignoreSessions') == "true" ? "checked='checked'" : "") : "";
																			?>
																			<input class="form-check-input position-static" type="checkbox" name="ignoreSessionsCheck" id="ignoreSessionsId" <?php echo $checked ?>>
																			@lang("Игнорировать сессии при перечислении студентов для продвижения")
																		</div>
                                                                        <ul class="list-group">
                                                                            @foreach($sections as $section)
                                                                                @if($section->class_id == $class->id)
                                                                                    <li class="list-group-item">@lang('Раздел') {{$section->section_number}} &nbsp;
                                                                                        <a class="btn btn-xs btn-warning" href="{{url('courses/0/'.$section->id)}}">@lang('Просмотреть все назначенные курсы')</a>
                                                                                        <span class="pull-right"> &nbsp;&nbsp;
                                                                                            <a  class="btn btn-xs btn-success" href="{{url('school/promote-students/'.$section->id)}}"><i class="fas fa-plus-circle"></i> @lang('Продвигать студентов')</a>
                                                                                            {{-- &nbsp;<a class="btn btn-xs btn-primary" href="{{url('register/student/'.$section->id)}}">+ @lang('Register Student')</a> --}}
                                                                                        </span>
                                                                                        @include('layouts.master.add-course-form')
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ul>
                                                                        @include('layouts.master.create-section-form')
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">@lang('Закрыть')</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                        </table>

                        <h4>@lang('Добавить пользователей')</h4>
                        <table class="table table-condensed" style="width:600px">
                            <thead>
                                <tr>
                                    <th scope="col"><i class="fas fa-plus-circle"></i> @lang('Ученик')</th>
                                    <th scope="col"><i class="fas fa-plus-circle"></i> @lang('Учитель')</th>
                                    <th scope="col"><i class="fas fa-plus-circle"></i> @lang('Бухгалтер')</th>
                                    <th scope="col"><i class="fas fa-plus-circle"></i> @lang('Библиотекарь')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{url('register/student')}}"><i class="fas fa-plus-circle"></i> @lang('Добавить ученика')</a>
                                        <br>
                                        <h5>@lang('Или массовая загрузка в Excel')</h5>
                                        @component('components.excel-upload-form', ['type'=>'student'])
                                        @endcomponent
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{url('register/teacher')}}"><i class="fas fa-plus-circle"></i> @lang('Добавить учителя')</a>
                                        <br>
                                        <h5>@lang('Или массовая загрузка в Excel')</h5>
                                        @component('components.excel-upload-form', ['type'=>'teacher'])
                                        @endcomponent
                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-sm" href="{{url('register/accountant')}}"><i class="fas fa-plus-circle"></i> @lang('Добавить бухгалтера')</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{url('register/librarian')}}"><i class="fas fa-plus-circle"></i> @lang('Добавить библиотекаря')</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h4>@lang('Upload')</h4>
                        <table class="table table-condensed" style="width:400px">
                            <thead>
                                <tr>
                                    <th scope="col">+ @lang('Уведомление')</th>
                                    <th scope="col">+ @lang('Событие')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ url('academic/notice') }}">
                                            <i class="material-icons">developer_board</i> @lang('Загрузить уведомление')
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ url('academic/event') }}">
                                            <i class="material-icons">developer_board</i> @lang('Загрузить событие')
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$(document).ready(function(){
		  $("#ignoreSessionsId").change(function() {
			var ignoreSessions = $("#ignoreSessionsId").is(":checked");

			$.ajax({
					type:'POST',
					url:'/school/set-ignore-sessions',
					headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
					data: { "ignoreSessions" : ignoreSessions },
					success: function(data){
					  if(data.data.success){
						  console.log("Result = " + data.data.success);
					  }
					}
				});
			});
		});	
	</script>
@endsection
