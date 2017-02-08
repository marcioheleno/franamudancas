<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frana Mudanças @yield('title')</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- HeaderMenu-->
    <header>
        <div class="container">
            <div class="headerLogo">
                <h1 class="logo" id="logo"><a href="index.html">FRANA</a></h1>
                <p>Mudanças e Transportes</p>
            </div> <!-- ./headerLogo -->
            <nav>
                <div class="navContainer">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li>
                            <a href="#" class="dropbtn">Serviço</a>
                            <div class="menuServicos" id="menuServicos">
                                <a href="#">Mudanças Residencial</a>
                                <a href="#">Mudanças Comercial</a>
                                <a href="#">Remoção Interna</a>
                                <a href="#">Montgem e Des. de Móveis</a>
                                <a href="#">Embalagens</a>
                                <a href="#">Guarda Movéis</a>
                                <a href="#">Içamento</a>
                                <a href="#">Transporte de Cargas em Geral</a>
                            </div>
                        </li>
                        <li><a href="#">Orçamento</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                    <div class="menuRedeSocial">
                        <div class="iconRedes">
                            <a href="#" class="instagram">Instagram</a>
                            <a href="#" class="facebook">Facebook</a>
                            <a href="#" class="twitter">Twitter</a>
                            <a href="#" class="whatsapp">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </nav> <!-- nav -->
        </div>
        <div class="triggerMenu" id="triggerMenu">
            <i class=""><a href="#">TriggerMenu</a></i>
        </div>
    </header>
    <!-- HeaderMenu-->

    <!-- slideComponent -->
    <section class="slideComponent">
        <div class="slideWrap">
            <div class="slideBlock" id="fullscreen">
                <div class="slider">
                    <!-- slide 1-->
                    <div class="slide" id="first">
                        <div class="slidecontent">
                            <h1 class="slideHeader">Agilidade</h1>
                            <h2>para sua maior comodidade.</h2>
                            <div class="slideButton">
                                <a href="#">Orçamento</a>
                            </div>
                        </div>
                    </div>
                    <!-- slide 1-->
                    <!-- slide 2-->
                    <div class="slide" id="sec">
                        <div class="slidecontent">
                            <h1>Mudanças Residenciais</h1>
                            <h2>Tranquilidade para você e sua familia.</h2>
                        </div>
                    </div>
                    <!-- slide 2-->

                    <!-- slide 3-->
                    <div class="slide" id="thirth">
                        <div class="slidecontent">
                            <h1>Seus bens em boas mãos</h1>
                            <h2>resposabilidade no servir, cuidamos dos seus bens como se fossem nossos.</h2>
                        </div>
                    </div>
                    <!-- slide 3-->

                    <!-- slide 4-->
                    <div class="slide" id="four">
                        <div class="slidecontent">
                            <h1>Profissionais Treinados.</h1>
                            <h2>Contamos com equipe capacitada</h2>
                        </div>
                    </div>
                    <!-- slide 4-->

                    <!-- slide 5-->
                    <div class="slide" id="five">
                        <div class="slidecontent">
                            <img class="logo-slide" src="./images/frana-logo-26anos.svg" alt="Logo Frana 26 anos">
                            <h2>Você faz parte dessa História.</h2>
                            <div class="slideButton">
                                Nossa História
                            </div>
                        </div>
                    </div>
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
                            A empresa realiza mudanças comerciais com mão-de-obra especializada e qualificada.
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
                            Nossos veículos são revisados e fazemos manutenção periodicas.
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
                </div>
                <div class="descriptionService">
                    <h2>Atendimento</h2>
                    <p>Sábados, Domingo e Feriados</p>
                </div>
                <!--<div class="divisor"></div>-->
            </div>
            <div class="mktService">
                <div class="thumbnailsLogo">
                    <div class="logo">
                        <img src="./images/frana-logo-26anos.svg" alt="Logo Frana 26 anos">
                    </div>
                </div>
                <div class="mktDescription">
                    <h3>Você faz parte dessa história</h3>
                </div>
            </div>
        </div><!-- /mktService -->
    </section><!-- /serviceMkt -->

    <!-- testimonial -->
    <section class="testimonials-section">
        <div class="testimonials-wrapper">

            <div class="testimonials-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="author">
                    {{--<img src="img/avatar-1.jpg" alt="Author image">--}}
                    <ul class="author-info">
                        <li>MyName</li>
                        <li>CEO, AmberCreative</li>
                    </ul>
                </div>
            </div>

            {{--<li>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
            {{--<div class="author">--}}
            {{--<img src="img/avatar-1.jpg" alt="Author image">--}}
            {{--<ul class="author-info">--}}
            {{--<li>MyName</li>--}}
            {{--<li>CEO, AmberCreative</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}

            {{--<li>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
            {{--<div class="author">--}}
            {{--<img src="img/avatar-1.jpg" alt="Author image">--}}
            {{--<ul class="author-info">--}}
            {{--<li>MyName</li>--}}
            {{--<li>CEO, AmberCreative</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}
            </ul> <!-- cd-testimonials -->

            <a href="#" class="cd-see-all">See all</a>
        </div> <!-- cd-testimonials-wrapper -->
    </section> <!-- cloienteOpi -->
    <!-- /testimonial -->

    <!-- footer -->
    <footer>
        <div class="footerContainer">
            <div class="footerMenu">
                <h2>Acesso Rapido</h2>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Orçamento</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <!--footerSocial-->
            <div class="footerContato">
                <h2>Contato:</h2>
                <div class="fones">
                    <span>(85) 3290.1204</span>
                    <span>(85) 3290.3578</span>
                    <span>(85) 98840.1204</span>
                    <span>(85) 99969.9051</span>
                </div>
                <h2>Email:</h2>
                <div class="email">
                    <p>franamudancas@gmail.com</p>
                    <p>contato@franamudancas.com.br</p>
                </div>
                <!-- fones -->
                <div class="enderecos">
                    <h3>Endereço:</h3>
                    <address>
                        <p>
                            Rua Goiânia, 1356 - Henrique Jorge - Fortaleza-CE | Cep: 60510-100
                        </p>
                    </address>
                </div><!--enderecos-->
            </div>
            <!--formasDePagamento-->
            <div class="formasDePagamentos">
                <h2>Formas de Pagamento</h2>
                <div class="iconCard">
                    <a href="#">MasterCard</a>
                    <a href="#">VisaCard</a>
                    <a href="#">DinnerCard</a>
                    <a href="#">HiperCard</a>
                </div>
            </div>
            <!--formasDePagamento-->
            <!--footerSocial -->
            <div class="footerSocial">
                <h2>Redes Social</h2>
                <div class="iconRedes">
                    <a href="#" class="instagram">Instagram</a>
                    <a href="#" class="facebook">Facebook</a>
                    <a href="#" class="twitter">Twitter</a>
                    <a href="#" class="whatsapp">Whatsapp</a>
                </div>
            </div>

            <div class="logo">
                <img src="/images/franaLogo_b.svg" alt="Logo Frana 26 anos">
                <p>© 2016 - Frana Mudanças - Direitos Reservados</p>
            </div><!--logo-->
        </div><!--footerContainer-->

        <div class="assi">
            www.marcioheleno.website
        </div>
    </footer>
    <!-- .footer -->

    <script src="/js/main.js"></script>
</body>
</html>
