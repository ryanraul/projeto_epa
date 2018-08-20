<?php  
  include_once('config.php');
  $mysql = new BancodeDados();
  $mysql->conecta();

  if(!isset($_SESSION)) session_start();
  $usuario=$_SESSION['login'];
  $senha=$_SESSION['senha'];

  $nivel=2;

  if (!isset($_SESSION['login'])  or !isset($_SESSION['senha']) or ($_SESSION['nivel_acesso']!=$nivel)) {
    session_destroy();
    header("Location: index.php"); exit;
  }
  else{
  $sql = "SELECT * FROM usuario WHERE login = '$usuario' and senha='$senha'";
  $executador=mysqli_query($mysql->con, $sql);
  $linha=mysqli_fetch_assoc($executador);
  $curso = $linha['nome'];
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
            <a href="sair.php" id="btn-login"><?php echo $linha['nome']; ?>  <i class="fas fa-sign-in-alt"></i></a>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
            <li><a href="index.php">Alunos</a></li>
            <li><a href="projetos.php">Projetos</a></li>
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

              $consulta="SELECT * FROM projeto WHERE nome_proj = '$curso'";
              $exec=mysqli_query($mysql->con,$consulta);
            ?>
            <table class="table table-bordered" id="tabelaproj">
                <tr>
                  <th>Id do projeto</th>
                  <th>Nome do projeto</th>
                  <th>Detalhes</th>
                </tr>
                <?php 
                 while ($linha = mysqli_fetch_assoc($exec)) {
                ?>
                <tr>
                  <td><?php echo $linha['id'];?></td>
                  <td><?php echo $linha['nome_proj'];?></td>
                  <td><center><a id="laranbotao" href="projetoslist.php" class="btn btn-outline-secondary">Detalhes do projeto  <i id="seta" class="fas fa-angle-double-right"></i></a></center></td>
                </tr>
                <?php 
                     }
                 ?>

              </tbody>
            </table>
          </div>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>