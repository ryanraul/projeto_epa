	<?php

	include_once('config.php');
	$mysql = new BancodeDados();
	$mysql->conecta();

	$nome=$_POST["txtnome"];
	$curso = $_POST["txtcurso"];
	$professor=$_POST["txtprofresp"];





	$integrante1=$_POST["txtinte1"];
	$integrante2=$_POST["txtinte2"];
	$integrante3=$_POST["txtinte3"];

	if (isset($_POST['txtescala1n'])){
		$diaumnoite = $_POST["txtescala1n"];
	}else{
		$diaumnoite = "--";
	}

	if (isset($_POST['txtescala1m'])){
		$diaumanha=$_POST["txtescala1m"];
		$diaumtarde = $_POST["txtescala1t"];
	}else{
		$diaumanha="--";
		$diaumtarde ="--";
	}

	if (isset($_POST['txtescala2m'])){
		$diadoismanha = $_POST["txtescala2m"];
		$diadoistarde = $_POST["txtescala2t"];
	}else{
		$diadoismanha ="--";
		$diadoistarde ="--";
	}

	if (isset($_POST['txtescala2n'])){
		$diadoisnoite = $_POST["txtescala2n"];
	}else{
		$diadoisnoite ="--";
	}

	if (isset($_POST['txtinte4'])){
		$integrante4=$_POST["txtinte4"];
	} 
	else{
		$integrante4="--";
	}

	if (isset($_POST['txtinte5'])){
		$integrante5=$_POST["txtinte5"];
	} 
	else{
		$integrante5="--";
	}

	if (isset($_POST['txtinte6'])){
		$integrante6=$_POST["txtinte6"];
	} 
	else{
		$integrante6="--";
	}


	if (isset($_POST['txtinte7'])){
		$integrante7=$_POST["txtinte7"];
	} 
	else{
		$integrante7="--";
	}


	$desc=$_POST["txtdesc"];
	$materiais = $_POST["txtmat"];
	$obs=$_POST["txtobs"];


	$integ= $integrante1."<br>\n".$integrante2."<br>\n".$integrante3."<br>\n".$integrante4."<br>\n".$integrante5."<br>\n".$integrante6."<br>\n".$integrante7;


	$escala= "<b>1° dia de manhã:</b> ".$diaumanha."<br>\n"."<b>1° dia de tarde:</b> ".$diaumtarde."<br>\n"."<b>1° dia de noite:</b> ".$diaumnoite."<br>\n"."<b>2° dia de manha:</b> ".$diadoismanha."<br>\n"."<b>2° dia de tarde:</b> ".$diadoistarde."<br>\n"."<b>2° dia de noite:</b> ".$diadoisnoite;

	$sqlInsert = "INSERT INTO projeto VALUES(0,'$nome','$integ','$curso','$professor','$escala','$desc','$materiais','$obs')";
	$resultado = $mysql->sqlcadproj($sqlInsert);
?>
