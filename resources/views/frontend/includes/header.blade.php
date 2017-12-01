<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start cellphone -->
                            <div class="cellphone">
                                <p><span class="hidden-xs">Ligue agora:</span> <span class="fa fa-phone"></span><b>(18) 3608-5008</b></p>
                            </div>
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-whatsapp"></span><b>(18) 98110-4724</b></p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">

                            <ul class="aa-head-top-nav-right">
                            @if (! $logged_in_user)
                                <li><a title="" data-toggle="modal" data-target="#login-modal" href="#">{{ trans('navs.frontend.login') }}</a></li>

                                @if (config('access.users.registration'))
                                    <li>{{ link_to_route('frontend.auth.register', trans('navs.frontend.register')) }}</li>
                                @endif
                                
                                <li><a title="" class="hidden-xs" href="{{ route('frontend.cart') }}">Checkout</a></li>
                            @else
                                @permission('view-backend')
                                <li>{{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration')) }}</li>
                                @endauth

                                <li><a title="" href="{{ route('frontend.user.account') }}">{{ trans('navs.frontend.user.account') }}</a></li>
                                <li><a title="" class="hidden-xs" href="{{ route('frontend.cart') }}">Checkout</a></li>

                                <li>{{ link_to_route('frontend.auth.logout', trans('navs.general.logout')) }}</li>
                            @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="{{ route('frontend.index') }}">
                                <span class="icon-crown"></span>
                                <h1 class="title">Paper<strong> Store</strong> <span>Decoração em Papel de Parede</span></h1>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="#">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">{{ trans('labels.frontend.contact.budget_list') }}</span>
                                @if (!empty(getCart()->all()))
                                <span class="aa-cart-notify">{{ count(session()->get('cart')->all()) }}</span>
                                @endif
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    @forelse(getCart()->all() as $k => $item)
                                    <li>
                                        <a class="aa-cartbox-img" href="{{ route('frontend.product', $k) }}"><img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"></a>
                                        <div class="aa-cartbox-info">
                                            <p class="h4"><a href="{{ route('frontend.product', $k) }}">{{ $item['name'] }}</a></p>
                                            <p>{{ $item['code'] }}</p>
                                        </div>
                                        <a class="aa-remove-product" href="{{ route('frontend.cart.destroy', $k) }}"><span class="fa fa-times"></span></a>
                                    </li>
                                    @empty
                                        <li><div class="alert alert-warning" role="alert"><b>{{ trans('labels.frontend.cart.empty_card') }}</b></div></li>
                                    @endforelse
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="{{ route('frontend.cart') }}">{{ trans('labels.frontend.cart.checkout') }}</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            {{ Form::open(['route' => 'frontend.search', 'method' => 'get']) }}
                                <input type="text" name="search" placeholder="Faça sua pesquisa...">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            {{ Form::close() }}
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
<!-- menu -->
<div id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul id="main-menu" class="nav navbar-nav">
                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                        @foreach(getMenuCategories() as $menus)
                        <li><a href="#">{{ $menus->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            @foreach($menus->children as $menu)
                                <li><a href="{{ route('frontend.category', $menu->id) }}">{{ $menu->name }}</a></li>
                            @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>
<!-- / menu -->
