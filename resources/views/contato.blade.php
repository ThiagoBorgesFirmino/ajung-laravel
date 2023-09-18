@extends('layouts.main')

@section('title', 'Página de contato')

@section('content')

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.5520370087775!2d-46.70628742498842!3d-23.6562085787348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5051900d7357%3A0xa4ab0214aef295fb!2sR.%20Pereira%20Barreto%2C%20174%20-%20Santo%20Amaro%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004744-010!5e0!3m2!1spt-BR!2sbr!4v1691021291855!5m2!1spt-BR!2sbr"  height="450" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="container container-contato">
                <div class="row">
                    <div class="col-6 col-sm-12 col-md-6 conteudo-contato">
                        <h1>A.Jung Soluções corporativas LTDA.</h1>
                        <table>
                            <tr>
                                <td style="vertical-align: top"><i class="fa-regular fa-clock"></i></td>
                                <td>
                                    <p> Horario de atendimento: Seg. à Sex. das 8:00 as 18:00</p>
                                </td>
                            </tr> 
                            <tr>
                                <td style="vertical-align: top"><i class="fa-solid fa-location-dot"></i></td>
                                <td>
                                    <p> Rua Pereira Barreto, Nº 174 <br/>Bairro: Santo Amaro<br/> São Paulo - SP<br/> CEP: 04744-010</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top"><i class="fa-regular fa-envelope"></i></td>
                                <td>
                                    <a href="mailto:ajung@ajung.com.br" title="ajung@ajung.com.br"> ajung@ajung.com.br</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top"><i class="fa-solid fa-phone"></i></td>
                                <td>
                                    <a href="tel:+551155488755"> (11) 5548-8755</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top"><i class="fa-brands fa-whatsapp"></i></td>
                                <td>
                                    <a href="https://wa.me/"> (11) 99999-9999</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 conteudo-contato">
                        <h2>Entre em contato conosco.</h2>
                        <form action="" class="form-contato">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-sm-12 col-12">
                                    <input type="text" placeholder="Digite seu nome" class="form-group"> 
                                </div>
                                <div class="mb-3 col-md-6 col-sm-12 col-12">
                                    <input type="text" placeholder="Digite seu melhor e-mail"class="form-group">
                                </div>
                                <div class="mb-3 col-md-12 col-sm-12 col-12">
                                    <textarea name="" id="" rows="6" placeholder="Digite sua mensagem" class="form-group textarea"></textarea>
                                    <input type="button" value="Enviar" class="btn-padrao-site btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
@endsection