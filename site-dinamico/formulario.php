<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>

        <div class="row">
            <div class="col-sm-3">
                One of three columns
            </div>
            <div class="col-sm-9">
                <form action="home.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuário</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite aqui seu e-mail">
                        <small id="emailHelp" class="form-text text-muted">Não vamos compartilhar seu e-mail xom ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                    </div>
                    <div class="form-check">
                        <input name="aceito" value="sim" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Li e concordo com os termos de uso.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </div>
</body>
</html>