@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.general.sliders.management') . ' | ' . trans('labels.backend.general.sliders.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.general.sliders.management') }}
        <small>{{ trans('labels.backend.general.sliders.create') }}</small>
    </h1>
@endsection

@section('content')
    @include('backend.general.includes.partials.slider-form')
@stop