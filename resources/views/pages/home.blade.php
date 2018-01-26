@extends('main')

@section('title', '| Home')

@section('content')
    <!-- slideComponent -->
    <section class="slideComponent">
        <div class="slideWrap">
            <div class="slideBlock" id="fullscreen">
                <div class="slider">
                    <!-- slide 1-->
                    <div class="slide" id="first">
                        <div class="slidecontent">
                          <div class="slideContainerText">  
                            <h1 class="slideHeader">Agilidade</h1>
                            <h2>para sua maior comodidade.</h2>
                            <div class="slideButton">
                                <a href="#">Orçamento</a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- slide 1-->
                    <!-- slide 2-->
                    <div class="slide" id="sec">
                        <div class="slidecontent">
                            <div class="slideContainerText slideResidencial">
                                <h1>Mudanças Residenciais</h1>
                                <h2>Tranquilidade para você e sua familia.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- slide 2-->

                    <!-- slide 3-->
                    <div class="slide" id="thirth">
                        <div class="slidecontent">
                            <div class="slideContainerText slideBens">
                                <h1>Seus bens em boas mãos</h1>
                                <h2>resposabilidade no servir, cuidamos dos seus bens como se fossem nossos.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- slide 3-->

                    <!-- slide 4-->
                    <div class="slide" id="four">
                        <div class="slidecontent">
                            <div class="slideContainerText slideProfissional">
                                <h1>Profissionais Treinados.</h1>
                                <h2>Contamos com equipe capacitada</h2>
                            </div>
                        </div>
                    </div>
                    <!-- slide 4-->

                    <!-- slide 5-->
                    <div class="slide" id="five">
                        <div class="slidecontent">
                            <div class="slideContainerText slideSuaHistoria">
                                <img class="logo-slide" src="./images/logo-frana-shadow.svg" alt="Logo Frana 26 anos">
                                <h2>Você faz parte dessa História.</h2>
                                <div class="slideButton">
                                    Nossa História
                                </div>
                            </div>
                        </div>
                    </div> <!-- slide 5-->
                </div>
            </div>
        </div>
    </section>
    <!-- slideComponent -->

    <!-- main -->
    <main>
        <section class="main">
            <div class="servicer">
                <!-- services .pageService => Mudanças Residencial-->
                <div class="pageService">
                    <div class="thumbnails">
                        <picture>
                            <img src="/images/slide2.jpg" alt="Mudanças Residênciais">
                        </picture>
                    </div>
                    <div class="description">
                        <h2>Mudanças Residencial</h2>
                        <p>
                            A Frana Mudanças oferece a melhor opção custo-benefício para sua mudança residencial.
                            <!--Sofisticados e modernos materiais de embalagem, equipe treinada e capacitada.-->
                            <!--48 anos de experiência em mudanças por todo o território nacional.-->
                        </p>
                    </div>
                </div>
                <!-- services .pageService => Mudanças Residencial-->

                <!-- services .pageService => Mudanças Comercial-->
                <div class="pageService">
                    <div class="thumbnails">
                        <picture>
                            <img src="/images/mudancasComeciais.jpg" alt="Mudanças Comercial">
                        </picture>
                    </div>
                    <div class="description">
                        <h2>Mudanças Comercial</h2>
                        <p>
                            A empresa realiza mudanças comerciais com mão-de-obra especializada.
                            <!--Conta no seu quadro de funcionários que terá \t\odo\ o cuidado necessário para o-->
                            <!--transporte de sua mudança comercial.-->
                        </p>
                    </div>
                </div>
                <!-- services .pageService => Mudanças Comercial-->

                <!-- services Frota Própria-->
                <div class="pageService">
                    <div class="thumbnails imaDesigner">
                        <picture>
                            <img src="/images/DSC_0357.jpg" alt="Frota Própria">
                        </picture>
                    </div>
                    <div class="description">
                        <h2>Frota Própria</h2>
                        <p>
                            Nossos veículos são revisados e fazemos manutenção periodicas .
                            <!--Contamos com caminhão baú e Kombi Carroceria.-->
                        </p>
                    </div>

                </div>
                <!-- services .pageService => Frota Própria-->

                <!-- services .pageService => Guarda Móveis -->
                <div class="pageService">

                    <div class="thumbnails">
                        <picture>
                            <img src="/images/boxUp.jpg" alt="Guarda Móveis">
                        </picture>
                    </div>

                    <div class="description">
                        <h2>Guarda Móveis</h2>
                        <p>
                            Precisa mudar, ou viajar não tem onde guardar seus móveis, temos a solução.
                            <!--pode te ajudar, guarda móveis(volumes) com segurança, e total confiança pelo tempo-->
                            <!--que você necessitar, temos o melhor serviço à sua disposição.-->
                        </p>
                    </div>

                    <span></span>
                </div>
                <!-- services .pageService => Guarda Móveis -->
            </div>
        </section>
    </main>
    <!-- .main -->

    <!-- serviceMkt -->
    <section class="serviceMkt">
        <div class="serviceMktRow">
            <div class="mktService">
                <div class="thumbnailsService">
                    <picture>
                        <img src="./images/24hours.svg" alt="Guarda Móveis">
                    </picture>
                    <h2>Atendimento</h2>
                    <p>Sábados, Domingo e Feriados</p>
                </div>
                <div class="descriptionService">

                </div>
                <!--<div class="divisor"></div>-->
            </div>
            <div class="mktService">
                <div class="thumbnailsLogo">
                    <div class="logo">
                        <img src="./images/frana-logo-26.svg" alt="Logo Frana 26 anos">
                    </div>
                    <h3>Você faz parte dessa história</h3>
                </div>
                {{--<div class="mktDescription">--}}
                    {{--<h3>Você faz parte dessa história</h3>--}}
                {{--</div>--}}
            </div>
        </div><!-- /mktService -->
    </section><!-- /serviceMkt -->

    <!-- testimonial -->
    <section class="testimonials-section">
        <div class="testimonials-wrapper">

            <div class="testimonials-content">
                <p>Há mais de 27 anos no mercado e atuando em todo o território nacional, a Frana Mudancas investe constantemente em seus serviços e busca profissionais que queiram se desenvolver e adquirir conhecimentos.</p>
                <div class="author">
                    {{--<img src="img/avatar-1.jpg" alt="Author image">--}}
                    <ul class="author-info">
                        <li>Alberto Nogueira</li>
                        {{--<li>CEO, AmberCreative</li>--}}
                    </ul>
                </div>
            </div>

            </ul> <!-- cd-testimonials -->

            <a href="#" class="cd-see-all">See all</a>
        </div> <!-- cd-testimonials-wrapper -->
    </section> <!-- cloienteOpi -->
        <!-- /testimonial -->

@endsection
