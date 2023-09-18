@extends('layouts.main')

@section('title', 'A.Jung Soluções Corporativas LTDA')

@section('content')

{{-- START CARROSEL --}}
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/banner.jpg?a=123" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/banner.jpg?a=123" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/banner.jpg?a=123" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- START CARROSEL --}}

{{-- START CONTATOR --}}
<div class="contador">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <span class="fs-1 fw-bold">482</span>
                <p class="fs-6">CLIENTES ATENDIDOS</p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <span class="fs-1 fw-bold">29</span>
                <p class="fs-6">ANOS DE MERCADO</p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <span class="fs-1 fw-bold">1.890.20</span>
                <p class="fs-6">LINHAS DE CÓDIGO E CONTADO</p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <span class="fs-1  fw-bold">10.268</span>
                <p class="fs-6">JOBS DESENVOLVIDOS</p>
            </div>
        </div>
    </div>
</div>
{{-- START CONTATOR --}}

{{-- START SERVICOS --}}
<div class="conteudo-marketing">
    <div class="container marketing" >

        <div class="row featurette">
            <div class="col-md-7 align-middle">
                <h2 class="featurette-heading fw-bold lh-1 align-middle">E-COMMERCE</h2>
                <p class="lead align-middle">Nós desenvolvemos sites que proporcionam a melhor experiência de usuários (UX Design) possível. Nossos sites são sensíveis, modernos e constuídos sobre códigos confiáveis, de fácil gestão, otimizados para o Google, navegação intuitiva e com desgin de alta qualidade. Tudo para assegurar os melhores resultados e o aumentado na geração de novos negócios</p>
            </div>
            <div class="col-md-5">
                <img src="img/E_COMMERCE.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="450" height="450">
            </div>
        </div>

        <hr class="featurette-divider" >

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-bold lh-1" >MARKETING DIGITAL</h2>
                <p class="lead" >Em campanhas especificas ou em estrátegias de crescimento de longo prazo, atraimos novos clientes para sua empresa. Utilizamos diversas ferramentas de marketing digita, incluindo a optimização orgânica do Search Engine (SEO), PPC (Link patrocinados), geração de leads, infográficos, blogging, Social Media Marketing, mensuração de resultados e muito mais.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/SOCIAL_MEDIA.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="450" height="450">
            </div>
        </div>

        <hr class="featurette-divider" >

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-bold lh-1" >FOTOGRAFIA E VÍDEO</h2>
                <p class="lead" >Aaaah! Onde tudo começou! As melhores fotografias e videos emocionam seus clientes e aumentam a chance de gerar vendas. Possuímos estrutura e vasto conhecimento na área, afinal, são mais de 20 anos de experência em fotografia e vídeos de produtos para as mais diversas finalidade como: Catálogos impressos e virtuais, mídias sociais, marketing digital, revistas, banner/sites entre outors</p>
            </div>
            <div class="col-md-5">
                <img src="img/PRODUCAO.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="450" height="450">
            </div>
        </div>

        <hr class="featurette-divider" >

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-bold lh-1" >BRANDING</h2>
                <p class="lead" >Desgin é uma maneira de pensar, uma filosofia, e levamos isso é sério. desenvolvemos uma estratégia de desgin centrado no ser humano, trabalhamos dentro de suas limitações e proporcionamos um produto acabado que supera as expectativas.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/MKT.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="450" height="450">
            </div>
        </div>

        <hr class="featurette-divider" >

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-bold lh-1" >DESGIN GRÁFICO</h2>
                <p class="lead" >Criação de catálogos, folders, embalagens, newsletter, anúncios, ilustrações. Nossa criatividade é um mundo de possíbilidades!<br/><br/>Nosso compentente time de designers oferece a você projetos diferenciados que unem estética e funcionalidade, resultando em materias repletos de criatividades. Mais valor para sua marca, mais sucesso para sua empresa.</p>
            </div>
            <div class="col-md-5">
                <img src="img/CATALOGO.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="" width="450" height="450">
            </div>
        </div>

    </div>
</div>
{{-- END SERVICOS --}}

{{-- START FORNECEDORES --}}
<section class="fornecedores" styxle="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="h2 fw-bolder">NOSSOS FORNECEDORES</h4>
            </div>       
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/spot.png" alt="Spot" class="img-fluid" style="width:100;margin:0 auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/asiaimport.png" alt="Asia Import" class="img-fluid" style="width:100;margin:0 auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/somarcas.png" alt="Só Marcas" class="img-fluid" style="width:100;margin:0 auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/bestgift.png" alt="Best Gift" class="img-fluid" style="width:100;margin:0 auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/xbz.png" alt="XBZ" class="img-fluid" style="width:100;margin:0 auto">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>    
            </div> 
        </div>
    </div>
</section>
{{-- START FORNECEDORES --}}



{{-- START NEWSLETTER --}}
<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-sm-6 col-xs-12 text-center">
                <img src="img/banner-news.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400px" height="400px">
            </div>
            <div class="col-12 col-md-6 col-sm-6 conteudo-newsletter text-center">
                <h4 class="h1 fw-bolder">NEWSLETTER</h4>
                <p>Assine nossa NewsLetter para receber<br/> promoções e novidades.</p>
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-sm-12">
                        <input type="text" class="form-control" placeholder="Seu Nome" aria-label="Seu Nome">
                    </div>
                    <div class="col-12 col-md-6 col-sm-12">
                        <input type="email" class="form-control" placeholder="Seu melhor E-mail" aria-label="Seu melhor E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12 text-right">
                        <br>
                        <button type="submit" class="btn btn-primary btn-padrao-site">ENVIAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END NEWSLETTER --}}
@endsection