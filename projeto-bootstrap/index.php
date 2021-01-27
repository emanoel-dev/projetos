<?php session_start(); 
include_once("conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <title>Olá, mundo!</title>
    <style>
  html {
    scroll-behavior: smooth;
}
.navbar-nav li a{
  border-bottom: 2px solid rgb(255 255 255 / 0%);
  box-sizing: border-box;
}
.navbar-nav li a:hover {
  animation: anima-menu 0.3s linear;
  animation-fill-mode: forwards;
  animation-delay: 0.5s;
}
 #discord {
    color: #146bc7;
 }
 #discord:hover {
   color: #55a3f4;
   cursor: pointer;
   transition: all 300ms ease-in-out
 }
 .navbar-nav li a::before {
    padding-bottom: 5px;
    position: relative;
    display: inline-block;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
 }
  .apresentacao {
     font-family: 'Vollkorn', serif;
 }
 header {
  color: #44252e;
   font-family: 'Libre Baskerville', serif;
 }
 header h1 {
   font-weight: 900;
   font-size: 70px !important;
 }
 header p {
  font-size: 28px;
  font-weight: 300;
  font-style: normal;
  font-family: 'Poppins', sans-serif;
 }
    </style>
  </head>
  <body id="topo">
    <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark p-3">
              <a class="navbar-brand ml-5 mr-5" href="#">
                <img src="../projeto-simples/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <i>Emanoel Silva</i>
              </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 pl-5">
                    <li class="nav-item mr-3"><a class="nav-link" href="#topo">Início</a></li>
                    <li class="nav-item mr-3"><a class="nav-link" href="#texto">Quem sou eu</a></li>
                    <li class="nav-item mr-3"><a class="nav-link" href="#servicos">Meus serviços</a></li>
                    <li class="nav-item mr-3"><a class="nav-link" href="#contato">Contato</a></li>
                  </ul>
                  <i id="discord" class="fab fa-discord fa-2x fa-fw mr-auto ml-5 d-block center-block" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Tooltip na parte inferior"></i>
                </div>
              </nav>
      </div>

  <header class="col mt-5 pt-5 text-center">
    <h1>Emanoel Silva</h1>
      <p>"Estudante" <strong>&</strong> "Web Desenvolvedor"</p>
      <br>
      <span>São Paulo</span>
  </header>

    <section class="container col-md-12">
            <div class="row" id="texto">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center-block d-block ml-auto mr-auto mt-5 pt-5 pb-5">
                        <h2 class="text-center">Quem sou eu?</h2>
                        <img src="../projeto-simples/images/quemsoueu.png" class="rounded mx-auto d-block pt-3 pb-3" alt="sobre mim">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>

    </section>
    <div id="servicos"></div>
    <div class="container-fluid bg-dark pl-0 pr-0 p-5 mt-5 mb-5">
      <h2 class="text-center" style="color: #fff;">Meus últimos serviços</h2>
      <div class="row justify-content-between">
        <div class="card row-xs-12 row-sm-12 row-md-8 row-lg-8 m-5 center-block mr-auto ml-auto d-block" style="width: 18rem;">
          <img class="card-img-top" src="../projeto-simples/images/card.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Em desenvolvimento...</p>
            <a href="#" class="btn btn-outline-primary">Visitar</a>
          </div>
        </span>
      </div>
      <div class="card row-xs-12 row-sm-12 row-md-8 row-lg-8 m-5 center-block mr-auto ml-auto d-block" style="width: 18rem;">
        <img class="card-img-top" src="../projeto-simples/images/card.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
          <p class="card-text">Em desenvolvimento...</p>
          <a href="#" class="btn btn-outline-primary">Visitar</a>
        </div>
      </span>
    </div>
    <div class="card row-xs-12 row-sm-12 row-md-8 row-lg-8 m-5 center-block mr-auto ml-auto d-block" style="width: 18rem;">
      <img class="card-img-top" src="../projeto-simples/images/card.jpg" alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Título do card</h5>
        <p class="card-text">Em desenvolvimento...</p>
        <a href="#" class="btn btn-outline-primary">Visitar</a>
      </div>
    </span>
  </div>
  
      </div>
      <div id="contato"></div>
    </div>

    <section class="container-fluid p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../projeto-simples/images/carrosel01.jpg" alt="Primeiro Slide" style="max-height: 600px;
                    margin: 0 auto;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Primeiro Serviço</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>  
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../projeto-simples/images/carrosel02.jpg" alt="Segundo Slide" style="max-height: 600px;
                    margin: 0 auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Segundo Serviço</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                      </div>  
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../projeto-simples/images/carrosel03.jpg" alt="Terceiro Slide" style="max-height: 600px;
                    margin: 0 auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Terceiro Serviço</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                      </div>  
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
    </section>

              <section class="container border p-5 mt-5">
                <form method="POST" action="processa-dados.php">
                  <h2 class="text-center">Envie-me uma mensagem!</h2>
                  <?php
                    if(isset($_SESSION['finale'])){
                      echo $_SESSION['finale'];
                      unset ($_SESSION['finale']);
                    }
                  ?>
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 center-block d-block ml-auto mr-auto pt-5 pb-5">
                      <div class="form-row align-items-center">
                        <div class="w-100">
                          <label class="sr-only" for="nome">Nome</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Nome</div>
                            </div>
                            <input type="text" name="nome" class="form-control" placeholder="" required>
                          </div>
                        </div>
    
    
                        <div class="w-100">
                          <label class="sr-only" for="mail">E-mail</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">E-mail</div>
                            </div>
                            <input type="text" name="mail" class="form-control" placeholder="" required>
                          </div>
                        </div>
    
                        <div class="w-100">
                          <div class="form-group">
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">Assunto</div>
                              </div>
                              <select class="form-control col-auto" name="assunto" required>
                                <option>Feedback</option>
                                <option>Orçamento</option>
                                <option>Outros</option>
                              </select>
                            </div>
    
                          </div>
                        </div>
    
                          <div class="form-group row pt-3">
                            <label for="inputEmail4" style="color: #b2b4b7d6;"><strong>Mensagem:</strong></label>
                            <textarea class="md-textarea form-control" id="inputEmail4" name="msg" cols="80" rows="5" required placeholder="Digite aqui sua mensagem..."></textarea>
                            <button type="submit" class="btn btn-outline-primary align-items-end w-100 mt-3">Enviar</button>
                          </div>
                 </form>
              </section>
              


            <blockquote class="blockquote text-center pt-5 pb-5 col-auto">
                <p class="mb-0">De todo respeito que você deve ter. Que esteja em primeiro lugar o auto-respeito.</p>
                <footer class="blockquote-footer"><cite title="Autor">Impetus</cite></footer>
            </blockquote>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS, depois jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/e2d0311a95.js" crossorigin="anonymous"></script>

    <script>
    // Ativação Tooltip's
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    
    // Função Copy Text
function copiarTexto() {
        var textoCopiado = document.getElementById("link");
        textoCopiado.select();
        document.execCommand("Copy");
        alert("Discord Copiado: " + textoCopiado.value);
      }
    </script>
  </body>
</html>