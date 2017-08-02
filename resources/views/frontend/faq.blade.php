@extends('frontend.layouts.app')

@section('title') :: Perguntas Frequentes @endsection

@section('content')
<section id="menu-navigate">
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
				<div class="row">
	        		<header class="col-md-12 content">
					   	<div class="container">
					     	<div class="row">
					       		<div class="col-md-12">
					        		<div class="faq">
					            		<div class="row">
					              			<div class="col-md-12">
					                  			<div class="panel-group" id="accordion">
					                  			<h1 class="title">Dúvidas Frequentes - FAQ</h1><hr>
								                    <article class="panel panel-default">
								                      	<div class="panel-heading">
								                        	<h1 class="panel-title">
									                          	<a title="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									                            	Teste
									                          	</a>
								                        	</h1>
								                      	</div>
								                      	<div id="collapseOne" class="panel-collapse collapse in">
								                        	<div class="panel-body">
								                          		<p>Isso é um texto teste</p>
								                        	</div>
								                      	</div>
								                    </article>

								                    <article class="panel panel-default">
								                      	<div class="panel-heading">
								                        	<h1 class="panel-title">
									                          	<a title="" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									                            	O que fazer após criar um orçamento?
									                          	</a>
								                        	</h1>
								                      	</div>
								                      	<div id="collapseTwo" class="panel-collapse collapse">
								                        	<div class="panel-body">
								                          		<p>É necessário que você aguarde até que um de nossos funcionários respondam o seu orçamento. Você também pode acompanhar o status de como está o seu pedido de orçamento.</p>
								                          		<p>Para isso é necessário que você esteja logado com seu usuário e acessar o link "<a href="{{ route('frontend.user.account') }}"><strong>{{ trans('navs.frontend.user.account') }}</strong></a>" e, em seguida, clique na aba "<strong>Meus Orçamentos</strong>".</p>
								                          		<p>Assim que seu orçamento for respondido será enviado um e-mail com a resposta do seu orçamento. Você também irá poder ver o orçamento na aba "<strong>Meus Orçamentos</strong>" na página da "<strong>{{ trans('navs.frontend.user.account') }}</strong>".</p>
								                        	</div>
								                      	</div>
								                    </article>
					                  			</div>
					              			</div>
					            		</div>
					         		</div>
					       		</div>
					     	</div>
					   	</div>
	        		</header>
	        	</div>
	        </div>
		</div>
	</div>
</section>
@endsection

@section('after-scripts')
@endsection