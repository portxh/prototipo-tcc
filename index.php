<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO - Doces e Bolos</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS Local -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <?php

        include_once 'nav.php';

        ?>
    </header>

    <main>

        <?php

        include 'signup-modal.php';
        include 'signin-modal.php';

        ?>

        <!-- Seção Inicial -->
        <div id="inicio" class="vh-100 inicio ">

            <?php

            include 'banner.php';

            ?>

            <!-- Texto de Chamada -->

            <div class="chamada">
                <h1>S.M.O. Confeitaria</h1>
                <p>Proporcionando à você, o lado doce da vida.</p>
            </div>
        </div>

        <!-- Seção de Promoções -->
        <div id="ofertas" class="ofertas min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Ofertas da Semana</h1>

                <div class="d-flex flex-wrap">

                    <?php

                    //include 'cardOfertas.php';
                    include 'prods.php';
                    include 'cart.php';

                    ?>

                </div>
            </div>
        </div>

        <!-- Secao de Produtos -->
        <div id="loja" class="loja min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Catalogo</h1>

                <div class="d-flex flex-wrap">

                    <div class="col">


                        <?php

                        //include 'cardProd.php';
                        include 'prods.php';
                        include 'cart.php';

                        ?>


                    </div>    

                </div>

            </div>
        </div>

    </main>

    <!-- JQuery, JS, Popper -->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>