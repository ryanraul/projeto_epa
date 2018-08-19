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
          <div id="projetos">
                <button class="btn btn-outline-warning" id="btnadm"><img src="img/adm.png" style="width: 100px;"><br>ETIM ADMINISTRAÇÃO</button>
                <button class="btn btn-outline-danger" id="btninfo"><img src="img/info.png" style="width: 100px;"><br>ETIM INFORMATICA</button>
                <button class="btn btn-outline-success" id="btnquim"><img src="img/quim.png" style="width: 100px;"><br>ETIM QUIMICA</button>
                <button class="btn btn-outline-primary" id="btnmec"><img src="img/mec.png" style="width: 100px;"><br>ETIM MECANICA</button>
                <button class="btn btn-outline-warning" id="btnadm"><img src="img/adm.png" style="width: 100px;"><br>ETIM ADMINISTRAÇÃO</button>
                <button class="btn btn-outline-danger" id="infobotao"><img src="img/info.png" style="width: 100px;"><br>INFORMATICA</button>
                <button class="btn btn-outline-success" id="quimbotao"><img src="img/quim2.png" style="width: 100px;"><br>QUIMICA</button>
                <button class="btn btn-outline-primary" id="mecbotao"><img src="img/mec.png" style="width: 100px;"><br>MECANICA</button>
                <button class="btn btn-outline-warning" id="admbotao"><img src="img/adm3.png" style="width: 100px;"><br>ADMINISTRAÇÃO</button>
                <button class="btn btn-outline-danger" id="laranbotao"><img src="img/adm.png" style="width: 100px;"><br>ENSINO MÉDIO</button>
                <button class="btn btn-outline-success" id="meiobotao"><img src="img/ambiente.png" style="width: 100px;"><br>MEIO AMBIENTE</button>
                <button class="btn btn-outline-primary" id="mecatrobotao"><img src="img/mecat.png" style="width: 100px;"><br>MECATRONICA</button>
                <button class="btn btn-outline-warning" id="edificabotao"><img src="img/adm.png" style="width: 100px;"><br>EDIFICAÇÕES</button>
                <button class="btn btn-outline-danger" id="eletrobotao"><img src="img/eletro.png" style="width: 100px;"><br>ELETROTÉCNICA</button>
                <button class="btn btn-outline-success" id="farmabotao"><img src="img/farm2.png" style="width: 100px;"><br>FARMÁCIA</button>
                <button class="btn btn-outline-primary" id="autombotao" style="font-size: 12px;"><img src="img/auto.png" style="width: 100px;"><br>MANUTENÇÃO AUTOMOTIVA</button>
                <button class="btn btn-outline-warning" id="laranbotao"><img src="img/logist.png" style="width: 100px;"><br>LOGÍSTICA</button>
                <button class="btn btn-outline-danger" id="infowebbotao" style="font-size: 12px;"><img src="img/web.png" style="width: 100px; "><br>INFORMATICA PARA INTERNET</button>
                <button class="btn btn-outline-success" id="nutribotao"><img src="img/nutr.png" style="width: 100px;"><br>NUTRIÇÃO E DIETÉTICA</button>
                <button class="btn btn-outline-primary" id="trabbotao" style="font-size: 13px;"><img src="img/segura.png" style="width: 100px;"><br>SEGURANÇA DO TRABALHO</button>
          </div>
            <div id="series">
              <div id="adm_ano" style="display: none;">
              <ul>
                  <a href="projetoslistnd.php" id="" class="btn btn-warning">1º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-warning">2º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-warning">3º ano</a></br>
              </ul>
              </div>

              <div id="info_ano"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php" id="" class="btn btn-danger">1º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-danger">2º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-danger">3º ano</a></br>
              </ul>
              </div>

              <div id="quim_ano"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php" id="" class="btn btn-success">1º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-success">2º ano</a></br>
                  <a href="projetoslistnd.php" id="" class="btn btn-success">3º ano</a></br>
              </ul>
              </div>

              <div id="mec_ano"  style="display: none;">
              <ul>  
                  <a href="projetoslistnd.php" id="" class="btn btn-primary">1º ano</a></br>
              </ul>
              </div>
              <button id="voltar" class="btn btn-outline-secondary" style="margin-left: 39px; padding-left: 85px;padding-right: 85px;">Voltar</button>
            </div>

      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>