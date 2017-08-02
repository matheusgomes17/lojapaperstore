@extends('frontend.layouts.app')

@section('title') :: Entre Em Contato @endsection

@section('content')
<section id="aa-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-contact-area">
                    <h1 style="display: none;">Entre agora mesmo em contato e tire já a sua dúvida!</h1>
                    <div class="aa-contact-top">
                        <p class="h2">{{ trans('labels.frontend.contact.wellcome') }}</p>
                        <p>{{ trans('labels.frontend.contact.description') }}</p>
                    </div>
                    <!-- contact map -->
                    <div class="aa-contact-map" itemscope itemtype="https://schema.org/Place">
                        <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                            <meta itemprop="latitude" content="-21.2023651" />
                            <meta itemprop="longitude" content="-50.4541188" />

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d696.663846299508!2d-50.4536600440736!3d-21.202538988485443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84bd957c0f0af7e!2sPaper+Store+-+Decora%C3%A7%C3%A3o+em+Papel+de+Parede!5e0!3m2!1spt-BR!2sbr!4v1486414246417" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Contact address -->
                    <div class="aa-contact-address">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-contact-address-left">
                                    {{ Form::open(['route' => 'frontend.contact.store', 'method' => 'post', 'class' => 'comments-form contact-form']) }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="{{ trans('labels.frontend.contact.name') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="{{ trans('labels.frontend.contact.email') }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="subject" placeholder="{{ trans('labels.frontend.contact.subject') }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="{{ trans('labels.frontend.contact.message') }}"></textarea>
                                        </div>
                                        <button type="submit" class="aa-secondary-btn">{{ trans('buttons.general.send') }}</button>
                                    </form>
                                    {{ Form::close() }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="aa-contact-address-right">
                                    <address>
                                        <p>A {{ app_name() }} é uma empresa que atua no segmento de decoração e acabamento, valorizamos profissionais que preza em seus projetos a qualidade e a eficiência na execução da obra.</p>
                                        <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                            <span class="fa fa-home"></span>
                                            <meta itemprop="streetAddress" content="Rua Porangaba, 781 D - Vila Industrial">
                                            <meta itemprop="addressLocality" content="Araçatuba">
                                            <meta itemprop="addressRegion" content="SP">
                                            <meta itemprop="postalCode" content="16072-475">

                                            Rua Porangaba, 781 D - Vila Industrial Araçatuba / SP 16072-475
                                            
                                            <p><span class="fa fa-phone"></span><span itemprop="telephone">{{ trans('labels.frontend.contact.site_phone') }}</span></p>
                                            <p><span class="fa fa-envelope"></span>E-mail: <span itemprop="email">{{ trans('labels.frontend.contact.site_email') }}</span></p>
                                        </p>
                                    </address>
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