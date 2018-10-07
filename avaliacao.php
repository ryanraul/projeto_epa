<?php
	include_once('config.php');

	$mysql = new BancodeDados();
	$mysql->conecta();



	$idprof= $_POST["idprof"];
	$nomeproj = $_POST['proj'];
	$curso= $_POST['txtcurso'];
	$nota=$_POST['nota'];
	$obs=$_POST['obs'];
	

	$sqlInsert = "INSERT INTO avaliacoes VALUES(0,'$nomeproj','$curso',$idprof,'$nota','$obs')";
	$resultado = $mysql->sqlavaliar($sqlInsert);

?>