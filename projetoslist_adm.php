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
  $linhaprof=mysqli_fetch_assoc($executador);
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
          <a href="sair.php" id="btn-login" style="text-decoration: none;"><?php echo $linhaprof['nome']; ?> - Sair <i class="fas fa-sign-in-alt"></i></a>
          </div>
          <div class="d-block d-sm-none">
            <a href="sair.php" id="btn-login"><i class="fas fa-sign-in-alt"></i></a>
          </div>
      </div>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>
      <div id="menu-mobile" class="d-block d-sm-none">
          <ul class="list-unstyled" id="lista">
            <li><a href="admin.php">Projetos</a></li>
          </ul>
      </div>

      <div class="container" style="margin-top: 89px;">
        <div class="row" style="float: right;">
          <nav id="menu">
              <ul>
                <li>
            <li><a href="admin.php">Projetos</a></li>
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
              $id=(int)$_POST['id'];
              $consulta="SELECT * FROM projeto where id=$id";
              $exec=mysqli_query($mysql->con,$consulta);
              $linha=mysqli_fetch_assoc($exec);

              $curso=$linha['curso'];

              $consulta2="SELECT * FROM curso where nome_curso='$curso'";
              $exec2=mysqli_query($mysql->con,$consulta2);
              $linha2=mysqli_fetch_assoc($exec2);
              $periodo=$linha2['periodo'];


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
              <a href="admin.php" class="btn btn-outline-secondary Voltar" style="margin-bottom: 20px;"><b>Voltar</b></a>
              <button class="btn btn-secondary" id="laranbotao" data-toggle="modal" data-target="#avaliar" style="margin-bottom: 20px; "><b>Editar</b></button>
            </center>
          </div>
        <div class="modal" id="avaliar" tabindex="-1" role="dialog" style="top: 80px;">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <div class="btn-group"> 
                   <div id="form" style="margin: 5px 5px 5px 5px;">
    <h5 style="color: gray;">*Campos de preenchimento obrigatório</h5>
          <form action="editproj.php"  method="POST">
            <center><h3>Editar Projeto</h3></center>
            <hr style="border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #212529; margin-top: 3px;"> 
                  <b>Id do Projeto:</b>
                 <input type="text" name="id" readonly="" value="<?php echo $id; ?>"><br>  
                 <b>* Nome do Projeto:</b>
                 <input type="text" name="txtnome" value="<?php echo $linha['nome_proj'];?>" required=""><br> 
                  <b>Integrantes Atuais: </b><br><?php echo $linha['integrantes'];?> <br><br>
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
                      <input type="text" name="txtcurso" value="<?php echo $linha['curso']; ?>" readonly>
                 <b>* Professor Responsavel:</b><br>
                 <select name="txtprofresp">
                    <option value="<?php echo $linha['professor_resp']; ?>"><?php echo $linha['professor_resp']; ?></option>
                                 
                 </select ><br><br>
                 <b> Escala atual:</b><br><?php echo $linha['escala']; ?><br>
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
                 <textarea name="txtdesc" required=""><?php echo $linha['descricao_proj']; ?></textarea><br>  
                 <b>* Materiais:</b>
                 <textarea name="txtmat" required=""><?php echo $linha['materiais']; ?></textarea><br>  
                 <b>* Obs:</b>
                 <textarea name="txtobs" required=""><?php echo $linha['obs']; ?></textarea><br>
                 <center><button type="submit" id="btcad" class="btn btn-success">ATUALIZAR</button></center>
          </form> 
              </div>    
              </div>
              </div>
            </div>
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