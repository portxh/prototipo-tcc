<!-- Formulário de produtos 
<form method="post" action="adicionar_carrinho.php">
    <input type="hidden" name="produto_id" value="1">
    <input type="text" name="produto_nome" value="Camiseta">
    <input type="text" name="produto_preco" value="29.90">
    <input type="submit" name="adicionar" value="Adicionar ao carrinho">
</form>
-->
<div class="card-deck">
    <?php

    include 'condb.php';

    // Obtendo os produtos do banco de dados
    $resultado = mysqli_query($con, "SELECT * FROM produtos");


    // Exibindo os produtos na vitrine
    while ($array = mysqli_fetch_assoc($resultado)) {

        $img = $array["imagem"];
        $nome = $array["nomeProd"];
        $desc = $array["descProd"];
        $valor = number_format($array["precoProd"], 2, ',', '.');

    ?>

        <div class="card w-100">
            <div class="card-header bg-white">
                <img src="img/<?php echo $img?>" class="card-img-top img-prod">
            </div>
            <div class="card-body">
                <h2 class="card-title"><?php echo $nome ?></h2>
                <p class="card-text"><?php echo $desc ?></p>
                <p class="card-text">R$ <?php echo $valor ?></p>
                
                <?php
                echo '<a class="btn btn-outline-primary" href="carrinho.php?add=carrinho&id=' . $array['idProd'] . '">Adicionar ao carrinho</a>';
                
                ?>

            </div>

        </div>

    <?php
    }
    ?>
</div>