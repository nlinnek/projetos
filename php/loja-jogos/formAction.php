<!-- formAction.php -->
<?php
// Exibir erros (para depuração)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclui as classes
require 'jogo.php';
require 'midiaFisica.php';
require 'formaPagamento.php';
require 'boleto.php';
require 'cartaoCredito.php';
require 'compra.php';

// Criar a compra
$compra = new Compra();
$compra->setId(1);

// Adicionar jogos ao carrinho com base na seleção do usuário
if (isset($_POST['jogos'])) {
    foreach ($_POST['jogos'] as $jogoSelecionado) {
        switch ($jogoSelecionado) {
            case 'digital1':
                $jogo = new Jogo("Jogo Digital 1", 100);
                break;
            case 'digital2':
                $jogo = new Jogo("Jogo Digital 2", 150);
                break;
            case 'fisico1':
                $jogoFisico = new MidiaFisica("Jogo Físico 1", 200);
                $jogoFisico->setFrete(20);
                $jogo = $jogoFisico;
                break;
            default:
                echo "Jogo inválido selecionado.";
                exit;
        }
        $compra->addItem($jogo);
    }
} else {
    echo "Nenhum jogo selecionado.<br>";
    exit;
}

// Definir a forma de pagamento com base na seleção do usuário
if (isset($_POST['pagamento'])) {
    if ($_POST['pagamento'] == 'boleto') {
        $boleto = new Boleto();
        $boleto->setDiasParaExecucao(3);
        $compra->setPagamento($boleto);
    } elseif ($_POST['pagamento'] == 'cartao') {
        $cartao = new CartaoCredito();
        $cartao->setLimite(1000); // Define o limite do cartão
        $compra->setPagamento($cartao);
    } else {
        echo "Forma de pagamento inválida.<br>";
        exit;
    }
} else {
    echo "Nenhuma forma de pagamento selecionada.<br>";
    exit;
}

// Exibir o resumo da compra
$compra->mostrarCarrinho();
?>
