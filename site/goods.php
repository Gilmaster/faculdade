<?php
    require_once("controller.php");
    include('head.php');
    include('footer.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Net - Produtos</title>
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
            <div id="about-area-goods">
                <div class="row" id="row-area-goods-title">
                    <div class="col-12">
                        <h3 class="main-title">Nossos Serviços e Produtos</h3>
                    </div>
                </div>
                <div class="container" id="container-area-goods">
                    <?php foreach ($lista_produtos as $lista_produtos):?>
                        <div class="row" id="row-area-goods">
                        <div class="col-md-4">
                            <img class="img-fluid" src="<?php echo $lista_produtos['imagem'] ?>" alt="PlayNet">
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                            <h4>ROTEADOR WS318N SEM FIO 2ANT BC HUAWEI</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Magni aliquid, vel recusandae voluptatibus eveniet optio eum ipsa atque veritatis voluptatum adipisci neque nihil, <br>
                                quisquam voluptas deleniti et placeat quasi laborum!
                            </p>
                        </div>
                        <div class="col-md-2">
                            <div id="action-button"><button type="button" class="btn btn-success">Comprar!</button></div>
                            <div id="action-button"><button type="button" class="btn btn-primary">+Carrinho</button></div>
                        </div>
                    </div>
                    <br><br>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <?php echo $footer;?>
    </main>
    <script src="js/scripts.js"></script>
</body>
</html>