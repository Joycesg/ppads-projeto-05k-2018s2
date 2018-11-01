<?php

$servico = $_POST["servico"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$contato = $_POST["contato"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$termo = $_POST["termo"];



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

$sql = "INSERT INTO `publicar_servico` (`profissional`, `nome_contato`, `telefone`, `preferencia`, `cep`, `endereco`, `numero`, `bairro`, `termo_uso`) VALUES 

('".$servico."','".$nome."','".$telefone."','". $contato."','". $cep."','". $endereco."','". $numero."','". $bairro."','".$termo."')";
if ($conn->query($sql) === TRUE) {
    echo "Orçamento solicitado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>