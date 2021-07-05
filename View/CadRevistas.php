<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="20x20" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Revistas</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
        <ul class="navigation">
            <li><a href="Index.php">Home</a></li>
            <li><a href="">Livros</a></li>
            <li><a href="#">Revista</a></li>
            <li><a href="#">Quadrinhos</a></li>
        </ul>
        <a href="cadfun.php"><button class="btn">Login</button><a>
    </header>

    <div class="container">
        <div class="content">

            <form action="" method="" class="cadastro">

                <div>
                    <label for="inputRevista" class="form-label">Nome da Revista</label></br>
                    <input class="inputcad" type="text" name="livro" id="inputRevista">
                </div>

                <div>
                    <label for="inputCapa" class="form-label">Capa</label></br>
                    <input class="inputcad" type="text" name="capa" id="inputCapa">
                </div>

                <div>
                    <label for="inputAno">Ano</label></br>
                    <input class="inputcad" type="text" name="ano" id="inputAno">
                </div>

                <div>
                    <label for="inputEditora">Editora</label></br>
                    <input class="inputcad" type="text" name="editora" id="inputEditora">
                </div>

                <div>
                    <label for="inputURL" class="form-label">URL</label></br>
                    <input class="inputcad" type="text" name="url" id="inputURL">
                </div>

                <a href=""><button class="btncad">Cadastrar</button><a>
            </form>
        </div>
    </div>

</body>

</html>