@extends('frontend.layouts.app')

@section('title') :: Carrinho de Orçamentos @endsection

@section('content')
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">

                    @if (session()->get('flash_error'))
                    <div class="box-body">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p class="h4"><i class="icon fa  fa-envelope"></i> <b>Existem orçamentos pendentes:</b></p>
                            {!! session()->get('flash_error') !!}
                        </div>
                    </div>
                    @endif

                    <div class="cart-view-table aa-wishlist-table">
                        {{ Form::open(['route' => 'frontend.cart.checkout', 'method' => 'get']) }}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('labels.frontend.cart.table.item') }}</th>
                                            @if (count(getCart()->all()) > 0)<th></th>@else @endif
                                            <th>{{ trans('labels.frontend.cart.table.product') }}</th>
                                            <th>{{ trans('labels.frontend.cart.table.code') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse(getCart()->all() as $k => $item)
                                        <tr>
                                            <td><a class="remove" href="{{ route('frontend.cart.destroy', $k) }}"><fa class="fa fa-close"></fa></a></td>
                                            <td><a href="#"><img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"></a></td>
                                            <td><a class="aa-cart-title" href="{{ route('frontend.product', $k) }}">{{ $item['name'] }}</a></td>
                                            <td>{{ $item['code'] }}</td>
                                        </tr>
                                        @empty
                                            <tr><td colspan="3"><div class="alert alert-warning" role="alert"><b>Não existem produtos no carrinho!</b></div></td></tr>
                                        @endforelse
                                        <tr>
                                            <td colspan="4" class="aa-cart-view-bottom">
                                                <a href="{{ route('frontend.index') }}" class="aa-cart-view-btn" type="submit">{{ trans('labels.frontend.cart.continue_budget') }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-view-total">
                                <h4>Medidas do local:</h4>
                                <table class="aa-totals-table">
                                    <tbody>
                                        <tr class="form-group">
                                            <th width="50%"><label for="height">Altura (cm)</label></th>
                                            <td><input class="form-control" type="text" name="height" placeholder="Altura (cm)" /></td>
                                        </tr>
                                        <tr class="form-group">
                                            <th><label for="width">Largura (cm)</label></th>
                                            <td><input class="form-control" type="text" name="width" placeholder="Largura (cm)" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="aa-cart-view-btn">{{ trans('labels.frontend.cart.close_budget') }}</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('after-scripts')
@endsection