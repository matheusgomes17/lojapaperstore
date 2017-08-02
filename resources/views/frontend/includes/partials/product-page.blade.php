<h1 style="display: none;"> {{ ucfirst($content->get()->categories->parent->name) }}</h1>

<ul class="nav nav-tabs aa-products-tab">
    <li class="active"><a href="{{ route('frontend.category', $content->first()->categories->id) }}">{{ ucfirst($content->first()->categories->parent->name) }}</a></li>
</ul>
<div class="tab-content" itemscope itemtype="https://schema.org/Product">
    <div class="tab-pane fade in active">
        <ul class="aa-product-catg">
            @foreach($content as $view)
                <li>
                    <article>
                        <header>
                            <h1 style="display: none;" itemprop="name ">{{ $view->name }}</h1>
                        </header>
                        <figure>
                            <a title="{{ $view->name }}" class="aa-product-img" href="{{ route('frontend.product', $view->id) }}"><img src="{{ $view->getImageUrl('cover') }}" alt="[{{ $view->name }}]"></a>
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
        <div class="text-center">
            <a title="{{ trans('labels.frontend.product.browse_all_products') }}" class="aa-browse-btn" href="{{ route('frontend.category', $content->first()->categories->id) }}">{{ trans('labels.frontend.product.browse_all_products') }} <span class="fa fa-long-arrow-right"></span></a>
        </div>
    </div>

    <div id="quick-view-modal">
        @foreach($content as $modal)
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
                                                Categoria: <a title="{{ $modal->categories->name }}" href="{{ route('frontend.category', $modal->categories->id) }}" itemprop="category">{{ $modal->categories->name }}</a>
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