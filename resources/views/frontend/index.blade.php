@extends('frontend.layouts.app')

@section('after-styles')
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.simpleLens.css') }}">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/slick.css') }}">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/nouislider.css') }}">
<!-- Top Slider CSS -->
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/frontend/sequence-theme.modern-slide-in.css') }}">
@endsection

@section('title') :: Decoração em Papel de Parede @endsection

@section('content')
<section id="aa-slider">
    <header>
        <h1 style="display: none;"></h1>
    </header>
    <article class="aa-slider-area">
        <div id="sequence" class="seq">
            <header class="seq-screen">
                <ul class="seq-canvas">
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/frontend/sliders/1.jpg" alt="Papel de Parede" />
                        </div>
                        <div class="seq-title">
                            <h1 data-seq> Papel de Parede </h1>
                        </div>
                    </li>
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/frontend/sliders/3.jpg" alt="Painéis Fotográficos" />
                        </div>
                        <div class="seq-title">
                            <h1 data-seq> Painéis Fotográficos </h1>
                        </div>
                    </li>
                </ul>
            </header>
            <footer>
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a title="Anterior" type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a title="Próximo" type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </footer>
        </div>
    </article>
</section>

<section id="aa-support">
  <div class="container">
      <div class="row">
          <header>
              <h1 style="display: none;"></h1>
          </header>
          <div class="col-md-12">
              <div class="aa-support-area">
                  <article class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-truck"></span>
                          <h1 class="h4">FORMAS DE ENVIO</h1>
                          <p>Trabalhamos com as seguintes formas de envio: PAC, SEDEX e transportadora.</p>
                      </div>
                  </article>
                  <article class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-clock-o"></span>
                          <h1 class="h4">TEMPO DE ENTREGA</h1>
                          <p>Os produtos serão enviados de 15 à 45 dias úteis.</p>
                      </div>
                  </article>
                  <article class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-phone"></span>
                          <h1 class="h4">ATENDIMENTO</h1>
                          <p>Atendimento de segunda a sexta-feira das 09:00 às 18:00. Sábados das 09:00 às 13:00.</p>
                      </div>
                  </article>
              </div>
          </div>
      </div>
  </div>
</section>
@if (count($papelDeParede) > 0)
  <section id="aa-product">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="row">
                      <div class="aa-product-area">
                          <div class="aa-product-inner">

                              <h1 style="display: none;"> {{ ucfirst($papelDeParede->first()->categories->parent->name) }}</h1>

                              <ul class="nav nav-tabs aa-products-tab">
                                  <li class="active"><a href="{{ route('frontend.category', $papelDeParede->first()->categories->id) }}">{{ ucfirst($papelDeParede->first()->categories->parent->name) }}</a></li>
                              </ul>
                              <div class="tab-papelDeParede" itemscope itemtype="https://schema.org/Product">
                                  <div class="tab-pane fade in active">
                                      <ul class="aa-product-catg">
                                          @foreach($papelDeParede as $view)
                                              <li>
                                                  <article>
                                                      <header>
                                                          <h1 style="display: none;" itemprop="name ">{{ $view->name }}</h1>
                                                      </header>
                                                      <figure>
                                                          <a title="{{ $view->name }}" class="aa-product-img" href="{{ route('frontend.product', $view->id) }}">
                                                            <img src="{{ $view->getImageUrl('cover') }}" alt="[{{ $view->name }}]">
                                                          </a>
                                                          <a title="{{ trans('labels.frontend.product.add_budge') }}" class="aa-add-card-btn" href="{{ route('frontend.cart.add', $view->id) }}">
                                                            <span class="fa fa-shopping-cart"></span>{{ trans('labels.frontend.product.add_budge') }}
                                                          </a>
                                                          <figcaption>
                                                              <p class="aa-product-title h1"><a title="{{ $view->name }}" href="{{ route('frontend.product', $view->id) }}">{{ $view->name }}</a></p>
                                                              <i class="aa-product-price">{{ trans('labels.frontend.product.ask_for_quote') }}</i>
                                                          </figcaption>
                                                      </figure>
                                                      <div class="aa-product-hvr-papelDeParede">
                                                          <a href="#" data-toggle2="tooltip" data-placement="top" title="{{ trans('labels.frontend.product.quick_view') }}" data-toggle="modal"
                                                             data-target="#{{ str_slug($view->name).$view->id }}"><span class="fa fa-search"></span></a>
                                                      </div>
                                                  </article>
                                              </li>
                                          @endforeach
                                      </ul>
                                      <div class="text-center">
                                          <a title="{{ trans('labels.frontend.product.browse_all_products') }}" class="aa-browse-btn" href="{{ route('frontend.category', $papelDeParede->first()->categories->id) }}">{{ trans('labels.frontend.product.browse_all_products') }} <span class="fa fa-long-arrow-right"></span></a>
                                      </div>
                                  </div>

                                  <div id="quick-view-modal">
                                      @foreach($papelDeParede as $modal)
                                          <div class="modal fade" id="{{ str_slug($modal->name).$modal->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-papelDeParede">
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
                                                              <!-- Modal view papelDeParede -->
                                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <div class="aa-product-view-papelDeParede">
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
                                                  </div><!-- /.modal-papelDeParede -->
                                              </div><!-- /.modal-dialog -->
                                          </div><!-- / quick view modal -->
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endif
@endsection

@section('after-scripts')
<!-- To Slider JS -->
<script src="{{ asset('js/frontend/sequence.js') }}"></script>
<script src="{{ asset('js/frontend/sequence-theme.modern-slide-in.js') }}"></script>
<!-- Price picker slider -->
<script src="{{ asset('js/frontend/nouislider.js') }}"></script>
@endsection
