<!DOCTYPE html>
<?php
require_once '../Model/Pagamento.php';
require_once '../Controller/ControllerPagamento.php';
require_once '../Controller/ControllerCliente.php';
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script src="../script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script>
            //     function buscarCliente(){
            //         var nomeCliente = document.getElementById("nomeCliente").value;
            //         <?php
//         $nomeCpfCliente = "Eu";
//         Controller::criarObjetosJS("clientes", ControllerCliente::buscarCliente($nomeCpfCliente));
//         
?>
            //     }
        </script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../index.php">Home</a>
            <a href="ClientePage.php">Cliente</a>
            <a href="PagamentoPage.php">Pagamento</a>
        </div>
        <span class="spanMenu" onclick="openNav()">&#9776; Pagamento</span>
        <div class="menuCentral" id="menuu">
            <form>
                <input class="inputSearch" type="text" name="search" placeholder="Perquisar">

                <div class="container">
                    <!-- Trigger the modal with a button -->
                    <img class="imgPlus" src="../img/plus.png" alt="Efetuar um Pagamento" title="Efetuar um Pagamento" data-toggle="modal" data-target="#modalCadastroPagamento">

                </div>
                <table id="customers">
                    <tr>
                        <th>Cliente</th>
                        <th>Estacionamento</th>
                        <th>Quarto</th>
                        <th>Serviços</th>
                        <th>Subtotal</th>
                        <th>Gerenciamento</th>
                    </tr>
                    <?php
                    $pagamentos = ControllerPagamento::getPagamentos();
                    $conexao = new ConectaBanco();

                    foreach ($pagamentos as $pagamento) {
                        $nomeCliente = $conexao->dataQuery("select nomeCliente from tbcliente where codcliente = " . $pagamento->getCodCliente())[0];

                        echo('<tr>');
                        echo('<td>' . $nomeCliente . '</td>');
                        echo('<td><img src="../img/editar.png" title="Editar Pagamento ' . $nomeCliente . '" alt="Editar Pagamento ' . $nomeCliente . '" style="margin-right:30px;" " id="' . $pagamento->getCodPagamento() . '">');
                        echo('<img src="../img/apagar.png" title="Apagar Pagamento ' . $nomeCliente . '" alt="Apagar Pagamento ' . $nomeCliente . '"></td>');
                        echo('<tr>');
                    }
                    ?>
                </table>
            </form>
        </div>
    </body>
</html> 

<!-- Modal Cadastro Pagamento -->
<div class="modal fade" id="modalCadastroPagamento" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Efetuar Pagamento</h4>
            </div>
            <div class="modal-body">
                <form action="../POST/POSTPagamento.php" method="POST">
                    <input type="hidden" id="cod" name="cod" value="0" required>

                    <label for="nomeCliente">Nome do Cliente</label>
                    <input type="text" id="nomeCliente" name="nomeCliente" placeholder="Nome do Cliente" onkeydown="buscarCliente()" required>

                    <div class="dropdown-content">
                    </div>

                    <label for="estacionamento">Preço total de Estacionamento</label>
                    <input type="text" id="estacionamento" name="estacionamento" placeholder="R$0,00" readonly="true">

                    <label for="quarto">Preço total da Reserva</label>
                    <input type="text" id="quarto" name="quarto" placeholder="R$0,00" readonly="true">

                    <label for="servico">Preço total dos Serviços</label>
                    <input type="text" id="servico" name="servico" placeholder="R$0,00" readonly="true">

                    <label for="subtotal">Subtotal</label>
                    <input type="text" id="subtotal" name="subtotal" placeholder="R$0,00" readonly="true">

                    <h2>Dados do Cartão</h2>
                    <br>
                    <br>
                    <label for="nomeCartao">Nome do Cartão</label>
                    <input type="text" id="nomeCartao" name="nomeCartao" placeholder="Nome do Cliente do cartão">

                    <label for="numCartao">Número do Cartão</label>
                    <input type="text" id="numCartao" name="numCartao" placeholder="Número do cartão">

                    <label for="numSeguranca">Número de Segurança</label>
                    <input type="text" id="numSeguranca" name="numSeguranca" placeholder="Número de Segurança do Cartão">

                    <label for="dataVencimento">Data de Vencimento</label>
                    <input type="text" id="dataVencimento" name="dataVencimento" placeholder="Data de Vencimento do cartão dd/mm/aaaa">

                    <input type="submit" value="Efetuar Pagamento">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>