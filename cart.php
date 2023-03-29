<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Carrinho de Compras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome do Produto</th>
                                <th>Quantidade</th>
                                <th>Valor Unitário</th>
                                <th>Valor Total</th>
                                <th>Remover Item</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            if (!empty($_SESSION["cart"])) {
                                $total = 0;
                                foreach ($_SESSION["cart"] as $key => $value) {
                            ?>
                                    <tr>
                                        <td><?php echo $value["item_name"]; ?></td>
                                        <td><?php echo $value["item_quantity"]; ?></td>
                                        <td>R$ <?php echo $value["product_price"]; ?></td>
                                        <td>
                                            R$ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                                        <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg></a></td>

                                    </tr>
                                <?php
                                    $total = $total + ($value["item_quantity"] * $value["product_price"]);
                                }
                                ?>
                                <tr>
                                    <td colspan="3" align="right">Total</td>
                                    <th align="right">R$ <?php echo number_format($total, 2); ?></th>
                                    <td></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Continuar Comprando</button>
                <a href="<?php echo 'https://wa.me/5511961605110?text=Gostaria%20de%20finalizar%20minha%20compra.%20Meu%20pedido%20ficou%20assim: ' . $value["item_name"] . ' na quantidade: ' . $value["item_quantity"] . ' totalizando o valor de: R$' . $total . '.'; ?>" class="btn btn-primary">Finalizar Pedido</a>
            </div>
        </div>
    </div>
</div>