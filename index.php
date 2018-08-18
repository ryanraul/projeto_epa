<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
            <button id="btn-login" type="button"><i class="fas fa-user-circle"></i></button>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
            <li><a href="#">Alunos</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Alunos</a></li>
          </ul>

      </div>

			<div class="container" style="margin-top: 89px;">
				<div class="row" style="float: right;">
					<nav id="menu">
  						<ul>
  							<li>
  								<a href="index.php">Alunos</a>
  								<a href="projetos.php">Projetos</a>
  								<a href="index.php">Sobre</a>
  								<a href="index.php">Alunos</a>
  							</li>
  						</ul>
  					</nav>
  				</div>
  			</div>
  		</header>
      <section> 
        <div id="texto" class="texto">
        <h2>O que é o EPA?</h2>
        <p><strong>EPA</strong> é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
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
                <input type="submit" id="laranbotao" class="btn btn-primary" value="Logar"></button>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
              </div>
                  </form>
                </div>
          
              </div>
             
            </div>
           </div>
          </div>
            
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>