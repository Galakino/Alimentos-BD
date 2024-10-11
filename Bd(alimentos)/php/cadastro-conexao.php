<?php
session_start();

$host = "127.0.0.1";
$bd = "esportes";
$usuario = "root";
$senha = "root";

$conexao = new mysqli($host, $usuario, $senha, $bd);

if ($conexao -> connect_errno) {
    echo "Falha ao conectar: (" . $conexao -> connect_errno . ") " . $conexao -> connect_error;
    exit();
} else {
    $comida = $conexao -> real_escape_string($_POST['comida']);

        $sql = "SELECT `nomeComida` FROM `esportes`.`times`
                WHERE `nomeTime`='".$time."';";

        $resultado = $conexao->query($sql);
        var_dump($resultado);
    if($resultado != ""){
    // Evita caracteres especiais (SQL Inject)
    $ingrediente1 = $conexao -> real_escape_string($_POST['ingrediente1']);
    $ingrediente2 = $conexao -> real_escape_string($_POST['ingrediente2']);
    $ingrediente3 = $conexao -> real_escape_string($_POST['ingrediente3']);

    $sql = "INSERT INTO `alimentos`.`ingredientes`(`nomeComida`, `ingrediente1`, `ingrediente2`, `ingrediente3`)
            VALUES 
                ('".$comida."', '".$ingrediente1."', '".$ingrediente2."', '".$ingrediente3."');";

    $resultado = $conexao->query($sql);
    
    $conexao -> close();
    header('Location: index.php',  true, 301);
}
else{
    if($resultado != ""){echo "Esse time já está cadastrado.";}
}
}
?>
