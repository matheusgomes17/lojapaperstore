<?php

Breadcrumbs::register('admin.general.slider.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('labels.backend.general.sliders.management'), route('admin.general.slider.index'));
});

Breadcrumbs::register('admin.general.slider.deactivated', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.general.slider.index');
    $breadcrumbs->push(trans('menus.backend.general.sliders.deactivated'), route('admin.general.slider.deactivated'));
});

Breadcrumbs::register('admin.general.slider.deleted', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.general.slider.index');
    $breadcrumbs->push(trans('menus.backend.general.sliders.deleted'), route('admin.general.slider.deleted'));
});

Breadcrumbs::register('admin.general.slider.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.general.slider.index');
    $breadcrumbs->push(trans('menus.backend.general.sliders.create'), route('admin.general.slider.create'));
});

Breadcrumbs::register('admin.general.slider.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.general.slider.index');
    $breadcrumbs->push(trans('menus.backend.general.sliders.view'), route('admin.general.slider.show', $id));
});

Breadcrumbs::register('admin.general.slider.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.general.slider.index');
    $breadcrumbs->push(trans('menus.backend.general.sliders.edit'), route('admin.general.slider.edit', $id));
});