<?php 
  include_once('config.php');
  $mysql = new BancodeDados();
  $mysql->conecta();

  session_start();
  $usuario=$_SESSION['login'];
  $senha=$_SESSION['senha'];

  if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
    header("location: index.php");
  }
  else{
    $sql = "SELECT * FROM usuario_prof WHERE login = '$usuario' and senha='$senha'";
    $exec = mysqli_query($mysql->con, $sql);
    $linha=mysqli_fetch_assoc($exec);
  }
 ?>
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
          <a href="sair.php" id="btn-login" style="text-decoration: none;"><?php echo $linha['nome']; ?> - Sair <i class="fas fa-sign-in-alt"></i></a>
          </div>
          <div class="d-block d-sm-none">
            <a href="sair.php" id="btn-login"><i class="fas fa-sign-in-alt"></i></a>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
            <li><a href="index.php">Alunos</a></li>
            <li><a href="projetos.html">Projetos</a></li>
            <li><a href="index.php">Sobre</a></li>
            <li><a href="index.php">Alunos</a></li>
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
          <div class="projtabelas"> 
            <h2 
            style="
            border-bottom-style: solid; 
            border-bottom-width: 5px; 
            border-bottom-color: #d1d8e0;
            font-family: sans-serif;
            padding-bottom: 4px;
            padding-left: 7px;">
            3°ETIM de Administração</h2>


            <?php
              include_once('config.php');
              $mysql = new BancodeDados();
              $mysql->conecta();

              $consulta="SELECT * FROM projeto";
              $exec=mysqli_query($mysql->con,$consulta);
              $linha=mysqli_fetch_assoc($exec);

            ?>
            <table class="table table-bordered">
                <tr>
                  <th>Nome do Projeto:</th>
                  <td>PECUARIA SÃO PEDRO DA SILVA</td>
                </tr>
                <tr>
                  <th>Integrantes:</th>
                  <td><?php echo $linha['integrantes'];?></td>
                </tr>
                <tr>
                  <th>Curso:</th>
                  <td><?php echo $linha['curso'];?></td>
                </tr>
                <tr>
                  <th>Professor Responsivel:</th>
                  <td>Anderson</td>
                </tr>
                <tr>
                  <th>Escala:</th>
                  <td><?php echo $linha['escala'];?></td>
                </tr>                
                <tr>
                  <th>Descrição do Projeto:</th>
                  <td>e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</td>
                </tr>
                <tr>
                  <th>Materiais:</th>
                  <td>e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</td>
                </tr>
                <tr>
                  <th>Observação:</th>
                  <td>e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto  Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</td>
                </tr>

              </tbody>
            </table>
          </div>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>