@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.general.products.management') . ' | ' . trans('labels.backend.general.products.create'))

@section('after-styles')
<!-- CK Editor -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/backend/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.general.answers.management') }}
        <small>{{ trans('labels.backend.general.answers.title') }}</small>
    </h1>
@endsection

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.general.answers.create') }}</h3>

        <div class="box-tools pull-right">
            @include('backend.general.includes.partials.contact-header-buttons')
        </div><!--box-tools pull-right-->
    </div><!-- /.box-header -->
    <div class="box-body">
		<dib class="box">
			<table class="table">
				<tr>
					<th width="15%">Nome</th>
					<td>{{ $contact->name }}</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td>{{ $contact->email }}</td>
				</tr>
				<tr>
					<th>Assunto</th>
					<td>{{ $contact->subject }}</td>
				</tr>
                <tr>
                    <th>Mensagem</th>
                    <td>{{ $contact->message }}</td>
                </tr>
                <tr>
                    <th>Resposta:</th>
                    <td>{{ $contact->answers->message }}</td>
                </tr>
			</table>
		</dib>
    </div><!-- /.box-body -->
</div><!--box-->

@stop

@section('after-scripts-end')
<!-- CK Editor -->
<script src="{{ asset('js/backend/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>$(function () { $(".textarea").wysihtml5(); });</script>
@stop