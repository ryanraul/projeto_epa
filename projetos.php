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
   $sql = "SELECT * FROM projeto";
  $executado2=mysqli_query($mysql->con, $sql);

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
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="index.php">Avaliações</a></li>
          </ul>

      </div>

			<div class="container" style="margin-top: 89px;">
				<div class="row" style="float: right;">
					<nav id="menu">
  						<ul>
  							<li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="index.php">Avaliações</a></li>
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
                <button class="btn btn-outline-danger" id="infobotao"><img src="img/pc.png" style="width: 100px;"><br>INFORMATICA</button>
                <button class="btn btn-outline-success" id="quimbotao"><img src="img/quim2.png" style="width: 100px;"><br>QUIMICA</button>
                <button class="btn btn-outline-primary" id="mecbotao"><img src="img/mec.png" style="width: 100px;"><br>MECANICA</button>
                <button class="btn btn-outline-warning" id="admbotao"><img src="img/adm3.png" style="width: 100px;"><br>ADMINISTRAÇÃO</button>
                <button class="btn btn-outline-danger" id="laranbotao"><img src="img/pen.png" style="width: 100px;"><br>ENSINO MÉDIO</button>
                <button class="btn btn-outline-success" id="meiobotao"><img src="img/ambiente.png" style="width: 100px;"><br>MEIO AMBIENTE</button>
                <button class="btn btn-outline-primary" id="mecatrobotao"><img src="img/mecat.png" style="width: 100px;"><br>MECATRONICA</button>
                <button class="btn btn-outline-warning" id="edificabotao"><img src="img/edifica.png" 
                  onmouseover="this.src='img/edifica2.png'"
                  onmouseout="this.src='img/edifica.png'" style="width: 100px;" /><br>EDIFICAÇÕES</button>
                <button class="btn btn-outline-danger" id="eletrobotao"><img src="img/eletro.png" style="width: 100px;"><br>ELETROTÉCNICA</button>
                <button class="btn btn-outline-success" id="farmabotao"><img src="img/farm2.png" style="width: 100px;"><br>FARMÁCIA</button>
                <button class="btn btn-outline-primary" id="autombotao" style="font-size: 12px;"><img src="img/auto.png" style="width: 100px;"><br>MANUTENÇÃO AUTOMOTIVA</button>
                <button class="btn btn-outline-warning" id="logisbotao"><img src="img/logist.png" style="width: 100px;"><br>LOGÍSTICA</button>
                <button class="btn btn-outline-danger" id="infowebbotao" style="font-size: 12px;"><img src="img/web.png" style="width: 100px; "><br>INFORMATICA PARA INTERNET</button>
                <button class="btn btn-outline-secondary" id="nutribotao"><img src="img/nutr.png" style="width: 100px;"><br>NUTRIÇÃO E DIETÉTICA</button>
                <button class="btn btn-outline-primary" id="trabbotao" style="font-size: 13px;"><img src="img/segura.png" style="width: 100px;"><br>SEGURANÇA DO TRABALHO</button>
          </div>
           <?php
                while($linha2=mysqli_fetch_assoc($executado2)){

                ?>
            <div id="series">

              <div id="adm_ano" style="display: none; margin-left: 13px;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO ETIM DE ADMINISTRACAO" class="btn btn-warning">1º ano</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO ETIM DE ADMINISTRACAO" class="btn btn-warning">2º ano</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO ETIM DE ADMINISTRACAO" class="btn btn-warning">3º ano</a></br>
              </ul>
              </div>

              <div id="info_ano"  style="display: none; margin-left: 13px;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO ETIM DE INFORMATICA" class="btn btn-danger">1º ano</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO ETIM DE INFORMATICA" class="btn btn-danger">2º ano</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO ETIM DE INFORMATICA" class="btn btn-danger">3º ano</a></br>
              </ul>
              </div>

              <div id="quim_ano"  style="display: none; margin-left: 13px;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO ETIM DE QUIMICA" class="btn btn-success">1º ano</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO ETIM DE QUIMICA" class="btn btn-success">2º ano</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO ETIM DE QUIMICA" class="btn btn-success">3º ano</a></br>
              </ul>
              </div>

              <div id="medio_ano"  style="display: none; margin-left: 13px;">
              <ul>
                  <a href="projetoslistnd.php?curso=SEGUNDO ANO DO ENSINO MEDIO REGULAR" id="laranbotao" class="btn btn-secondary">2º ano</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO ANO DO ENSINO MEDIO REGULAR" id="laranbotao" class="btn btn-secondary">3º ano</a></br>
              </ul>
              </div>

              <div id="farma_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE FARMACIA" id="farmabotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE FARMACIA" id="farmabotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE FARMACIA" id="farmabotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="logist_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE LOGISTICA" id="logisbotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE LOGISTICA" id="logisbotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE LOGISTICA" id="logisbotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

               <div id="info_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE INFORMATICA" id="infobotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE INFORMATICA" id="infobotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE INFORMATICA" id="infobotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="adm_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE ADMINISTRACAO" id="admbotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE ADMINISTRACAO" id="admbotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE ADMINISTRACAO" id="admbotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="meioa_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE MEIO AMBIENTE" id="meiobotao" class="btn btn-success">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE MEIO AMBIENTE" id="meiobotao" class="btn btn-success">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE MEIO AMBIENTE" id="meiobotao" class="btn btn-success">3º modulo</a></br>
              </ul>
              </div>

              <div id="nutr_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE NUTRICAO E DIETETICA" id="nutribotao" class="btn btn-success">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE NUTRICAO E DIETETICA" id="nutribotao" class="btn btn-success">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE NUTRICAO E DIETETICA" id="nutribotao" class="btn btn-success">3º modulo</a></br>
              </ul>
              </div>

              <div id="infoweb_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE INFORMATICA PARA INTERNET" id="infowebbotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE INFORMATICA PARA INTERNET" id="infowebbotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE INFORMATICA PARA INTERNET" id="infowebbotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="elet_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE ELETROTECNICA" id="eletrobotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE ELETROTECNICA" id="eletrobotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE ELETROTECNICA" id="eletrobotao" class="btn btn-secondary">3º modulo</a></br>
                  <a href="projetoslistnd.php?curso=QUARTO MODULO DE ELETROTECNICA" id="eletrobotao" class="btn btn-secondary">4º modulo</a></br>
              </ul>
              </div>

              <div id="mec_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE MECANICA" id="" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE MECANICA" id="" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE MECANICA" id="" class="btn btn-secondary">3º modulo</a></br>
                  <a href="projetoslistnd.php?curso=QUARTO MODULO DE MECANICA" id="" class="btn btn-secondary">4º modulo</a></br>
              </ul>
              </div>

              <div id="edif_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE EDFICACOES" id="edificabotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE EDFICACOES" id="edificabotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE EDFICACOES" id="edificabotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="autom_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE MANUTENCAO" id="autombotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE MANUTENCAO" id="autombotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE MANUTENCAO" id="autombotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>

              <div id="mecat_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE MECATRONICA" id="mecatrobotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE MECATRONICA" id="mecatrobotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE MECATRONICA" id="mecatrobotao" class="btn btn-secondary">3º modulo</a></br>
                  <a href="projetoslistnd.php?curso=QUARTO MODULO DE MECATRONICA" id="mecatrobotao" class="btn btn-secondary">4º modulo</a></br>
              </ul>
              </div>

              <div id="quim_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE QUIMICA" id="quimbotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE QUIMICA" id="quimbotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE QUIMICA" id="quimbotao" class="btn btn-secondary">3º modulo</a></br>
                  <a href="projetoslistnd.php?curso=QUARTO MODULO DE QUIMICA" id="quimbotao" class="btn btn-secondary">4º modulo</a></br>
              </ul>
              </div>

              <div id="seg_mod"  style="display: none;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO MODULO DE SEGURANCA DO TRABALHO" id="trabbotao" class="btn btn-secondary">1º modulo</a></br>
                  <a href="projetoslistnd.php?curso=SEGUNDO MODULO DE SEGURANCA DO TRABALHO" id="trabbotao" class="btn btn-secondary">2º modulo</a></br>
                  <a href="projetoslistnd.php?curso=TERCEIRO MODULO DE SEGURANCA DO TRABALHO" id="trabbotao" class="btn btn-secondary">3º modulo</a></br>
              </ul>
              </div>


              <div id="mec_ano"  style="display: none; margin-left: 13px;">
              <ul>
                  <a href="projetoslistnd.php?curso=PRIMEIRO ETIM DE MECANICA" id="" class="btn btn-primary">1º ano</a></br>
              </ul>
              </div>
              <button id="voltar" class="btn btn-outline-secondary voltar"><b>Voltar</b></button>

<?php

}
?>

            </div>

      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>