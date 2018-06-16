<!-- Herda do layout principal -->
@extends('layouts.app')
<!-- Inicia o conteudo que será escrito dentro do layout principal -->
@section('content')
        <div class="gallery autoplay items-3" style="margin-top: -23px;">
          <div id="item-1" class="control-operator"></div>
          <div id="item-2" class="control-operator"></div>
          <div id="item-3" class="control-operator"></div>
          <figure class="item">
            <div class="procurar-profissional">
                <a class="btn btn-primary btn-lg" href="/home/buscarProfisional" role="button">Procurar profissional</a>
            </div>
            <img src="/img/slider/marcenaria3.jpg" class="imagem-slide">
          </figure>

          <figure class="item">
            <div class="procurar-profissional">
                <a class="btn btn-primary btn-lg" href="/home/buscarProfisional" role="button">Procurar profissional</a>
            </div>
            <img src="/img/slider/ferramenta01.jpg" class="imagem-slide">
          </figure>

          <figure class="item">
            <div class="procurar-profissional">
                <a class="btn btn-primary btn-lg" href="/home/buscarProfisional" role="button">Procurar profissional</a>
            </div>
            <img src="/img/slider/slide3.jpg" class="imagem-slide">
          </figure>

          <div class="controls">
            <a href="#item-1" class="control-button">•</a>
            <a href="#item-2" class="control-button">•</a>
            <a href="#item-3" class="control-button">•</a>
          </div>
        </div>
        <div id="tudo">
        <div class="container">

        <div class="row">
                <h2 class="title">É um profissional e precisa de visibilidade nas pesquisas ?</h2>
                    </div>
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-md-6">
                        <div style="margin-left: 25%;">
                            <img src="{{asset('img/premium.png')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="itens">
                            <div class="item left">
                                <div class="info">
                                    <h3>Seja premium !</h3>
                                    <p>
                                        Você subirá no ranking das pesquisas, descontos em materiais com empresas parceiras e terá suporte privilegiado.</p>
                                    <!-- PayPal Logo --><img  src="https://www.paypal-brasil.com.br/logocenter/util/img/botao-checkout_horizontal_paguecom_ap.png" border="0" alt="Imagens de solução" /><!-- PayPal Logo -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                    <div class="row">
                        <h2 class="title">Precisando de marceneiro?</h2>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="itens">
                            <div class="item left">
                                <div class="info">
                                    <h3>Nos diga o serviço precisa</h3>
                                    <p>Primeiro você indica o seu objetivo: encontrar um profissional para executar um serviço ou realizar pedidos de orçamentos diretamente. Após determinar o seu objetivo, é hora de detalhar o que você precisa em termos de serviço para finalizar a busca.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="margin-left: 25%;">
                            <img src="img/criacao-de-site-para-marcenaria.png">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div style="margin-left: 25%;">
                            <img src="img/problema-encontre-profissional.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="itens">
                            <div class="item right">
                                <div class="info">
                                    
                                    <h3>Encontre um profissional perto de você</h3>
                                   <p>Primeiro você indica o seu objetivo: encontrar um profissional para executar um serviço ou realizar pedidos de orçamentos diretamente. Após determinar o seu objetivo, é hora de detalhar o que você precisa em termos de serviço para finalizar a busca.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="itens">
                            <div class="item left">
                                <div class="info">
                                    <h3>Negocie diretamente</h3>
                                    <p>Primeiro você indica o seu objetivo: encontrar um profissional para executar um serviço ou realizar pedidos de orçamentos diretamente. Após determinar o seu objetivo, é hora de detalhar o que você precisa em termos de serviço para finalizar a busca.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="margin-left: 25%;">
                            <img src="img/negocie-diretamente.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div style="margin-left: 25%">
                            <img src="img/avalie-profissional.png" style="width: 230px; height: auto;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="itens">
                            <div class="item right">
                                <div class="info">
                                    <h3>Avalie o profissional</h3>
                                    <p>Primeiro você indica o seu objetivo: encontrar um profissional para executar um serviço ou realizar pedidos de orçamentos diretamente. Após determinar o seu objetivo, é hora de detalhar o que você precisa em termos de serviço para finalizar a busca.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop