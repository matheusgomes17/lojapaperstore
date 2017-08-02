@extends('frontend.layouts.app')

@section('title') :: Orçamento Gerado Com Sucesso @endsection

@section('content')
<section id="checkout">
   	<div class="container">
     	<div class="row">
       		<div class="col-md-12">
        		<div class="checkout-area">
            		<div class="row">
              			<div class="col-md-8">
                			<div class="checkout-left">
                  				<div class="panel-group" id="accordion">
				                    <div class="panel panel-default aa-checkout-coupon">
				                      <div class="panel-heading">
				                        <h4 class="panel-title">
				                          <a href="#">
				                            <b>Orçamento gerado com sucesso</b>
				                          </a>
				                        </h4>
				                      </div>
				                      <div class="panel-collapse collapse in">
				                        <div class="panel-body h4">
				                          <p>Seu orçamento <b>#{{ $budget->id }}</b> foi gerado com sucesso!</p>
				                          <p>Aguarde até que um de nossos administradores respondam seu orçamento.</p>
				                        </div>
				                      </div>
				                    </div>
			                  	</div>
			                </div>
              			</div>
			            <div class="col-md-4">
			                <div class="checkout-right">
			                  	<h4><b>Lista de Orçamento</b></h4>
			                  	<div class="aa-order-summary-area">
			                    	<table class="table table-responsive">
			                      		<thead>
			                        		<tr>
			                          			<th>Produto</th>
			                          			<th>Código</th>
			                        		</tr>
			                      		</thead>
					                    <tbody>
					                    @foreach ($budget->items as $item)
					                        <tr>
					                            <td>{{ $item->products->name }}</td>
					                            <td>{{ $item->products->code }}</td>
					                        </tr>
					                    @endforeach
					                    </tbody>
			                      		<tfoot>
			                        		<tr>
			                          			<th>Total</th>
			                          			<td>{{ count($budget->items) }} @if(count($budget->items) > 1)produtos @else produto @endif</td>
		                        			</tr>
			                      		</tfoot>
			                    	</table>
			                  	</div>
			                </div>
			            </div>
            		</div>
         		</div>
       		</div>
     	</div>
   	</div>
</section>
@endsection

@section('after-scripts')
@endsection