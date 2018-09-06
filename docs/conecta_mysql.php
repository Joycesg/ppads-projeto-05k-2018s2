<?php

//AWS
$servername = "projeto.c1d4bqrovkep.sa-east-1.rds.amazonaws.com "; \\ ip ou link do banco de dados na Amazon
$username = "projeto "; \\ usuário do banco de dados
$password = "Acesso123 "; \\ senha do usuário
$dbname = "projeto "; \\ nome da base de dados (schema)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
