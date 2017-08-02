@extends('frontend.layouts.app')

@section('title') :: Sobre Nós @endsection

@section('content')
<section id="menu-navigate" itemscope itemtype="https://schema.org/Organization">
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
				<div class="row content">
	        		<header style="display: none;">
        				<h1>Veja como a <span itemprop="name">{{ app_name() }}</span> irá resolver seus problemas</h1>
	        			<meta itemprop="image" content="LINK DO LOGOTIPO">
	        			<meta itemprop="telephone" content="{{ trans('labels.frontend.contact.site_phone') }}">
	        			<meta itemprop="email" content="{{ trans('labels.frontend.contact.site_email') }}">
	        			<meta itemprop="sameAs" content="{{ route('frontend.index') }}">
	        			<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
		        			<span itemprop="streetAddress">
		        				{{ trans('labels.frontend.contact.site_address.address') }} - {{ trans('labels.frontend.contact.site_address.number') }}, {{ trans('labels.frontend.contact.site_address.complement') }} - {{ trans('labels.frontend.contact.site_address.neighborhood') }}
		        			</span>
		        			<meta itemprop="postalCode" content="{{ trans('labels.frontend.contact.site_address.cep') }}">
		        			<meta itemprop="addressLocality" content="Araçatuba">
		        			<meta itemprop="addressRegion" content="SP">
		        			<meta itemprop="addressCountry" content="Brasil">
	        			</div>
	        			<meta itemprop="url" content="LINK DO FACEBOOK">
	        			<meta itemprop="url" content="LINK DO TWITTER">
	        			<meta itemprop="url" content="LINK DO GOOGLE+">
	        			<meta itemprop="url" content="LINK DO YOUTUBE">
	        		</header>
	        		<footer class="col-md-12 about">
	        			<section>
	        				<header>
	        					<h1 class="title">Quem Somos</h1><hr>
	        				</header>
	        				<footer>
        						<p itemprop="description">
        							Atuamos no segmento de decoração, nosso objetivo é criar beleza e transformar o ambiente de forma muito criativa e moderna.
        						</p>
								<p>
									Investindo cada vez mais em novas tendências, produtos que visa a qualidade, rapidez na mão de obra e sustentabilidade.
								</p>
	        					<p>
	        						A <span class="ceo">{{ app_name() }}</span> é uma empresa que atua no segmento de decoração e acabamento, valorizamos profissionais que preza em seus projetos a qualidade e a eficiência na execução da obra.
	        					</p>
								<p>
									Nossos produtos são de uma excelente qualidade e é com muita satisfação que queremos ser seu parceiro para atuar no fornecimento de produto e mão de obra.
								</p>
	        				</footer>
	        			</section>
	        			<section>
	        				<header>
	        					<h1 class="title">Mão de obra</h1><hr>
	        				</header>
	        				<footer>
        						<p>
        							Nossos colaboradores são capacitados para executar todas atividades que são oferecidas pela empresa sendo treinados anualmente em parceria com nossos fornecedores para atender os requisitos de qualidade e garantia do produto.
        						</p>
        						<p class="subtitle">Lista de serviços prestados:</p>
        						<ul class="services">
        							<li>Instalação de papéis de parede.</li>
        							<li>Instalação de piso laminado.</li>
        							<li>Revestimento de parede.</li>
        							<li>Instalação de gramas sintéticas.</li>
        							<li>Instalação de madeiras plásticas.</li>
        						</ul>
	        				</footer>
	        			</section>
	        		</footer>
	        	</div>
	        </div>
		</div>
	</div>
</section>
@endsection

@section('after-scripts')
@endsection