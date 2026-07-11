<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Jogos</title>
</head>
<body>
    <h1>Loja de Jogos</h1>
    <form action="formAction.php" method="POST">
        <!-- Seleção de jogos -->
        <h2>Escolha seus jogos</h2>
        <div>
            <label>
                <input type="checkbox" name="jogos[]" value="digital1">
                Jogo Digital 1 - R$100,00
            </label><br>
            <label>
                <input type="checkbox" name="jogos[]" value="digital2">
                Jogo Digital 2 - R$150,00
            </label><br>
            <label>
                <input type="checkbox" name="jogos[]" value="fisico1">
                Jogo Físico 1 - R$200,00 + Frete R$20,00
            </label>
        </div>

        <!-- Forma de pagamento -->
        <h2>Escolha a forma de pagamento</h2>
        <label>
            <input type="radio" name="pagamento" value="boleto" required>
            Boleto (3 dias para execução)
        </label><br>
        <label>
            <input type="radio" name="pagamento" value="cartao" required>
            Cartão de Crédito
        </label>

        <!-- Submeter -->
        <br><br>
        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>
