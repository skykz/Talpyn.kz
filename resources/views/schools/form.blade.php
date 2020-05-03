<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#schoolModal" dusk="create-school-button">
     <i class="fas fa-plus"></i> @lang(' Создать школу')
</button>

<!-- Modal -->
<div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal" method="POST" action="{{ route('schools.store') }}">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">@lang('Создать школу')</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">@lang('Название школы')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="@lang('Название школы')" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('medium') ? ' has-error' : '' }}">
                        <label for="medium" class="col-md-4 control-label">@lang('Средняя школа')</label>

                        <div class="col-md-6">
                            <select id="medium" class="form-control" name="medium">
                                <option selected="selected">@lang('Русский')</option>
                                <option>@lang('English')</option>
                                <option>@lang('Spanish')</option>
                                <option>@lang('Chinese')</option>
                                <option>@lang('Arabic')</option>
                            </select>

                            @if ($errors->has('medium'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('medium') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('established') ? ' has-error' : '' }}">
                        <label for="established" class="col-md-4 control-label">@lang('Школа основана')</label>

                        <div class="col-md-6">
                            <input id="established" type="text" class="form-control" name="established" value="{{ old('established') }}" placeholder="@lang('Школа основана')" required>

                            @if ($errors->has('established'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('established') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                        <label for="about" class="col-md-4 control-label">@lang('О школе')</label>

                        <div class="col-md-6">
                            <textarea id="about" class="form-control" rows="3" name="about" placeholder="@lang('О школе')" required>{{ old('about') }}</textarea>

                            @if ($errors->has('about'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Закрыть')</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>  @lang('Создать Школу')</button>
                </div>
            </div>
        </form>
    </div>
</div>
