@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.general.contacts.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.general.contacts.management') }}
        <small>{{ trans('labels.backend.general.contacts.active') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.general.contacts.active') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.general.includes.partials.contact-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="contacts-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.general.contacts.table.name') }}</th>
                            <th>{{ trans('labels.backend.general.contacts.table.email') }}</th>
                            <th>{{ trans('labels.backend.general.contacts.table.subject') }}</th>
                            <th>{{ trans('labels.backend.general.contacts.table.create') }}</th>
                            <th>{{ trans('labels.backend.general.contacts.table.last_updated') }}</th>
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
            {!! history()->renderType('Contact') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@stop

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#contacts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.general.contact.get") }}',
                    type: 'post',
                    data: {status: 1}
                },
                columns: [
                    {data: 'name', name: '{{ config('general.contacts_table') }}.name'},
                    {data: 'email', name: '{{ config('general.contacts_table') }}.email'},
                    {data: 'subject', name: '{{ config('general.contacts_table') }}.subject', searchable: false, sortable: false},
                    {data: 'created_at', name: '{{ config('general.contacts_table') }}.created_at'},
                    {data: 'updated_at', name: '{{ config('general.contacts_table') }}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@stop