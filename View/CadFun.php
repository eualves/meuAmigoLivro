<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Funcionário</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
        <ul class="navigation">
            <li><a href="Index.php">Home</a></li>
            <li><a href="">Livros</a></li>
            <li><a href="">Revista</a></li>
            <li><a href="">Quadrinhos</a></li>
        </ul>
        <a href="CadFun.php"><button class="btn">Login</button><a>
    </header>

    <div class="container">

        <div class="content">

            <form action="" method="" class="cadastro" style="height: 310px;">

                <div>
                    <label for="inputEmail" class="form-label">E-mail</label></br>
                    <input class="inputcad" type="text" name="email" id="inputEmail">
                </div>

                <div>
                    <label for="inputNome" class="form-label">Nome</label></br>
                    <input class="inputcad" type="text" name="nome" id="inputNome">
                </div>

                <div>
                    <label for="inputFone">Fone</label></br>
                    <input class="inputcad" type="text" name="fone" id="inputFone">
                </div>

                <div>
                    <label for="inputFuncao">Função</label>
                    <select class="inputcad" required name="funcao">
                        <option value="" selected>Escolha a função</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Operador">Operador</option>
                    </select>
                </div>

                <a href=""><button class="btncad" style="margin-top: 10px;">Cadastrar</button><a>
            </form>
        </div>
    </div>
</body>

</html>