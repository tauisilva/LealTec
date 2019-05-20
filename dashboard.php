<!DOCTYPE html>
<html lang="en">
<?php include("servicos/desktop.php"); include("funcionario/tecnico.php"); include("servicos/mobiles.php"); ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->


  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Bem Vindo ao Seu Ambiente de Trabalho!</div>
        <div class="intro-heading text-uppercase">Tenha um Bom Serviço</div>
        <a class="btn btn-secundary btn-xl text-uppercase js-scroll-trigger white-text" style="border-radius: 20px; border-bottom-color: #FFF;" href="#services">Vamos lá!</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Serviços</h2>
          <h3 class="section-subheading text-muted">Aqui é aonde você vai fazer tudo que for preciso envolvendo seus serviços.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x" data-toggle="modal" data-target="#modalServicos">
            <i class="fas fa-circle fa-stack-2x text-blue"></i>
            <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Mobiles</h4>
          <p class="text-muted">Cadastre e Edite seu serviços envolvendo aparelhos mobiles, sendo eles tanto Tabletes quanto Smartphones.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x" data-toggle="modal" data-target="#modalDesktop">
            <i class="fas fa-circle fa-stack-2x text-secundary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Desktops</h4>
          <p class="text-muted">Cadastre e Edite seu serviços envolvendo aparelhos Desktop, sendo eles tanto Pc's quanto Notebooks</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x" data-toggle="modal" data-target="#modalServicos">
            <i class="fas fa-circle fa-stack-2x text-secundary"></i>
            <i class="fas fa-microchip fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Outros</h4>
          <p class="text-muted">Aqui é aonde vc tratara de todos os outros tipos de serviços que não se encaixam nas outras categorias</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients -->
  <section class="py-5" id="roms">
    <div class="container">
      <div class="row">    
        <div class="col-md-4 col-sm-6" >
          <a href="https://www.stockrom.net/motorola" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/motorola.png" style="width:  180px;">
          </a>
        </div>
        
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/asus" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/asus.png" style="width: 180px;">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/lenovo" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/lenovo.png" style="width: 180px;">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/samsung" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/samsung.png" style="width: 200px;">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/lg" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/lg.png" style="width: 150px;">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/multilaser" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/multilaser.png" style="width: 200px;">
          </a>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <a href="https://en.miui.com/download.html" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/xiaomi.png"  style="width: 100px;">
          </a>
        </div>
      <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/alcatel" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/alcatel.png" style="width: 100px;">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="https://www.stockrom.net/genesis" target="_blank">
            <img class="img-fluid d-block mx-auto" src="img/logos/genesis.png" style="width: 100px;">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/jackson.jpg" alt="">
            <h4>Jackson Mendes</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#"target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/railson.jpg" alt="">
            <h4>Railson</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/noel.jpg" alt="">
            <h4>Noel Magalhões</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://github.com/nlnoel" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/taui.jpg" alt="">
            <h4>Taui Silva</h4>
            <p class="text-muted">Front-End Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://github.com/tauisilva" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/tauis1" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/taui-silva-749b8016b" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="funcionario/admin/dashboard.html">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="nav-item avatar dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="modal" data-target="#modalLogin" aria-haspopud="true" aria-expanded="false" id="user" >
                <img src="img/team/jackson.jpg" class="rounded-circle z-depth-0"
                alt="" style="width:  50px;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.js"></script>

</body>

</html>
