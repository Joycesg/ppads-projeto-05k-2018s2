<?php
    $categoria = $_POST["categoria"];

?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Solicitar Orçamento</title>

    
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
    <!-- END nav -->
 <!--  <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home"> -->



<br>
<br>
<br>
<br>
<br>
    <section class="cover-bg-opacity text-left pb_gradient_v1 " id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
           
          
            
            
          
          
            <div class="col-md-8 relative align-self-center">
              
            
            <form action="envia_SolicitarOrcamento.php" method="post" class="bg-white rounded pb_form_v1">
                <h2 class="mb-12 mt-0 text-center">Faça o seu Orçamento</h2>
                <br>
              
                <table style="width:100%">
  
<tr>
<td>      <div class="form-group">
            <input name="profissional" type="text" class="form-control pb_height-50 reverse" value="<?php echo "$categoria" ?>" disabled>
                
</td>
    
    
      
<td>     <div class="form-group">
    
                <input name="contato" type="text" class="form-control pb_height-50 reverse" placeholder="Nome do contato">
              </div> 
    
  </tr>
  <tr>
    <td>  


<div class="form-group">
    
               
   <input  name ="telefone" type="text" class="form-control pb_height-50 reverse" class="form-control cel-sp-mask" placeholder="Cel: (00) 00000-0000"></div> 

      
   <td>
        <div class="form-group">
    
                <input name="cep" type="number" class="form-control pb_height-50 reverse" placeholder="CEP: 012345-789">
              </div> 
    </td> 
        


    </td>
      
      <tr>
    <td>
        <div class="form-group">
    
                <input name="endereco" type="text" class="form-control pb_height-50 reverse" placeholder="Endereço">
              </div> 
        
        
       <td>
        <div class="form-group">
                <input name="numero" type="text" class="form-control pb_height-50 reverse" placeholder="Número">
              </div> 
    </td> 
        
        
                    </tr>
      
    </td>
      
  </tr>
  <tr>
    <td>  <div class="form-group">
                <input name="bairro" type="text" class="form-control pb_height-50 reverse" placeholder="Bairro">
              </div> 
      
       <td>
        <div class="form-group">
                <input name="cidade" type="text" class="form-control pb_height-50 reverse" placeholder="Cidade">
              </div> 
    </td> 
       
      
       <tr>
    <td>    
        <div class="form-group">
                <input type="text" name = "estado"  class="form-control pb_height-50 reverse" placeholder="Estado">
        </div>
    </td>
    <td>
       <td> 
            </td>
      
      
    <td>
                
  </tr>
</table>

           <br>

            <div class="form-group">
                <input type="checkbox" name = "termo" placeholder="Estado" value="termo"> Eu concordo com o termo de uso.
                <p style="color:gray">Para continuar você precisa aceitar o termo de uso.</p> >     




                     </div>


              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Enviar Orçamento">
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