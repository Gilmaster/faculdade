<?php
    $conexao = mysqli_connect("localhost", "root", "");

    mysqli_select_db($conexao, "ecomerce");

    $produtos = "SELECT * FROM produtos";

    $lista_produtos = mysqli_query($conexao, $produtos);
?>