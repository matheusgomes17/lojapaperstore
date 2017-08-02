<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.general.contact.index', trans('menus.backend.general.contacts.index'), [], ['class' => 'btn btn-success btn-xs']) }}
    {{ link_to_route('admin.general.contact.answer.index', trans('menus.backend.general.contacts.answer'), [], ['class' => 'btn btn-danger btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.general.contacts.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.general.contact.index', trans('menus.backend.general.contacts.index')) }}</li>
            <li>{{ link_to_route('admin.general.contact.answer.index', trans('menus.backend.general.contacts.answer')) }}</li>
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>