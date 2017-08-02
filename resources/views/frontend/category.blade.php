@extends('frontend.layouts.app')

@section('after-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.simpleLens.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/slick.css') }}">
@endsection

@section('title') :: Categoria {{ $cat->name }} @endsection

@section('content')
<div id="aa-catg-head-banner">
    <img src="{{ $cat->getImageUrl('breadcrumb') }}" alt="[{{ $cat->name }}]">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <p class="h2">{{ $cat->name }}</p>
                <ol class="breadcrumb">
                    <li><a title="Home" href="{{ route('frontend.index') }}">Home</a></li>         
                    <li class="active">{{ $cat->name }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section id="aa-product-category">
    <div class="container">
        <header>
            <h1 style="display: none;">Veja os produtos da categoria {{ $cat->name }}</h1>
        </header>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-body">
                        @if ($category->count() > 0)
                            <ul class="aa-product-catg">
                                @foreach ($category as $view)
                                <li>
                                    <article>
                                        <header>
                                            <h1 style="display: none;" itemprop="name ">{{ $view->name }}</h1>
                                        </header>
                                        <figure>
                                            <a title="{{ $view->name }}" class="aa-product-img" href="{{ route('frontend.product', $view->id) }}"><img src="{{ $view->getImageUrl('cover') }}" alt="{{ $view->name }}"></a>
                                            <a title="{{ trans('labels.frontend.product.add_budge') }}" class="aa-add-card-btn" href="{{ route('frontend.cart.add', $view->id) }}"><span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_budge') }}</a>
                                            <figcaption>
                                                <p class="aa-product-title h1"><a title="{{ $view->name }}" href="{{ route('frontend.product', $view->id) }}">{{ $view->name }}</a></p>
                                                <i class="aa-product-price">{{ trans('labels.frontend.product.ask_for_quote') }}</i>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="{{ trans('labels.frontend.product.quick_view') }}" data-toggle="modal"
                                               data-target="#{{ str_slug($view->name).$view->id }}"><span class="fa fa-search"></span></a>
                                        </div>
                                    </article>
                                </li>
                                @endforeach 
                            </ul>
                            <div id="quick-view-modal">
                            @foreach($category as $modal)
                                <div class="modal fade" id="{{ str_slug($modal->name).$modal->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider">
                                                            <div class="simpleLens-gallery-container" id="demo-1">
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a title="{{ $modal->name }}" class="simpleLens-lens-image" data-lens-image="{{ $modal->getImageUrl('zoom') }}">
                                                                            <img alt="[{{ $modal->name }}]" src="{{ $modal->getImageUrl('cover') }}" class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div><br>
                                                                <div class="simpleLens-thumbnails-container">
                                                                    <a title="{{ $modal->name }}" href="#" class="simpleLens-thumbnail-wrapper"
                                                                       data-lens-image="{{ $modal->getImageUrl('zoom') }}"
                                                                       data-big-image="{{ $modal->getImageUrl('cover') }}">
                                                                        <img align="[{{ $modal->name }}]" src="{{ $modal->getImageUrl('thumbnail') }}" width="50">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <p class="h3">{{ $modal->name }}</p>
                                                            <p>{{ $modal->description }}</p>

                                                            <div class="aa-prod-quantity">
                                                                <p class="aa-prod-category">
                                                                    Categoria: <a href="{{ route('frontend.category', $modal->categories->id) }}">{{ $modal->categories->name }}</a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a title="{{ trans('labels.frontend.product.view_detail') }}" href="{{ route('frontend.product', $modal->id) }}" class="aa-add-to-cart-btn">
                                                                    {{ trans('labels.frontend.product.view_detail') }}</a>
                                                                <a title="{{ trans('labels.frontend.product.add_budge') }}" href="{{ route('frontend.cart.add', $modal->id) }}" class="aa-add-to-cart-btn">
                                                                    <span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_budge') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            @endforeach
                            </div>
                        @else
                            <div class="alert alert-danger" role="alert"><strong>{{ trans('alerts.frontend.products.no_have_products') }}</strong></div>
                        @endif
                    </div>
                    @if ($category->count() > 1)
                        <div class="aa-product-catg-pagination">
                            {{ $category->render() }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                <div class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        @foreach(getMenuCategories() as $categoryMenu)
                            <p class="h3">{{ $categoryMenu->name }}</p>
                            <ul class="aa-catg-nav">
                                @foreach($categoryMenu->children as $categorySubMenu)
                                    <li><a title="{{ $categorySubMenu->name }}" href="{{ route('frontend.category', $categorySubMenu->id) }}">{{ $categorySubMenu->name }}</a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('after-scripts')
<script src="{{ asset('js/frontend/jquery.simpleGallery.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.simpleLens.js') }}"></script>
<script src="{{ asset('js/frontend/slick.js') }}"></script>
@endsection