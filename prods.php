<div class="card-deck w-100">

    <?php
    //session_start();

    include 'condb.php';

    if (isset($_POST["add"])) {
        if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], "product_id");
            if (!in_array($_GET["id"], $item_array_id)) {
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            } else {
                echo '<script>alert("Produto adicionado ao carrinho.")</script>';
                //echo '<script>window.location="index.php"</script>';
            }
        } else {
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["cart"] as $keys => $value) {
                if ($value["product_id"] == $_GET["id"]) {
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Produto removido...!")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
    ?>


    <?php
    $query = "SELECT * FROM produtos ORDER BY idProd ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

    ?>
            <div class="col">

                <form method="post" action="index.php?action=add&id=<?php echo $row["IdProd"]; ?>">

                    <div class="card">

                        <img src="img/<?php echo $row['imagem']; ?>" class="card-img-top img-prod">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nomeProd"]; ?></h5>
                            <p class="card-text"><?php echo $row["descProd"]; ?></p>
                            <p class="card-text">R$ <?php echo $row["precoProd"]; ?></p>
                            <label for="quantity">Escolha a quantidade desejada:</label>
                            <input type="text" name="quantity" class="form-control" value="1">
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["nomeProd"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["precoProd"]; ?>">
                            <input type="submit" name="add" class="btn btn-block btn-primary" value="Adicionar ao Carrinho">
                        </div>

                    </div>
                </form>
            </div>
    <?php
        }
    }
    ?>

</div>