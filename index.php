<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style_mobile.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
     <script src="node_modules/jquery/efeitos/efeitos.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <title>EPA</title>

  </head>
  <body>
    <header>
      <div class="container">
        <img id="logotipo" src="img/EPA.png" alt="Logotipo">
      </div>
      <div class="header-black">
          <button id="btn-bars" type="button"><i class="fas fa-bars"></i></button>
          <div class="d-none d-sm-block">
            <button id="btn-login" type="submit" data-toggle="modal" data-target="#login">Login <i class="fas fa-user-circle"></i></button>

          </div>
          <div class="d-block d-sm-none">
            <button id="btn-login" type="button" data-toggle="modal" data-target="#login"><i class="fas fa-user-circle"></i></button>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
            <li><a href="index.php">Sobre</a></li>
           
          </ul>

      </div>

      <div class="container" style="margin-top: 89px;">
        <div class="row" style="float: right;">
          <nav id="menu">
              <ul>
                <li>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <section> 
        <div id="texto" class="texto" style="top: 0;">
        <h2>O que é o EPA?</h2>
        <p><strong>EPA</strong> é uma feira tecnologica realizada anualmente em algumas etec's do Centro Paula Souza. O evento reúne vários projetos desenvolvidos
        pelos próprios alunos. Esses projetos possuem temáticas variadas, como por exemplo, física, biologia, química, entre outros. 

        </p>
        </div>

        <div class="modal" id="login" tabindex="-1" role="dialog" style="top: 80px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <div class="btn-group"> 
            <form class="form-group" action="login.php" method="POST">
                    <!--<button type="button" id="laranbotao" name="btaluno" class="btn btn-outline-secondary"><i class="fas fa-user-graduate"></i> Aluno</button>
                    <button type="button" id="btprofessor" class="btn btn-outline-dark"  ><i class="fas fa-chalkboard-teacher"></i> Professor</button>-->
                  </div>
                </div>
                <div id="login">
                   
                    <b>Login:</b>
                    <input type="text" class="form-control" name="txtLogin" required=""><br>
                    <b>Senha</b>
                    <input type="password" class="form-control" name="txtSenha" required="">

                     <div class="modal-footer">
                <input type="submit" id="laranbotao" class="btn btn-secondary" value="Logar"></button>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
              </div>
                  </form>
                </div>
          
              </div>
            
      </section>
      <footer>
        <div id="footer">
          <div class="container" style="padding-top: 10px; color: white;">
          <div id="desktop">
              <div class="row">
                <div class="col" align="left">
                <h3>EPA Performance</h3>
                <ul>
                  <li>
                    <i><b>Desenvolvido por RJ</b></i>
                  </li>
                </ul>
                </div>
              <div class="col" align="right" id="suporte">
                <h3 style="font-size: ;">Precisa de ajuda?</h3>
                <a href="http://www.facebook.com.br" id="btnfooter" class="btn btn-primary" style="background-color: #e2700d; border-style: solid; border-color: #fff; margin-right: 14px;"><i><b>Entre em contato:</b></i> <i class="fab fa-facebook-square" style="font-size: 40px; "></i></a>      
              </div>
            </div>
          </div>
          <div id="mobile">
                <div class="row">
                  <div class="col" align="left">
                  <h3>EPA Performance</h3>
                  <ul>
                    <li>
                      <i><b>Desenvolvido por RJ</b></i>
                    </li>
                  </ul>
                  </div>
                <div class="col" align="left" id="suporte">
                  <h3 style="font-size: ;">Precisa de ajuda?</h3><br>
                  <a href="http://www.facebook.com.br" class="btn btn-primary" style="background-color: #e2700d; border-style: solid; border-color: #fff; margin-right: 14px;"><i><b>Entre em contato:</b></i> <i class="fab fa-facebook-square" style="font-size: 30px; "></i></a>      
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

  </body>
</html>