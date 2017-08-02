@extends('frontend.layouts.app')

@section('after-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.simpleLens.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/slick.css') }}">
@endsection

@section('title') :: Produto {{ $product->categories->parent->name }} - {{ $product->name }} #{{ $product->code }} @endsection

@section('content')
<div id="aa-catg-head-banner">
    <img src="{{ $product->categories->getImageUrl('breadcrumb') }}" alt="{{ $product->categories->name }}">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <p class="h2">{{ $product->name }} - #{{ $product->code }}</p>
                <ol class="breadcrumb">
                    <li><a title="Home" href="{{ route('frontend.index') }}">Home</a></li>         
                    <li><a title="{{ $product->categories->name }}" href="{{ route('frontend.category', $product->categories->id) }}">{{ $product->categories->name }}</a></li>
                    <li class="active">{{ $product->name }} - #{{ $product->code }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Product -->
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">
                                                <a title="{{ $product->name }}" class="simpleLens-lens-image" data-lens-image="{{ $product->getImageUrl('zoom') }}">
                                                    <img alt="[{{ $product->name }}]" src="{{ $product->getImageUrl('cover') }}" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div><br>
                                        <div class="simpleLens-thumbnails-container">
                                            <a title="{{ $product->name }}" href="#" class="simpleLens-thumbnail-wrapper"
                                               data-lens-image="{{ $product->getImageUrl('zoom') }}"
                                               data-big-image="{{ $product->getImageUrl('cover') }}">
                                                <img alt="[{{ $product->name }}]" src="{{ $product->getImageUrl('thumbnail') }}" width="75">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h1 class="h3">{{ $product->name }} - #{{ $product->code }}</h1>
                                    <p>{{ $product->description }}</p>

                                    <div class="aa-prod-quantity">
                                        <p class="aa-prod-category">
                                            Categoria: <a href="{{ route('frontend.category', $product->categories->id) }}">{{ $product->categories->name }}</a>
                                        </p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a title="{{ trans('labels.frontend.product.add_to_budge') }}" href="{{ route('frontend.cart.add', $product->id) }}" class="aa-add-to-cart-btn">
                                            <span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_to_budge') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="aa-product-details-bottom">
                        <header>
                            <ul class="nav nav-tabs" id="myTab2">
                                <li>
                                    <h1><a title="{{ trans('labels.frontend.product.description') }}" href="#description" data-toggle="tab">{{ trans('labels.frontend.product.description') }}</a></h1>
                                </li>
                            </ul>
                        </header>

                        <!-- Tab panes -->
                        <footer class="tab-content">
                            <!-- Description -->
                            <div class="tab-pane fade in active" id="description">
                                <p>{{ $product->description }}</p>
                            </div>
                            <!-- ./Description -->
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="aa-product-details-area">
                <h1 style="display: none;">Produtos Relacionados:</h1>
                <div>
                    <div class="aa-product-related-item">
                        <ul class="aa-product-catg aa-related-item-slider">
                            @foreach($related as $view)
                                <li>
                                    <article>
                                        <header>
                                            <h1 style="display: none;">{{ $view->name }} - #{{ $view->code }}</h1>
                                        </header>
                                        <figure>
                                            <a title="{{ $view->name }}" class="aa-product-img" href="{{ route('frontend.product', $view->id) }}"><img src="{{ $view->getImageUrl('cover') }}" alt="{{ $view->name }}"></a>
                                            <a title="{{ trans('labels.frontend.product.add_budge') }}" class="aa-add-card-btn" href="{{ route('frontend.cart.add', $view->id) }}"><span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_budge') }}</a>
                                            <figcaption>
                                                <p class="aa-product-title h1"><a href="{{ route('frontend.product', $view->id) }}">{{ $view->name }}</a></p>
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
                    </div>
                    <div id="quick-view-modal">
                        @foreach($related as $modal)
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
                                                                    <img alt="[{{ $modal->name }}]" src="{{ $modal->getImageUrl('thumbnail') }}" width="50">
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
                                                                Categoria: <a title="{{ $modal->categories->name }}" href="{{ route('frontend.category', $modal->categories->id) }}">{{ $modal->categories->name }}</a>
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