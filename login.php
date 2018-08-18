<?php  
	include_once('config.php');
	$mysql = new BancodeDados();
	$mysql->conecta();
	session_start();
				

	$usuario = $_POST['txtLogin'];
	$senha = sha1($_POST['txtSenha']);

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

		header("Location: cadastro.php");

	}

	} else {
		echo '<script type="text/javascript"> alert("Nome de Usuario ou senha invalidos!");</script>';
		echo '<meta http-equiv="refresh" content="0;url=index.html">';
	}
?>