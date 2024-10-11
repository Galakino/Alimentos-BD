<?php
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
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
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>
    <center>
    <div class="box">
    <h1>Descrição do Time encontrado:</h1>
    
    </div>
    </center>
</body>
</html>
