@extends('frontend.layouts.app')

@section('title') - Registrar @endsection

@section('content')
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">         
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="aa-myaccount-login">
                                <h4>{{ trans('labels.frontend.auth.register_box_title') }}</h4>
                                {{ Form::open(['route' => 'frontend.auth.register', 'class' => 'aa-login-form']) }}

                                    {{ Form::label('name', trans('validation.attributes.frontend.name')) }}

                                    {{ Form::input('text', 'name', null, ['placeholder' => trans('validation.attributes.frontend.name')]) }}

                                    {{ Form::label('email', trans('validation.attributes.frontend.email')) }}

                                    {{ Form::input('email', 'email', null, ['placeholder' => trans('validation.attributes.frontend.email')]) }}

                                    {{ Form::label('password', trans('validation.attributes.frontend.password')) }}

                                    {{ Form::input('password', 'password', null, ['placeholder' => trans('validation.attributes.frontend.password')]) }}

                                    {{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation')) }}

                                    {{ Form::input('password', 'password_confirmation', null, ['placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}

                                    {{ Form::label('telephone', 'Telefone') }} <br>

                                    <input type="text" maxlength="2" name="ddd" placeholder="DDD" class="ddd"> 
                                    <input type="text" maxlength="9" name="telephone" placeholder="Telefone" class="telephone">

                                    @if (config('access.captcha.registration'))
                                        {!! Form::captcha() !!}
                                        {{ Form::hidden('captcha_status', 'true') }}
                                    @endif

                                    <div class="text-center">
                                        {{ Form::submit(trans('labels.frontend.auth.register_button'), ['class' => 'aa-browse-btn']) }}
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@stop