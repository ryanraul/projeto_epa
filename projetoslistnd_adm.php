<?php  
  include_once('config.php');
  $mysql = new BancodeDados();
  $mysql->conecta();

  if(!isset($_SESSION)) session_start();
  $usuario=$_SESSION['login'];
  $senha=$_SESSION['senha'];

  $nivel=3;

  if (!isset($_SESSION['login'])  or !isset($_SESSION['senha']) or ($_SESSION['nivel_acesso']!=$nivel)) {
    session_destroy();
    header("Location: index.php"); exit;
  }
  else{
  $sql = "SELECT * FROM usuario WHERE login = '$usuario' and senha='$senha'";
  $executador=mysqli_query($mysql->con, $sql);
  $linha=mysqli_fetch_assoc($executador);
  $curso=$_GET['curso'];
  $sqlcur = "SELECT * FROM curso where nome_curso='$curso'";

  $execur = mysqli_query($mysql->con, $sqlcur);
 if(mysqli_num_rows($execur)==0){

   header("Location: projetos.php"); exit;

 }
 else{
  $dados = mysqli_fetch_assoc($execur);
}
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

    <script type="text/javascript">
      $(document).ready(function(){

        $('.mexer').mouseover(function(){
          $(this).addClass("animated infinite shake");
        });
        $('.mexer').mouseout(function(){
          $(this).removeClass("animated infinite shake");
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
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="avaliacoesnd.php">Avaliações</a></li>
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
          <?php echo $dados['nome_curso'];?></h2>
            <?php

              include_once('config.php');
              $mysql = new BancodeDados();
              $mysql->conecta();

              $consulta="SELECT * FROM projeto WHERE curso = '$curso'";
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
                <form action="projetoslist_adm.php" method="POST">
                  <td><input type="hidden" name="id" value="<?php echo $linha['id'];?>"><?php echo $linha['id'];?></td>
                  <td><?php echo $linha['nome_proj'];?></td>
                  <td><center><button type="submit" id="laranbotao" class="btn btn-outline-secondary mexer"><b>Detalhes do projeto</b>  <i id="seta" class="fas fa-angle-double-right"></i></button></center></td>
                </tr>
                </form>
                <?php 
                     }
                 ?>


              </tbody>
            </table>
            <center><a href="admin.php" class="btn btn-outline-secondary"><b>Voltar</b></a></center>
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