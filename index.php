<?php
include "session.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="styles/home.css" rel="stylesheet"><!--index!-->
    <link rel="stylesheet" href="styles/home2.css">
    
    <script src="scripts/carrosel.js" defer></script>
    <title>Home</title>
</head>
<body>
    <header>
        <div id="titulo">
            <h1>Petsty</h1>
        </div>

        <form>
            <input type="text" placeholder="O que seu pet precisa?">
        </form>

        <ul>
            <li><a href="servico.html">Serviços</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="contato.html">Contato</a></li>

            <?php
            if ($email != "") {
                echo "<li><a href='nome.html'><p><strong>Olá,</p>".$_SESSION['nome_session']."</strong></a></li>";
                echo '<li><a href="logout.php" id="inscreva-se-btn">Sair</a></li>';
            }else {
                echo '<li><a href="ja_tem_conta.php" id="inscreva-se-btn">Entrar</a></li>';
            }

            ?>

        </ul>

    </header>

    <h1 class="display-2">Promoções em Destaque</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="components/imagens/banner2.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="components/imagens/banner1.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="components/imagens/banner3.png" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>


    <section class="services">
    <h1 class="display-2">Nossos Serviços</h1>

        <div class="servico">
            <div class="servico__descricao">
                <h5 class="servico__titulo">Clínica Veterinária</h5>
                <p>Seu pet merece cuidados de saúde com carinho e profissionalismo. Nossa equipe veterinária está pronta para garantir o bem-estar do seu amigo de quatro patas.</p>
            </div>
            <img class="servico__imagem" src="components/imagens/icon_veterinario_edit.png" alt="serviço veterinário">
        </div>

        <div class="servico">
            <img class="servico__imagem" src="components/imagens/icon_banho_tosa_edit.png" alt="serviço de banho e tosa">
            <div class="servico__descricao">
                <h5 class="servico__titulo">Banho e Tosa</h5>
                <p>Deixe seu pet ainda mais charmoso e cheiroso! Com produtos de qualidade e técnicas especializadas, oferecemos um banho e tosa que eles vão adorar.</p>
            </div>
        </div>

        <div class="servico">
            <div class="servico__descricao">
                <h5 class="servico__titulo">Adoção</h5>
                <p>Dê um lar cheio de amor! Conheça nossos peludinhos disponíveis para adoção e encontre o companheiro perfeito para sua família.</p>
            </div>
            <img class="servico__imagem" src="components/imagens/icon_adocao_edit.png" alt="serviço de adoção">
        </div>

        <div class="servico">
            <img class="servico__imagem" src="components/imagens/icon_passeio.png" alt="serviço de passeio de cães">
            <div class="servico__descricao">
                <h5 class="servico__titulo">Passeio de Cães</h5>
                <p>Para cães cheios de energia, oferecemos passeios divertidos e seguros. Seu pet vai se exercitar e socializar enquanto você cuida da sua rotina.</p>
            </div>
        </div>
    </section>


    <section class="about">
        <h1 class="display-2">Sobre nós</h1>
        <div class="about-content">
            <div class="about-text">
                <p>Na Petsty, acreditamos que os pets são mais do que animais de estimação – são parte da família. Por isso, dedicamos todo o nosso carinho e expertise para oferecer os melhores serviços e produtos, garantindo o bem-estar e a felicidade do seu companheiro de quatro patas.</p>
                <p class="mb-0">Com uma equipe de profissionais apaixonados por animais, estamos prontos para cuidar do seu pet com atenção, desde consultas veterinárias e banho e tosa até passeios divertidos e orientações para adoção responsável. Nosso espaço foi pensado para proporcionar conforto e segurança, enquanto nossos produtos são selecionados com rigor para atender às necessidades de cada pet.</p>
            </div>
            <div class="about-image">
                <img src="components/imagens/sobre_nos_icon.jpg" alt="imagem sobre nós">
            </div>
        </div>
    </section>


    <footer class="footer">
        <h1 class="display-2">Contato</h1>
        <img src="components/imagens/contato_edit2.jpg" alt="Contato">
        <p><strong>Entre em contato conosco!</strong></p>
        <div class="whatsapp">
            <img src="components/imagens/icon_whatsapp.png" alt="WhatsApp"> 
            <a href="https://wa.me/5511999999999" target="_blank">+55 11 99999-9999</a>
        </div>
        <div class="email">
                <img src="components/imagens//icon_gmail.png" alt="E-mail">
                <a href="mailto:petsty@gmail.com">petsty@gmail.com</a>
        </div>
    </footer>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>