<?php
session_start();
include("./backEnd/register.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogador HR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Menu principal ou navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.html"><img class="logo" src="./img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav menu">
            <a class="nav-item nav-link active" href="#">Inico <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#loja">Produtos</a>
            <a class="nav-item nav-link" href="#video">Videos</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Forum</a>
          </div>
          
            <?php 
            echo $logar;
            if(!empty($_SESSION['usuario']))
             { echo $_SESSION['usuario']; } 
             else
              { echo "ENTRAR"; }
               ?>
           </a>
          <!-- <a class="btn btn-primary entrar m-0" href="./backEnd/sair.php"> -->
          
          <?php 
          echo $register;
           if(!empty($_SESSION['usuario'])) 
              { echo "SAIR"; } 
            else
              { echo "CADASTRAR"; } ?>
          </a>
        </div>
        
      </nav>
      <!-- Fim do navbar ou menu -->
      

      <!-- Sistema carrosel de imagens -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="./img/data.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block ">
              <h5>VENDA PELO WHATSAPP</h5>
              <p class="mt-2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              <p class="btn btn-primary mt-4 mb-4">Entre em contato.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img   src="./img/data.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h5>CALCULADORA</h5>
              <p class="mt-2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              <p class="btn btn-primary mt-4 mb-4">Compre Agora.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img   src="./img/data.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h5>BUSCA DE KM ONLINE</h5>
              <p class="mt-2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              <p class="btn btn-primary mt-4 mb-4">Compre Agora.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only ">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
          <span class="sr-only ">Next</span>
        </a>
      </div>
      <!-- Fim do sistema de imagens carrosel -->

          <!-- Secao sobre -->
          <section class="sobre">
        
            <img class="imagem-sobre" src="./img/sobre.jpeg" alt="">
            <div class="conteudo_sobre">
              <h1 class="mb-4">Sobre</h1>
              <img src="./img/logo.png" class="d-block w-100" alt="...">
              <p>Fundamos o(a)  H.R Solutions com intuito de oferecer praticidade e
                 expertise utilizando a ferramenta excel, nossos serviços tem uma grande
                 abrangencia atendendo clientes de varios seguimentos bem como Traders,
                 financeiro, transportes, e-commerce, e vendas. Otimizando tempo, 
                 ganhando produtividade e aumentando a lucratividade do seu negocio.</p>
            </div>
          
        </section>
        <!-- Fim da secao sobre -->

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="pricing py-5" id="loja">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card_ mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Estrategia MHI</h5>
            <h6 class="card-price text-center">Free<span class="period">/mensal</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Tela de configuraçao</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Resultado</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>------</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>------</li>
              </ul>
  
<a class="btn btn-block btn-primary text-uppercase" mp-mode="dftl" href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=429688327-eda25bd1-8538-4bfa-9bf3-13412e590103" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar</a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>


          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card_ mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Consulta de KM - Excel</h5>
            <h6 class="card-price text-center">R$ 30<span class="period">/mensal</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Planilha basic</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
             </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">COMPRAR</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card_">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Calculadora de Soros Gale</h5>
            <h6 class="card-price text-center">R$ 40<span class="period">/mensal</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Planilha Expert</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
             </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">COMPRAR</a>
          </div>
        </div>
      </div>
          <!-- Pro Tier -->
          <div class="col-lg-4 mt-4">
            <div class="card_">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Catalogador HR</h5>
                <h6 class="card-price text-center">R$ 50<span class="period">/mensal</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Planilha Expert</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                 </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">COMPRAR</a>
              </div>
            </div>
          </div>
    </div>
  </div>
</section>


  

      <div class="container" id="video">

        <div class="page-header">
            <h1>Tutoriais e Ajuda <small>HR Solutions</small></h1>
        </div>
        
        <!-- Video Gallery - START -->
        <div class="container-fluid pb-video-container" >
            <div class="col-md-12 col-md-offset-1">
                <h3 class="text-center">Sample Video Gallery</h3>
                <div class="row pb-row ">
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/8D-vwFL9JJg" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/bith9gW9nPc" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/6Acpt4OQmyk" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/4tgJfq3gq34" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                </div>
                <div class="row pb-row">
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/bith9gW9nPc" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/kXQIgY6ix78" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/9sIyD1c4Mk0" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                    <div class="col-md-6 pb-video mb-4">
                        <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/ItoOl6l8XOs" frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Gerenciamento HR</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Gallery - END -->
        
        </div>

        

      <!-- Contato -->
      <div class="contact1 mg-4">
        <div class="container-contact1">
          <div class="contact1-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG">
          </div>
    
          <form class="contact1-form validate-form" action="./enviar-email.php" method="post">
            <span class="contact1-form-title">
              Entre em contato
            </span>
    
            <div class="wrap-input1 validate-input" data-validate = "Name is required">
              <input class="input1" type="text" name="name" id="name" placeholder="Nome">
              <span class="shadow-input1"></span>
            </div>
    
            <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <input class="input1" type="text" name="email" id="email" placeholder="Email">
              <span class="shadow-input1"></span>
            </div>
    
            <div class="wrap-input1 validate-input" data-validate = "Subject is required">
              <input class="input1" type="text" name="subject" id="subject" placeholder="Titulo">
              <span class="shadow-input1"></span>
            </div>
    
            <div class="wrap-input1 validate-input" data-validate = "Message is required">
              <textarea class="input1" name="message" id="message" placeholder="Menssagem"></textarea>
              <span class="shadow-input1"></span>
            </div>
    
            <div class="container-contact1-form-btn">
              <button class=" btn btn-success">
                <span>
                  Enviar Menssagem
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>