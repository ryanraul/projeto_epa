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
           <a href="sair.php" id="btn-login" style="text-decoration: none;"><?php echo $linha2['nome']; ?> - Sair <i class="fas fa-sign-in-alt"></i></a>
          </div>
          <div class="d-block d-sm-none">
            <a href="sair.php" id="btn-login"><i class="fas fa-sign-in-alt"></i></a>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
                  <a href="projetosalu.php">Projetos</a>
                  <a href="">Avaliações</a>
          </ul>

      </div>

      <div class="container" style="margin-top: 89px;">
        <div class="row" style="float: right;">
          <nav id="menu">
              <ul>
                <li>
                  <a href="projetosalu.php">Projetos</a>
                  <a href="">Avaliações</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <section>
          <?php
              include_once('config.php');
              $mysql = new BancodeDados();
              $mysql->conecta();
              $id=(int)$_POST['txtid'];
              $consulta="SELECT * FROM projeto where id=$id";
              $exec=mysqli_query($mysql->con,$consulta);
              $linha=mysqli_fetch_assoc($exec);

          ?>
          <div class="projtabelas"> 
            <h2 
            style="
            border-bottom-style: solid; 
            border-bottom-width: 5px; 
            border-bottom-color: #d1d8e0;
            font-family: sans-serif;
            padding-bottom: 4px;
            padding-left: 7px;">
            <?php echo $linha['curso']; ?></h2>



            <table class="table table-bordered">
                <tr>
                  <th>Nome do Projeto:</th>
                  <td><?php echo $linha['nome_proj'];?></td>
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
                  <td><?php echo $linha['descricao_proj'];?></td>
                </tr>
                <tr>
                  <th>Materiais:</th>
                  <td><?php echo $linha['materiais'];?></td>
                </tr>
                <tr>
                  <th>Observação:</th>
                  <td><?php echo $linha['obs'];?> </td>
                </tr>

              </tbody>
            </table>
            <center>
              <a href="projetosalu.php" class="btn btn-outline-secondary Voltar" style="margin-bottom: 20px;"><b>Voltar</b></a>
       
            </center>
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