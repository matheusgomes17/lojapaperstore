{{ Form::model($logged_in_user, ['route' => 'frontend.user.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) }}

    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.frontend.name'), ['class' => 'col-md-4 control-label']) }}
        <div class="col-md-6">
            {{ Form::input('text', 'name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.name')]) }}
        </div>
    </div>

    @if ($logged_in_user->canChangeEmail())
        <div class="form-group">
            {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
            <div class="col-md-6">
                {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
            </div>
        </div>
    @endif

    <div class="form-group">
        <div class="col-md-6 ">
            {{ Form::submit(trans('labels.general.buttons.update'), ['class' => 'aa-cart-view-btn', 'id' => 'update-profile']) }}
        </div>
    </div>

{{ Form::close() }}