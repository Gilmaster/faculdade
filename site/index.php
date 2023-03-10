<?php
    // require_once("controller.php");
    include('head.php');
    include('footer.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Net - Inicio</title>
    <!-- Google Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Biblioteca do Bootstrap -->
    <!-- fontes CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Fontes JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fontes de Icones -->
    <script src="https://kit.fontawesome.com/416c69e799.js" crossorigin="anonymous"></script>

    <!-- Fontes Progressbar -->
    <script src="js/progressbar.min.js"></script>

    <!-- Fontes Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
<?php echo $head;?>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/anding.jpg" class="d-block w-100" alt="Projeto PlayNet">
                        <div class="carousel-caption d-md-block">
                            <h2>Os melhores equipamentos em Telecomunica????o</h2>
                            <p>Trabalhamos, com oque a de mais modernos no mercado!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/i366676.jpeg" class="d-block w-100" alt="PlayNet Equipamentos">
                        <div class="carousel-caption d-md-block">
                            <h2>Roteadores de auto desempenho</h2>
                            <p>Trabalhamos, com oque a de mais modernos no mercado!</p>
                            <a href="goods.html" class="main-btn">Ver Equipamentos</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/baner.png" class="d-block w-100" alt="PlayNet Tecnologia">
                        <div class="carousel-caption d-md-block">
                            <h2>A melhor esperiencia para se conectar</h2>
                            <p>Trabalhamos, com oque a de mais modernos no mercado!</p>
                            <a href="contact.html" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                    <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-preve-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="prev">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Play Net</h3>
                        </div>
                        <div class="col-md-6">
                                <img class="img-fluid" src="img/AdobeStock.jpeg" alt="Agencia PlayNet">
                        </div>
                        <div class="col-md-3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                Facere porro quisquam exercitationem illo corporis corrupti culpa optio! Culpa corrupti, <br>
                                harum saepe neque magni beatae temporibus quis quas, aperiam repellendus amet.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="about-title">Veja nossos produtos:</h3>
                            <ul id="about-list">
                                <li><i class="fa-solid fa-wifi"></i> Seguro</li>
                                <li><i class="fa-solid fa-wifi"></i> F??cil de utiliza????o</li>
                                <li><i class="fa-solid fa-wifi"></i> Recursos detalhados</li>
                                <li><i class="fa-solid fa-wifi"></i> Alta performance</li>
                                <li><i class="fa-solid fa-wifi"></i> Monitoramento remotos</li>
                                <li><i class="fa-solid fa-wifi"></i> Adequado para v??rios setores</li>
                                <li><i class="fa-solid fa-wifi"></i> Flex??vel</li>
                                <li><i class="fa-solid fa-wifi"></i> M??ltiplas op????es de VPN</li>
                                <li><i class="fa-solid fa-wifi"></i> Compacto e leve</li>
                                <li><i class="fa-solid fa-wifi"></i> Protocolos de criptografia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $footer;?>
    </main>
    <script src="js/script.js"></script>
</body>
</html>