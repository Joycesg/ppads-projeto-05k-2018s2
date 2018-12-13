<?php

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$sub_categoria = $_POST["sub_categoria"];
$detalhe = $_POST["detalhe"];
$Estado = $_POST["Estado"];
$regiao = $_POST["regiao"];
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

$sql = "INSERT INTO `servico` (`nome`, `categoria`, `sub_categoria`, `detalhe`, `Estado`, `Zona`, `tipo_perfil`, `historico`, `competencias`) VALUES ('".$nome."','".$categoria."','".$sub_categoria."','". $detalhe."','". $Estado."','". $regiao."','". $tipo_perfil."','". $historico."','". $competencias."' )";
if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Aprovar Orçamento</title>

    
    <link href="./index/css" rel="stylesheet">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/bootstrap.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/ionicons.min.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/flaticon.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/font-awesome.min.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/slick.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/slick-theme.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/helpers.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/style.css">
    <link rel="stylesheet" href="https://pyrophoric-admiralt.000webhostapp.com/PublicarServico/landing-2.css">
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link active" href="home.html">Início</a></li>
            <li class="nav-item"><a class="nav-link" href="NossaHistoria.html">Conheça a empresa</a></li>
            
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="Login.html" target="_blank"><span class="pb_rounded-4 px-4">Entre</span></a></li>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="home.html" target="_blank"><span class="pb_rounded-4 px-4">Cadastre-se</span></a></li>
          </ul>
        </div>
      </div>
    </nav>


    
    <section class="cover-bg-opacity text-left pb_gradient_v1 " id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
           
          
            
            
          
          
            <div class="col-md-12 relative align-self-center">
              
            
            <form action="ParaPrestador.html" method="post" class="bg-white rounded pb_form_v1">
                <h2 class="mb-12 mt-0 text-center">Serviço publicado</h2>
 

              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Voltar">
              </div>
            </form>

          </div> 
        </div>
      </div>
    </section>
 
    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          
          
        </div>
        
      </div>
    </footer>
    
    <!-- loader -->
    <div id="pb_loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"></circle></svg></div>



    <script src="jquery.min.js.download"></script>
    <script src="popper.min.js.download"></script>
    <script src="bootstrap.min.js.download"></script>
    <script src="slick.min.js.download"></script>
    <script src="jquery.mb.YTPlayer.min.js.download"></script>
    <script src="jquery.waypoints.min.js.download"></script>
    <script src="jquery.easing.1.3.js.download"></script>
    <script src="main.js.download"></script>

  
</body>
</html>