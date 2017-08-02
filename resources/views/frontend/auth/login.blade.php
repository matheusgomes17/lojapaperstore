@extends('frontend.layouts.app')

    @section('title') - Entrar @endsection

@section('content')
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">         
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="aa-myaccount-login">
                                <h4>{{ trans('labels.frontend.auth.login_box_title') }}</h4>
                                {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'aa-login-form']) }}

                                    {{ Form::label('email', trans('validation.attributes.frontend.email')) }}

                                    {{ Form::input('email', 'email', null, ['placeholder' => trans('validation.attributes.frontend.email')]) }}

                                    {{ Form::label('password', trans('validation.attributes.frontend.password')) }}

                                    {{ Form::input('password', 'password', null, ['placeholder' => trans('validation.attributes.frontend.password')]) }}

                                    <div class="text-center">
                                        {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'aa-browse-btn']) }}
                                        <label class="rememberme" for="rememberme">
                                            {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
                                        </label>
                                        <p class="aa-lost-password">{{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}</p>
                                        <p class="aa-lost-password">{{ link_to_route('frontend.auth.register', trans('labels.frontend.auth.register_button')) }}</p>
                                    </div>
                                {{ Form::close() }}
                            </div>
                            <div class="row text-center">
                                {!! $socialite_links !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection