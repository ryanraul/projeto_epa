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
  $idprof = $linha['id'];
  #$sqlcur = "SELECT * FROM curso where nome_curso='$curso'";
  ##$execur = mysqli_query($mysql->con, $sqlcur);

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
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style_mobile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
     <script src="node_modules/jquery/efeitos/efeitos.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <title>EPA</title>
    <style type="text/css">
      button{
        margin-bottom: 5px;
      }


    </style>
    <script type="text/javascript">
      $(document).ready(function(){

        $('.mexer').mouseover(function(){
          $(this).addClass("animated shake");
        });
        $('.mexer').mouseout(function(){
          $(this).removeClass("animated shake");
        });

      });
    </script>

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
                
                  <li><a href="projetos.php">Projetos</a></li>
                  <li><a href="avaliacoesnd.php">Avaliações</a></li>
                
          </ul>

      </div>

			<div class="container" style="margin-top: 89px;">
				<div class="row" style="float: right;">
					<nav id="menu">
  						<ul>
  							<li>
  								<a href="projetos.php">Projetos</a>
                  <a href="avaliacoesnd.php">Avaliações</a>
  							</li>
  						</ul>
  					</nav>
  				</div>
  			</div>
  		</header>
      <section style="margin-bottom: 13%;">
          <div class="projavaliados"> 
            <h2 
            style="
            border-bottom-style: solid; 
            border-bottom-width: 5px; 
            border-bottom-color: #d1d8e0;
            font-family: sans-serif;
            padding-bottom: 4px;
            padding-left: 7px;">
            Cursos Avaliados</h2>
            <?php

              include_once('config.php');
              $mysql = new BancodeDados();
              $mysql->conecta();

              $consulta="SELECT distinct curso FROM avaliacoes WHERE idprof = '$idprof'";
              $exec=mysqli_query($mysql->con,$consulta);     
            ?>
              <div id="alinhamento">
                <?php
                while ($linha = mysqli_fetch_assoc($exec)) {
                $nome = $linha['curso'];
                $sqlSel = "SELECT idesign FROM curso WHERE nome_curso = '$nome'";
                $exec_curso = mysqli_query($mysql->con,$sqlSel);
                $linha_curso = mysqli_fetch_assoc($exec_curso);
                $idbotao = $linha_curso['idesign'];
                ?>
                <a class="btn btn-outline-secondary avali_cursos" id="<?php echo $idbotao;?>" href="projetoslistnd.php?curso=<?php echo $nome; ?>"><i><?php echo $nome;?></i></a>
                <?php 
                  }
                ?>
              </div>
            <a href="projetos.php" id="voltar" class="btn btn-outline-secondary"><b>Voltar</b></a>
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