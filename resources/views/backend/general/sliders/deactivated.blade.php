@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.general.sliders.management') . ' | ' . trans('labels.backend.general.sliders.deactivated'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.general.sliders.management') }}
        <small>{{ trans('labels.backend.general.sliders.deactivated') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.general.sliders.deactivated') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.general.includes.partials.slider-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="sliders-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.general.sliders.table.id') }}</th>
                            <th>{{ trans('labels.backend.general.sliders.table.title') }}</th>
                            <th>{{ trans('labels.backend.general.sliders.table.url') }}</th>
                            <th>{{ trans('labels.backend.general.sliders.table.status') }}</th>
                            <th>{{ trans('labels.backend.general.sliders.table.create') }}</th>
                            <th>{{ trans('labels.backend.general.sliders.table.last_updated') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#sliders-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.general.slider.get") }}',
                    type: 'post',
                    data: {status: 0, trashed: false}
                },
                columns: [
                    {data: 'id', name: '{{config('general.sliders_table')}}.id'},
                    {data: 'title', name: '{{config('general.sliders_table')}}.title'},
                    {data: 'url', name: '{{config('general.sliders_table')}}.url'},
                    {data: 'status', name: '{{config('general.sliders_table')}}.status'},
                    {data: 'created_at', name: '{{config('general.sliders_table')}}.created_at'},
                    {data: 'updated_at', name: '{{config('general.sliders_table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@stop
