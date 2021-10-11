<?php
session_start();

if ( isset( $_SESSION["username"] ) ) {
  $username = $_SESSION["username"];
  session_write_close();

} else {
    session_unset();
    session_write_close();
    $url = "./login.php";
    header("Location: $url");
}
?>
<!DOCTYPE html>
<html lang="PT_br">

<head>
    <title>Galeria | G7</title>

    <!--Search Engines-->
    <meta name="description" content="Conheça o G7">
    <!--Qual o nome da empresa?-->
    <link rel="nomeEmpresa" href="https://www.g7edu.com.br/">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Início | G7">
    <meta property="og:description" content="Conheça o G7">
    <meta property="og:url" content="https://www.g7edu.com.br/">
    <meta property="og:site_name" content="G7">
    <!-- Incluir a data de atualização
    <meta property="og:updated_time" content="2021-09-05T16:53:40-03:00">
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--View Port-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="assets/styles/global.css">
    <link rel="stylesheet" href="assets/styles/home.css">
    <link rel="stylesheet" href="assets/styles/gallery.css">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!--ICON-->
    <link rel="icon" href="assets/images/icon.svg">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" />

</head>

<body>
    <div class="content" id="outset">
        <header>
            <img src="assets/images/light-logo.svg" alt="G7 LOGO" class="logo">
            <nav role="navigation" class="nav" data-nav>
                <button aria-label="Abrir menu" class="btn-mobile" data-btn-mobile aria-haspopup="true"
                    aria-controls="menu" aria-expanded="false">Menu <span class="burger"></span></button>
                <ul role="menu" id="menu">
                    <li><a href="assets/index.html#outset" data-menu-item>INÍCIO</a></li>
                    <li><a href="assets/index.html#about" data-menu-item>QUEM SOMOS</a></li>
                    <li><a href="assets/index.html#network" data-menu-item>REDE</a></li>
                    <li><a href="assets/index.html#team" data-menu-item>EQUIPE</a></li>
                    <li><a href="assets/index.html#actions" data-menu-item>AÇÕES</a></li>
                    <li><a href="assets/gallery.html" data-menu-item class="current">GALERIA</a></li>
                    <li><a href="" data-menu-item>CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="anchor">
                    <a href="#" id="top-of-page" class="button" data-anchor></a>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-01.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-02.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-03.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-04.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-05.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-06.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="assets/images/gallery-g7-07.png" alt="">
                    </div>
                    <div class="label">
                        <p class="short-text">Lorem ipsum dolor sit amet.</p>
                        <p class="full-text">Quo molestiae incidunt ut dolores soluta non voluptas expedita ut velit incidunt quo enim quidem est velit debitis. Aut placeat commodi et inventore mollitia aut saepe perferendis quo neque vero qui placeat porro.</p>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="first-line">
                <div class="address">
                    <img src="assets/images/light-logo.svg" alt="G7 Logo">
                </div>
                <div class="social-media">
                    <a href="https://www.instagram.com/cegru.lab/" target="_blank" class="social-item"
                        id="instagram"></a>
                    <a href="https://www.linkedin.com/company/g7-rede-de-coopera%C3%A7%C3%A3o/" target="_blank" class="social-item"
                        id="linkedin"></a>
                    <a href="https://wa.me/5511945956773" target="_blank" class="social-item" id="whatsapp"></a>
                </div>
            </div>
            <div class="second-line">
                <p>Copyright © 2021 Design by <a>Luisa Camerini</a> Development by <a
                        href="https://github.com/natasha-m-oliveira">Natasha M Oliveira</a></p>
            </div>
        </footer>
    </div>
    <script src="assets/scripts/global.js"></script>
</body>

</html>