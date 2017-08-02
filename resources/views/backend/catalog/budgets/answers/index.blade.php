@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.catalog.budgets.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.catalog.budgets.management') }}
        <small>{{ trans('labels.backend.catalog.budgets.answered') }}</small>
    </h1>
@endsection

@section('content')
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.catalog.budgets.answered') }}</h3>

        <div class="box-tools pull-right">
            @include('backend.catalog.includes.partials.budget-header-buttons')
        </div><!--box-tools pull-right-->
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="table-responsive">
            <table id="budgets-table" class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>{{ trans('labels.backend.catalog.budgets.table.id') }}</th>
                        <th>{{ trans('labels.backend.catalog.budgets.table.items') }}</th>
                        <th>{{ trans('labels.backend.catalog.budgets.table.user') }}</th>
                        <th>{{ trans('labels.backend.catalog.budgets.table.last_updated') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                </thead>
            </table>
        </div><!--table-responsive-->
    </div><!-- /.box-body -->
</div><!--box-->

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        {!! history()->renderType('BudgetAnswer') !!}
    </div><!-- /.box-body -->
</div><!--box box-success-->
@stop

@section('after-scripts')
{{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
{{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

<script>
    $(function() {
        $('#budgets-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("admin.catalog.budget.answer.get") }}',
                type: 'post',
                data: {status: 0, trashed: false}
            },
            columns: [
                {data: 'code', name: '{{config('catalog.budgets_table')}}.id'},
                {data: 'products', name: '{{config('catalog.products_table')}}', sortable: false},
                {data: 'users', name: '{{config('catalog.users_table')}}', searchable: false, sortable: false},
                {data: 'updated_at', name: '{{config('catalog.budgets_table')}}.updated_at'},
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ],
            order: [[0, "asc"]],
            searchDelay: 500
        });
    });
</script>
@stop
