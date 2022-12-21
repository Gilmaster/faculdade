<?php
    // require_once("controller.php");
    include('head.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Net - Contato</title>
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
            <div id="about-area-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12" id="area-contact">
                            <h3 class="main-title">Sobre a Play Net</h3>
                        </div>
                        <div class="col-md-4" id="area-contact-img">
                                <img class="img-fluid" src="img/AdobeStock.jpeg" alt="Agencia PlayNet">
                        </div>
                        <div class="col-md-4" id="area-contact-img">
                            <img class="img-fluid" src="img/baner.png" alt="Agencia PlayNet">
                        </div>
                        <div class="col-md-4" id="area-contact-img">
                            <img class="img-fluid" src="img/anding.jpg" alt="Agencia PlayNet">
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <h3 class="about-title-contact">Quem Somos</h3>
                            <p>Líderes mundiais em fornecimento de produtos de rede SOHO e SMB,<br>
                                oferecendo soluções inovadoras e premiadas ao mercado. Como provedora número 1 de produtos WLAN,<br>
                                atendendo dezenas de milhares de consumidores ao redor do mundo.<br>
                            </p>
                            <p><b>Centro de Serviço:</b></p>
                            <ul id="about-list-contact">
                                <li><i class="fa-solid fa-headset"></i> (31) 400 -xxxx (Capitais e regiões metropolitanas)</li>
                                <li><i class="fa-solid fa-headset"></i> 0800-608-xxxx (Demais localidades)</li>
                                <li><i class="fa-solid fa-headset"></i> (11) 2222-xxxx (SP)</li>
                                <li><i class="fa-solid fa-headset"></i> (21) 3180-xxxx (RJ)</li>
                                <li><i class="fa-solid fa-headset"></i> (31) 3270-xxxx (MG)</li>
                                <li><i class="fa-solid fa-envelope"></i> Email: playnet@net.com.br</li>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <form action="#" id="form-request">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="main-sub-title">Enveie sua duvida ou solicitação</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="floatingInput">Nome Completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome e Sobrenome">
                                <span class='msg-erro msg-nome'></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="floatingInput">Endereço de e-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                <span class='msg-erro msg-email'></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Telefone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="00-00000-0000" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}">
                                <span class='msg-erro msg-phone'></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="floatingInput">Descrição da sua solicitação ou duvida</label>
                                <textarea class="form-control" id="textarea" placeholder="Digite aqui as informações" rows="3"></textarea>
                                <span class='msg-erro msg-textarea'></span>
                            </div>
                        </div>
                        <div id="submit-btn" class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" id="btn-submit" onclick="validateForm()">Enviar solicitação</button>
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <div id="about-area">
                    <div class="container" id="about-area">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="main-sub-title">PlayNet</h5>
                            </div>
                            <div class="col-md-4 service-box" id="footer-icon">
                                <a href="index.html">
                                    <i class="fa-solid fa-mattress-pillow"></i>
                                    <h4>Inicio</h4>
                                </a>
                                <p>Play Net<br>
                                    soluções Tecnologicas de<br>
                                    Telecomunicação
                                </p>
                            </div>
                            <div class="col-md-4 service-box" id="footer-icon">
                                <a href="goods.html">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                    <h4>Produtos</h4>
                                    </a>
                                <p>Roteadores de tecnologias de conectividade para pessoas,<br>
                                    infraestrutura dos setores do mercado.
                                </p>
                            </div>
                            <div class="col-md-4 service-box" id="footer-icon">
                                <a href="shopping.html">
                                    <i class="fa-solid fa-truck"></i>
                                    <h4>Carrinho</h4>
                                </a>
                                <p>Visualise e finalize<br>
                                    sus pedidos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <script src="js/scripts.js"></script>
</body>
</html>