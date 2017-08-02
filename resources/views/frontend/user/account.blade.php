@extends('frontend.layouts.app')

@section('title') :: Minha Conta @endsection

@section('content')
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">         
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-myaccount-login">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default aa-checkout-login">
                                        <h1 style="display: none;">Veja as informações da conta</h1>
                                        <div class="panel-heading">{{ trans('navs.frontend.user.account') }}</div>

                                        <div class="panel-body">
                                            <div role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.profile') }}</a>
                                                    </li>

                                                    <li role="presentation">
                                                        <a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">{{ trans('labels.frontend.user.profile.update_information') }}</a>
                                                    </li>

                                                    @if ($logged_in_user->canChangePassword())
                                                        <li role="presentation">
                                                            <a href="#password" aria-controls="password" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.change_password') }}</a>
                                                        </li>
                                                    @endif

                                                    <li role="presentation">
                                                        <a href="#budget" aria-controls="budget" role="tab" data-toggle="tab">{{ trans('labels.frontend.user.budgets.title') }}</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane mt-30 active" id="profile">
                                                        <div class="row">
                                                            @include('frontend.user.account.tabs.profile')
                                                        </div>
                                                    </div><!--tab panel profile-->

                                                    <div role="tabpanel" class="tab-pane mt-30" id="edit" style="margin-top: 20px;">
                                                        @include('frontend.user.account.tabs.edit')
                                                    </div><!--tab panel profile-->

                                                    @if ($logged_in_user->canChangePassword())
                                                        <div role="tabpanel" class="tab-pane mt-30" id="password" style="margin-top: 20px;">
                                                            @include('frontend.user.account.tabs.change-password')
                                                        </div><!--tab panel change password-->
                                                    @endif

                                                    <div role="tabpanel" class="tab-pane mt-30" id="budget">
                                                        @include('frontend.user.account.tabs.budget')
                                                    </div><!--tab panel profile-->
                                                </div><!--tab content-->
                                            </div><!--tab panel-->
                                        </div><!--panel body-->
                                    </div><!-- panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection