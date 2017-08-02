<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image" />
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}</a>
            </div><!--pull-left-->
        </div><!--user-panel-->

        <!-- search form (Optional) -->
        {{ Form::open(['route' => 'admin.search.index', 'method' => 'get', 'class' => 'sidebar-form']) }}
            <div class="input-group">
                {{ Form::text('q', Request::get('q'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('strings.backend.general.search_placeholder')]) }}

                  <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span><!--input-group-btn-->
            </div><!--input-group-->
        {{ Form::close() }}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>

            @permissions(['manage-users', 'manage-roles'])
                <li class="{{ Active::pattern('admin/access/*') }} treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>{{ trans('menus.backend.access.title') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu {{ Active::pattern('admin/access/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/*', 'display: block;') }}">
                        @permission('manage-users')
                            <li class="{{ Active::pattern('admin/access/user*') }}">
                                <a href="{{ route('admin.access.user.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.users.management') }}</span>
                                </a>
                            </li>
                        @endauth

                        @permission('manage-roles')
                            <li class="{{ Active::pattern('admin/access/role*') }}">
                                <a href="{{ route('admin.access.role.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.roles.management') }}</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </li>
            @endauth

            @permissions(['manage-categories', 'manage-products'])
            <li class="{{ Active::pattern('admin/catalog/*') }} treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>{{ trans('menus.backend.catalog.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ Active::pattern('admin/catalog/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/catalog/*', 'display: block;') }}">
                    @permission('manage-products')
                    <li class="{{ Active::pattern('admin/catalog/product*') }}">
                        <a href="{{ route('admin.catalog.product.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.catalog.products.management') }}</span>
                        </a>
                    </li>
                    @endauth

                    @permission('manage-categories')
                    <li class="{{ Active::pattern('admin/catalog/category*') }}">
                        <a href="{{ route('admin.catalog.category.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.catalog.categories.management') }}</span>
                        </a>
                    </li>
                    @endauth

                    @permission('manage-products')
                    <li class="{{ Active::pattern('admin/catalog/budget*') }}">
                        <a href="{{ route('admin.catalog.budget.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.catalog.budgets.management') }}</span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </li>
            @endauth

            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>

            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        <a href="{{ route('admin.log-viewer::dashboard') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{{ route('admin.log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

            @permission('manage-general')
            <li class="{{ Active::pattern('admin/general/slider*') }} treeview">
                <a href="#">
                    <i class="fa fa-object-ungroup"></i>
                    <span>{{ trans('menus.backend.general.sliders.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/general/slider*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/general/slider*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/general/slider') }}">
                        <a href="{{ route('admin.general.slider.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.general.sliders.title') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/general/contact*') }} treeview">
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span>{{ trans('menus.backend.general.contacts.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/general/contact*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/general/contact*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/general/contact') }}">
                        <a href="{{ route('admin.general.contact.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.general.contacts.title') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endauth
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>
