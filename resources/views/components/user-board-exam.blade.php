<div class="panel panel-default">
    <div class="page-panel-title" role="tab" id="heading{{$exam_name}}">
      <a class="panel-title collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$exam_name}}" aria-expanded="false" aria-controls="collapse{{$exam_name}}">
        <h5>
          {{$exam_name}} <span class="pull-right">+</span>
        </h5>
      </a>
    </div>
    <div id="collapse{{$exam_name}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$exam_name}}">
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>@lang('Группа'):</td>
              <td>{{$group}}</td>
            </tr>
            <tr>
              <td>@lang('Стеллаж'):</td>
              <td>{{$roll}}</td>
            </tr>
            <tr>
              <td>@lang('Регистрация'):</td>
              <td>{{$registration}}</td>
            </tr>
            <tr>
              <td>@lang('Сессия'):</td>
              <td>{{$session}}</td>
            </tr>
            <tr>
              <td>@lang('Панель'):</td>
              <td>{{$board}}</td>
            </tr>
            <tr>
              <td>@lang('Уходящий год'):</td>
              <td>{{$passing_year}}</td>
            </tr>
            <tr>
              <td>@lang('Название учебного заведения'):</td>
              <td>{{$institution_name}}</td>
            </tr>
            <tr>
              <td>@lang('GPA'):</td>
              <td>{{$gpa}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
