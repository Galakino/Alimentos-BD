<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro dos Alimentos</title>
</head>
<style>
    .box{
        margin-left: auto;
        margin-right: auto;
        border: 4px solid black;
        width: 30%;
        border-radius: 1em;
        padding-bottom: 12px;
    }
</style>
<body>
    <center>
    <div class="box">
    <h1>Cadastre seu Alimento</h1>
    <form action="cadastro-conexao.php" method="POST">
        <p>
            <label for="comida">Comida: </label>
            <input type="text" name="comida" size="20">
        </p>
        <p>
            <label for="ingrediente1">Ingrediete 01: </label>
            <input type="text" name="ingrediente1" size="20">
        </p>
        <p>
            <label for="ingrediente2">Ingrediete 02: </label>
            <input type="text" name="ingrediente2" size="20">
        </p>
        <p>
            <label for="ingrediente3">Ingrediete 03: </label>
            <input type="text" name="ingrediente3" size="20">
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
    Alimento já cadastrado? <a href="index.php">Voltar</a>
    </div>
</center>
</body>
</html>