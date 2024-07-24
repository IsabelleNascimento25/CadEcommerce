<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Cadastrar Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de Categorias</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-categoria.php" method="post">
            <label for="text">Descrição:</label>
            <input type="text" name="descricao">
            <input type="submit" value="Cadastrar">

       
        </form>
    </section>
</body>
</html>