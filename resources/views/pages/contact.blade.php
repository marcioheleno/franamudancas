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

<h1>Contact</h1>
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
            <img src="/images/frana-logo-26anos.svg" alt="Logo Frana 26 anos">
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
