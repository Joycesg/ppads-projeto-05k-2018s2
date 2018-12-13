<?php

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$profissao = $_POST["profissao"];
$experiencia = $_POST["experiencia"];
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

$sql = "INSERT INTO `cadastrar_prestador` (`nome`, `telefone`, `profissao`, `experiencia`, `login`, `senha`) VALUES ('".$nome."','".$telefone."','".$profissao."','".$experiencia."','". $login."','". $senha."')";
if ($conn->query($sql) === TRUE) {
    header('Location:Login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>