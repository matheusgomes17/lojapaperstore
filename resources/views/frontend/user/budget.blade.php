@extends('frontend.layouts.app')

@section('content')


<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 60px;">
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="{{ route('frontend.user.account') }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                Paperstore - Decoração em Papel de Parede
                                <small class="pull-right">{{ trans('labels.backend.catalog.budgets.answers.date') }} {{ $budget->created_at }}</small>
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            De:
                            <address>
                                <strong>Paperstore - Decoração em Papel de Parede</strong><br>
                                {{ trans('labels.frontend.contact.site_address.address') }}, 810 C<br>
                                Araçatuba - SP, 16270-000<br>
                                {{ trans('labels.backend.catalog.budgets.answers.phone') }} (18) 3636-3636<br>
                                {{ trans('labels.backend.catalog.budgets.answers.mail') }} contato@lojapaperstore.com.br
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Para:
                            <address>
                                <strong>{{ $budget->users->name }}</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                {{ trans('labels.backend.catalog.budgets.answers.phone') }} (555) 539-1037<br>
                                {{ trans('labels.backend.catalog.budgets.answers.mail') }} {{ $budget->users->email }}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>{{ trans('labels.backend.catalog.budgets.answers.budget') }}:</b> #{{ $budget->id }}<br><br>
                            <b>{{ trans('labels.backend.catalog.budgets.answers.qtd') }}:</b> {{ $budget->items->count() }} @if($budget->items->count() > 1) produtos @else produto @endif<br>
                            <b>{{ trans('labels.backend.catalog.budgets.answers.deadline') }}:</b> 15 dias úteis<br>
                            <b>{{ trans('labels.backend.catalog.budgets.answers.validity') }}:</b> {{ $budget->getShelfLife() }}
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{ trans('labels.backend.catalog.budgets.answers.table.product') }}</th>
                                        <th>{{ trans('labels.backend.catalog.budgets.answers.table.cod') }}</th>
                                        <th>{{ trans('labels.backend.catalog.budgets.answers.table.category') }}</th>
                                        <th>{{ trans('labels.backend.catalog.budgets.answers.table.image') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($budget->items as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->products->code }}</td>
                                        <td>{{ $item->products->categories->parent->name }} / {{ $item->products->categories->name }}</td>
                                        <td><img alt="{{ $item->products->name }}" width="60" src="{{ $item->products->getImageUrl('thumbnail') }}" /></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Medidas:</p>

                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <th style="width: 40%">Altura:</th>
                                <td>{{ $budget->height }}cm</td>
                              </tr>
                              <tr>
                                <th>Largura:</th>
                                <td>{{ $budget->width }}cm</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Métodos de Pagamento:</p>
                            <img src="{{ asset('img/backend/credit/visa.png') }}" alt="Visa">
                            <img src="{{ asset('img/backend/credit/mastercard.png') }}" alt="Mastercard">
                            <img src="{{ asset('img/backend/credit/american-express.png') }}" alt="American Express">
                            <img src="{{ asset('img/backend/credit/paypal2.png') }}" alt="Paypal">

                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div>
                    </div>

                    <div class="row budget_method_payment">
                        <!-- accepted payments column -->
                        <div class="col-xs-12">
                            <p class="lead"><b>{{ trans('labels.backend.catalog.budgets.reply_to') }} {{ $budget->answers->users->name }}:</b></p>
                            {!! $budget->answers->message !!}
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
        </div>
    </div>
</section>
@endsection