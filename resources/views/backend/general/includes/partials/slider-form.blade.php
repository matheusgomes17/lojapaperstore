@if(isset($model))
    {!! Form::model($model, ['route' => ['admin.general.slider.update', $model->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'put', 'files' => true]) !!}
@else
    {{ Form::open(['route' => 'admin.general.slider.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'files' => true]) }}
@endif
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.general.sliders.create') }}</h3>

        <div class="box-tools pull-right">
            @include('backend.general.includes.partials.slider-header-buttons')
        </div><!--box-tools pull-right-->
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="form-group">
            {{ Form::label('cover', trans('validation.attributes.backend.general.sliders.image') . '*', ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                {{ Form::file('cover') }}
                <p><small style="color: red;">{{ trans('validation.attributes.backend.general.sliders.image-info') }}</small></p>
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('title', trans('validation.attributes.backend.general.sliders.title') . '*', ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.general.sliders.title')]) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('url', trans('validation.attributes.backend.general.sliders.url'), ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                {{ Form::url('url', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.general.sliders.url')]) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('message', trans('validation.attributes.backend.general.sliders.message'), ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                {{ Form::text('message', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.general.sliders.message')]) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('description', trans('validation.attributes.backend.general.sliders.description') . '*', ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.general.sliders.description')]) }}
            </div><!--col-lg-10-->
        </div><!--form control-->
    </div><!-- /.box-body -->
</div><!--box-->
<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            {{ link_to_route('admin.general.slider.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-sm']) }}
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::submit(isset($model) ? trans('buttons.general.crud.update') : trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-sm']) }}
        </div><!--pull-right-->

        <div class="clearfix"></div>
    </div><!-- /.box-body -->
</div><!--box-->

{{ Form::close() }}