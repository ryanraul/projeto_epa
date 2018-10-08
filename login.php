	<?php

if(!function_exists("antisql")) {
function antisql($campo, $adicionaBarras = false) {
// remove palavras que contenham sintaxe sql
$campo = preg_replace("/(from|alter table|select|insert|delete|update|were|drop table|show tables|#|\*|--|\\\\)/i","Anti Sql-Injection  !",$campo);
$campo = trim($campo);//limpa espaços vazio
$campo = strip_tags($campo);//tira tags html e php
if($adicionaBarras || !get_magic_quotes_gpc())
$campo = addslashes($campo);
return $campo;
} }
?>

<?php  
	include_once('config.php');
	$mysql = new BancodeDados();
	$mysql->conecta();
	session_start();
				

	$usuario = $_POST['txtLogin'];
	$usuario = antisql($usuario);

	$senha = sha1($_POST['txtSenha']);
	$senha = antisql($senha);

	 $consulta = "SELECT * FROM usuario WHERE login = '$usuario'  AND senha ='$senha'";

	$executador = mysqli_query($mysql->con, $consulta);
	$linha=mysqli_fetch_assoc($executador);
	$nivel_acesso=$linha['nivel_acesso'];

	if (mysqli_num_rows($executador) == 1) {
		$_SESSION['login'] = $usuario;
		$_SESSION['senha'] = $senha;
		$_SESSION['nivel_acesso']=$nivel_acesso;

		if($nivel_acesso==2){

		header("Location: projetos.php");
	}

	else if($nivel_acesso==1){

		header("Location: projetosalu.php");

	}
	else if($nivel_acesso==3){

		header("Location: admin.php");

	}

	} else {
		echo '<script type="text/javascript"> alert("Nome de Usuario ou senha invalidos!");</script>';
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
?>