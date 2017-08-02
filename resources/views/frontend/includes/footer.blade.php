<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h1>{{ trans('labels.frontend.newsletter.title') }}</h1>
                    <p><i class="fa fa-unlock-alt"></i> {{ trans('labels.frontend.newsletter.description') }}</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" placeholder="{{ trans('labels.frontend.newsletter.email') }}">
                        <input type="submit" value="{{ trans('labels.frontend.newsletter.subscribe') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->

<!-- footer -->
<footer id="aa-footer" itemscope itemtype="https://schema.org/Organization">
    <!-- footer bottom -->
    <header class="aa-footer-top">
        <h1 style="display: none;">Conheça mais sobre a {{ app_name() }}</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <span class="h3">Menu Principal</span>
                                    <ul class="aa-footer-nav">
                                        <li><a title="Home" href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><a title="Sobre Nós" href="{{ route('frontend.about') }}">Sobre Nós</a></li>
                                        <li><a title="Contato" href="{{ route('frontend.contact.index') }}">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <span class="h3">Institucional</span>
                                        <ul class="aa-footer-nav">
                                            <li><a title="Politica de Entrega" href="{{ route('frontend.delivery') }}">Politica de Entrega</a></li>
                                            <li><a title="Politica de Privacidade" href="{{ route('frontend.privacy') }}">Politica de Privacidade</a></li>
                                            <li><a title="Termos e Condições de Uso" href="{{ route('frontend.terms') }}">Termos e Condições de Uso</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <span class="h3">Links Úteis</span>
                                        <ul class="aa-footer-nav">
                                            <li><a title="Dúvidas Frequentes" href="{{ route('frontend.faq') }}">Dúvidas Frequentes</a></li>
                                            <li><a title="Mapa do Site" href="#">Mapa do Site</a></li>
                                            <li><a title="Fornecedores" href="#">Fornecedores</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <section>
                                            <h1 class="h3">Atendimento ao Cliente</h1>
                                            <address>
                                                <p><span class="fa fa-home"></span>
                                                    {{ trans('labels.frontend.contact.site_address.address') }} - 
                                                    {{ trans('labels.frontend.contact.site_address.number') }}, 
                                                    {{ trans('labels.frontend.contact.site_address.complement') }}<br>
                                                    {{ trans('labels.frontend.contact.site_address.neighborhood') }} -
                                                    {{ trans('labels.frontend.contact.site_address.city') }}<br>
                                                    CEP: {{ trans('labels.frontend.contact.site_address.cep') }}
                                                </p>
                                                <p><span class="fa fa-phone"></span> <span itemprop="telephone">(18) 3608-5008</span></p>
                                                <p><span class="fa fa-envelope"></span> <span itemprop="email">{{ trans('labels.frontend.contact.site_email') }}</span></p>
                                            </address>
                                        </section>
                                        <section class="aa-footer-social">
                                            <header><h1 style="display: none;">{{ app_name() }} nas redes sociais</h1></header>
                                            <a title="{{ app_name() }} no Facebook" itemprop="url" rel="nofallow" href="#"><span class="fa fa-facebook"></span></a>
                                            <a title="{{ app_name() }} no Twitter" itemprop="url" rel="nofallow" href="#"><span class="fa fa-twitter"></span></a>
                                            <a title="{{ app_name() }} no Google+" itemprop="url" rel="nofallow" href="#"><span class="fa fa-google-plus"></span></a>
                                            <a title="{{ app_name() }} no YouTube" itemprop="url" rel="nofallow" href="#"><span class="fa fa-youtube"></span></a>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- footer-bottom -->
    <footer class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p style="text-align: center;">:: Desenvolvido por <a title="Snaketec" href="#">Snaketec</a> :: Copyright 2015 - {{ date('Y') }} © <b style="color: #ff871c;">{{ app_name() }}</b> Todos os direitos reservados. | CNPJ: 22.312.365/0001-94</p>
                        <section class="aa-footer-payment">
                            <header><h1 style="display: none;">Formas de pagamento</h1></header>
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </section>
                        <meta itemprop="image" content="" />
                        <meta itemprop="description" content="Atuamos no segmento de decoração, nosso objetivo é criar beleza e transformar o ambiente de forma muito criativa e moderna." />
                        <meta itemprop="foundingDate" content="20/06/2015" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
</footer>
<!-- / footer -->