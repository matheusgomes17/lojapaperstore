<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.general.slider.index', trans('menus.backend.general.sliders.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.general.slider.create', trans('menus.backend.general.sliders.create'), [], ['class' => 'btn btn-success btn-xs']) }}
    {{ link_to_route('admin.general.slider.deactivated', trans('menus.backend.general.sliders.deactivated'), [], ['class' => 'btn btn-warning btn-xs']) }}
    {{ link_to_route('admin.general.slider.deleted', trans('menus.backend.general.sliders.deleted'), [], ['class' => 'btn btn-danger btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.general.sliders.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.general.slider.index', trans('menus.backend.general.sliders.all')) }}</li>
            <li>{{ link_to_route('admin.general.slider.create', trans('menus.backend.general.sliders.create')) }}</li>
            <li class="divider"></li>
            <li>{{ link_to_route('admin.general.slider.deactivated', trans('menus.backend.general.sliders.deactivated')) }}</li>
            <li>{{ link_to_route('admin.general.slider.deleted', trans('menus.backend.general.sliders.deleted')) }}</li>
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>