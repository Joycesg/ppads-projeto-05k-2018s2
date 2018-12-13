<?php
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];







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



if($tipo == "prestador"){

$query = "SELECT login, senha FROM cadastrar_prestador WHERE login = '{$login}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['login'] = $login;
    header('Location: ParaPrestador.html');
    exit();
}
else{
    header('Location: Login.html');
    exit();
}

}

else{

$query = "SELECT login, senha FROM cadastrar_usuario WHERE login = '{$login}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['login'] = $login;
    header('Location: ParaSolicitanteDeServico.html');
    exit();
}
else{
    header('Location: Login.html');
    exit();
}
}