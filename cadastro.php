<?php  
  include_once('config.php');
  $mysql = new BancodeDados();
  $mysql->conecta();

  if(!isset($_SESSION)) session_start();
  $usuario=$_SESSION['login'];
  $senha=$_SESSION['senha'];

  $nivel=1;

  if (!isset($_SESSION['login'])  or !isset($_SESSION['senha']) or ($_SESSION['nivel_acesso']!=$nivel)) {
    session_destroy();
    header("Location: index.php"); exit;
  }
  else{
  $sql = "SELECT * FROM usuario WHERE login = '$usuario' and senha='$senha'";
  $executador=mysqli_query($mysql->con, $sql);
  $linha=mysqli_fetch_assoc($executador);
  $curso = $linha['nome'];

  $sql_curso = "SELECT * FROM curso WHERE nome_curso = '$curso'";
  $sqlexec = mysqli_query($mysql->con, $sql_curso);
  $linha_curso = mysqli_fetch_assoc($sqlexec);

  $periodo = $linha_curso['periodo'];

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
                <li>  <a href="projetosalu.php">Projetos</a></li>
            <li><a href="cadastro.php">Cadastrar projeto</a></li>

          </ul>

      </div>

      <div class="container" style="margin-top: 89px;">
        <div class="row" style="float: right;">
          <nav id="menu">
              <ul>
                <li>
                  <li>  <a href="projetosalu.php">Projetos</a>
                  <a href="cadastro.php">Cadastros</a></li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <section> 

        <div id="form">
    <h5 style="color: gray;">*Campos de preenchimento obrigatório</h5>
          <form action="cadproj.php" method="POST">
            <center><h3>Cadastro do Projeto</h3></center>
            <hr style="border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #212529; margin-top: 3px;">  
                 <b>* Nome do Projeto:</b>
                 <input type="text" name="txtnome" required=""><br> 
                 <b>* Integrantes:</b><br>
                 <input type="text" name="txtinte1" id="txtinte1" placeholder=" Nome do integrante 1" required="">
                 <input type="text" name="txtinte2" placeholder=" Nome do integrante 2" required="">
                 <input type="text" name="txtinte3" placeholder=" Nome do integrante 3" required="">
                 <input type="text" name="txtinte4" class="integ" disabled="" placeholder=" Integrante opcional" required>
                    <img src="img/btoff.png" id="btoff1">
                    <img src="img/bton.png" id="bton1" style="display: none;"><br>
                 <input type="text" name="txtinte5" class="integ" disabled="" placeholder=" Integrante opcional" required>
                      <img id="btoff2" src="img/btoff.png">
                      <img src="img/bton.png" id="bton2" style="display: none;"><br>
                 <input type="text" name="txtinte6" class="integ" disabled="" placeholder=" Integrante opcional" required>
                      <img id="btoff3" src="img/btoff.png">
                      <img src="img/bton.png" id="bton3" style="display: none;"><br>
                 <input type="text" name="txtinte7" class="integ" disabled="" placeholder=" Integrante opcional" required>
                      <img id="btoff4" src="img/btoff.png">
                      <img src="img/bton.png" id="bton4" style="display: none;">
                      <br>  
                 <b>* Curso:</b>
                      <input type="text" name="txtcurso" value="<?php echo $linha['nome'] ?>" readonly>
                 <b>* Professor Responsavel:</b><br>
                 <select name="txtprofresp">
                    <option>Ivo</option>
                    <option>Gabriela</option>
                    <option>Bruno</option>
                    <option>Edimur</option>                  
                 </select ><br>
                 <div class="text-center">
                  <h3>* Escalas:</h3>
                  <b id="aviso" style="color: #dc3545;">*A escalas ainda não foram preenchida</b><br>
                   <div class="btn-group"> 
                     <button type="button" id="btdia1" class="btn btn-danger">DIA 1</button>
                     <button type="button" id="btdia2" class="btn btn-danger">DIA 2</button>
                   </div>
                 </div>
                 <br>

                 <?php 
                    if ($periodo != 'noite') {
                  ?>
                 <div id="diaum" class="jumbotron" style="display: none; padding-top: 32px; padding-bottom: 32px;">
                  <h3 class="display-7 text-center">Escala 1° dia</h3>

                     <b>* Manhã:</b>
                     <input type="text" name="txtescala1m" class="escala" id="manha1" placeholder=" Nome dos integrantes que apresentarão neste turno e dia." required><br>  
                     <b>* Tarde:</b>
                      <input type="text" name="txtescala1t" class="escala" id="tarde1" placeholder=" Ex: Patricia Silva, Marcos Ramos e Gustavo Sousa" required><br> 
                  </div>

                  <div id="diadois" class="jumbotron" style="display: none; padding-top: 32px; padding-bottom: 32px;">
                      <h3 class="display-7 text-center">Escala 2° dia</h3>
                     <b>* Manhã:</b>
                      <input type="text" name="txtescala2m" class="escala" id="manha2" placeholder=" Nome dos integrantes que apresentarão neste turno e dia." required><br> 
                     <b>* Tarde:</b>
                     <input type="text" name="txtescala2t" class="escala" id="tarde2" placeholder=" Ex: Patricia Silva, Marcos Ramos e Gustavo Sousa" required><br> 
                  </div>
                  <?php
                  }else{
                  ?>
                  <div id="diaum" class="jumbotron" style="display: none; padding-top: 32px; padding-bottom: 32px;">
                  <h3 class="display-7 text-center">Escala 1° dia</h3>
                     <b>* Noite:</b><br>
                      <input type="text" name="txtescala1n" class="escala_noite" id="not1" placeholder=" Nome dos integrantes que apresentarão neste turno e dia." required>
                  </div>

                  <div id="diadois" class="jumbotron" style="display: none; padding-top: 32px; padding-bottom: 32px;">
                      <h3 class="display-7 text-center">Escala 2° dia</h3> 
                     <b>* Noite:</b><br>
                      <input type="text" name="txtescala2n" class="escala_noite" id="not2" placeholder=" Nome dos integrantes que apresentarão neste turno e dia." required><br> 
                  </div>
                  <?php 
                    }
                   ?>
                 <b>* Descrição:</b>
                 <textarea name="txtdesc" required=""></textarea><br>  
                 <b>* Materiais:</b>
                 <textarea name="txtmat" required=""></textarea><br>  
                 <b>* Obs:</b>
                 <textarea name="txtobs" required=""></textarea><br>
                 <center><button type="submit" id="btcad" class="btn btn-success">CADASTRAR</button></center>
          </form> 
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