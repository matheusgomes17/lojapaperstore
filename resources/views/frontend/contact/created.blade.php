@extends('frontend.layouts.app')

@section('title') :: Contato Enviado Com Sucesso @endsection

@section('content')
<section id="contato">
    <div class="container">
        <div class="col-md-12">
            <header class="row">
                    <h1 class="title">Parabéns, <span class="name">{{ $contact->name }}</span>! <br><span class="send">Você enviou um e-mail com sucesso!</span></h1>
                    <p class="image"><img width="200" src="{{ asset('img/frontend/sendmail.png') }}"></p>
                    <p class="desc">Aguarde até que um de nossos colaboradores entrem em contato.</p>
            </header>
            <footer>
                <p class="link"><a href="{{ route('frontend.index') }}">Continue navegando em <b>nossa página</b>.</a></p>
            </footer>
        </div>
    </div>
</section>
@endsection