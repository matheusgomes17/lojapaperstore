<?php

Breadcrumbs::register('admin.general.contact.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('labels.backend.general.contacts.management'), route('admin.general.contact.index'));
});

Breadcrumbs::register('admin.general.contact.deleted', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.general.contact.index');
    $breadcrumbs->push(trans('menus.backend.general.contacts.deleted'), route('admin.general.contact.deleted'));
});