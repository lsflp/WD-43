<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion! 
            Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>

    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h2>Sua compra</h2>
            </div>
            <div class="panel-body">
                <img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" alt="Imagem do produto" class="img-thumbnail img-responsive">
                <dl>
                    <dt>Produto</dt>
                    <dd><?= $_POST['nome'] ?></dd>

                    <dt>Preço</dt>
                    <dd><?= $_POST['preco'] ?></dd>

                    <dt>Cor</dt>
                    <dd><?= $_POST['cor'] ?></dd>

                    <dt>Tamanho</dt>
                    <dd><?= $_POST['tamanho'] ?></dd>
                    
                    <dt>Preço</dt>
                    <dd id="preco">R$ <?= $_POST["preco"] ?></dd>
                </dl>
            </div>

            <div class="form-group">
                <label for="qt">Quantidade</label>
                <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <output for="qt preco" id="total" class="form-control">
                    <?= $_POST["preco"] ?>
                </output>
            </div>
        </div>

        <form action="">
            <fieldset>
                <legend>Dados pessoais</legend>

                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="form-control" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="email@exemplo.com">
                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" data-mask="999.999.999-99" class="form-control" placeholder="000.000.000-00">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="spam" value="sim" checked>
                        Quero receber spam da Mirror Fashion
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Cartão de crédito</legend>

                <div class="form-group">
                    <label for="numero-cartao">Número - CVV</label>
                    <input type="text" class="form-control" id="numero-cartao" data-mask="9999 9999 9999 9999 - 999" name="numero-cartao">
                </div>

                <div class="form-group">
                    <label for="bandeira-cartao">Bandeira</label>
                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                        <option value="master">MasterCard</option>
                        <option value="visa">VISA</option>
                        <option value="amex">American Express</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="validade-cartao">Validade</label>
                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary btn-lg pull-right">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                Confirmar Pedido
            </button>
        </form>
    </div>

    <script src="js/total.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/inputmask-plugin.js"></script>
</body>
</html>