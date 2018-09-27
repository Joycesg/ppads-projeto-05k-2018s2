<?php

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$sub_categoria = $_POST["sub_categoria"];
$detalhe = $_POST["detalhe"];
$localidade = $_POST["localidade"];
$tipo_perfil = $_POST["tipo_perfil"];
$historico = $_POST["historico"];
$competencias = $_POST["competencias"];


$servername = 'localhost';
$username = 'id7276771_root';
$password = 'Acesso123';
$dbname = "id7276771_projetoprat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `servico` (`nome`, `categoria`, `sub_categoria`, `detalhe`, `localidade`, `tipo_perfil`, `historico`, `competencias`) VALUES ('".$nome."','".$categoria."','".$sub_categoria."','". $detalhe."','". $localidade."','". $tipo_perfil."','". $historico."','". $competencias."' )";
if ($conn->query($sql) === TRUE) {
    echo "Serviço publicado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>