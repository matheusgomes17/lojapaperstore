@extends('frontend.layouts.app')

@section('after-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.simpleLens.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/slick.css') }}">
@endsection

@section('content')
<section id="aa-product" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
			@if (count($search) > 0)

				<header class="alert alert-info" role="alert">
                    <h1 class="h2" style="text-align: center;"><b><i class="fa fa-search"></i></b> 
                        Sua pesquisa por "<b>{{ $keyword }}</b>" retornou <b>{{ count($search) }}</b> @if (count($search) == 1) resultado.  @else resultados. @endif
                    </h1>
                </header>
				
				<div class="aa-product-related-item" style="margin-top: 60px;">
                    <ul class="aa-product-catg">
                        @foreach($search as $view)
                            <li>
                                <article>
                                    <header>
                                        <h1 style="display: none;" itemprop="name ">{{ $view->name }}</h1>
                                    </header>
                                    <figure>
                                        <a class="aa-product-img" href="{{ route('frontend.product', $view->id) }}"><img src="{{ $view->getImageUrl('cover') }}" alt="{{ $view->name }}"></a>
                                        <a class="aa-add-card-btn" href="{{ route('frontend.cart.add', $view->id) }}"><span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_budge') }}</a>
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
                    @foreach($search as $modal)
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
                                                                <a class="simpleLens-lens-image" data-lens-image="{{ $modal->getImageUrl('zoom') }}">
                                                                    <img src="{{ $modal->getImageUrl('cover') }}" class="simpleLens-big-image">
                                                                </a>
                                                            </div>
                                                        </div><br>
                                                        <div class="simpleLens-thumbnails-container">
                                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                               data-lens-image="{{ $modal->getImageUrl('zoom') }}"
                                                               data-big-image="{{ $modal->getImageUrl('cover') }}">
                                                                <img src="{{ $modal->getImageUrl('thumbnail') }}" width="50">
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
                                                        <a href="{{ route('frontend.product', $modal->id) }}" class="aa-add-to-cart-btn">
                                                            {{ trans('labels.frontend.product.view_detail') }}</a>
                                                        <a href="{{ route('frontend.cart.add', $modal->id) }}" class="aa-add-to-cart-btn">
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
                <div class="alert alert-danger" role="alert">
                    <h1 class="h2" style="text-align: center;"><b><i class="fa fa-close"></i></b> Desculpe, não foi encontrado nenhum resultado para "<b>{{ $keyword }}</b>"
                    </h1>
                </div>
			@endif
        </div>
    </div>
</section>
@endsection

@section('after-scripts')
<script src="{{ asset('js/frontend/jquery.simpleGallery.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.simpleLens.js') }}"></script>
<script src="{{ asset('js/frontend/slick.js') }}"></script>
@endsection