<?php

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$login = $_POST["login"];
$senha = $_POST["senha"];



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

$sql = "INSERT INTO `cadastrar_usuario` (`nome`, `telefone`, `cidade`, `estado`, `rua`, `numero`, `login`, `senha`) VALUES ('".$nome."','".$telefone."','".$cidade."','".$estado."','". $rua."','". $numero."','". $login."','". $senha."')";
if ($conn->query($sql) === TRUE) {
    header('Location:Login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>