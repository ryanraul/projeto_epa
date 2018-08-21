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




	$nome= $_POST["txtnome"];
	$nome=antisql($nome);
	$curso = $_POST["txtcurso"];
	$curso=antisql($curso);
	$professor= $_POST["txtprofresp"];
	$professor=antisql($professor);
	if(isset($_POST['txtescala1m'])){
	$diaumanha= "<b>1° dia de manhã:</b> ".$_POST["txtescala1m"]."<br>";
	$diaumanha=antisql($diaumanha);
}

	else{

		$diaumanha="";

		}

	if(isset($_POST['txtescala1t'])){
	$diaumtarde = "<br>\n"."<b>1° dia de tarde:</b> ".$_POST["txtescala1t"]."<br>";
	$diaumtarde = antisql($diaumtarde);
}

	else{

		$diaumtarde="";


	}

	if(isset($_POST['txtescala2m'])){
	$diadoismanha = "<br>\n"."<b>2° dia de manha:</b> ".$_POST["txtescala2m"]."<br>";
	$diadoismanha=antisql($diadoismanha);
}

else{

	$diadoismanha="";

}
	
	if(isset($_POST['txtescala2t'])){
	$diadoistarde = "<br>\n"."<b>2° dia de tarde:</b> ".$_POST["txtescala2t"]."<br>";
	$diadoistarde=antisql($diadoistarde);
}

else{

	$diadoistarde="";

}

	if (isset($_POST['txtescala1n'])){
		$diaumnoite= "<br>\n"."<b>1° dia de noite:</b> ".$_POST["txtescala1n"]."<br>";
		$diaumnoite=antisql($diaumnoite);
	} 
	else{
			$diaumnoite="";
		
	}


	if (isset($_POST['txtescala2n'])){
		$diadoisnoite= "<br>\n"."<b>2° dia de noite:</b><BR> ".$_POST["txtescala2n"]."<br>";
		$diadoisnoite=antisql($diadoisnoite);
	} 
	else{
			$diadoisnoite="";
		
	}



	$integrante1= $_POST["txtinte1"];
	$integrante1=antisql($integrante1);
	$integrante2= $_POST["txtinte2"];
	$integrante2=antisql($integrante2);
	$integrante3= $_POST["txtinte3"];
	$integrante3=antisql($integrante3);

	if (isset($_POST['txtinte4'])){
		$integrante4= $_POST["txtinte4"];
		$integrante4=antisql($integrante4);
	} 
	else{
			$integrante4="--";
		
	}

	if (isset($_POST['txtinte5'])){
		$integrante5= $_POST["txtinte5"];
		$integrante5=antisql($integrante5);
	} 
	else{
			$integrante5="--";
		
	}


	if (isset($_POST['txtinte6'])){
		$integrante6= $_POST["txtinte6"];
		$integrante6= antisql($integrante6);
	} 
	else{
			$integrante6="--";
		
	}

	if (isset($_POST['txtinte7'])){
		$integrante7=  $_POST["txtinte7"];
		$integrante7=antisql($integrante7);
	} 
	else{
			$integrante7="--";
		
	}

	$desc= $_POST["txtdesc"];
	$desc=antisql($desc);
	$materiais =$_POST["txtmat"];
	$materiais=antisql($materiais);
	$obs= $_POST["txtobs"];
	$obs=antisql($obs);

	if(!is_numeric($nome) and !is_numeric($curso) and !is_numeric($professor) and !is_numeric($diaumanha) and !is_numeric($diaumtarde) and !is_numeric($diaumnoite) and !is_numeric($diadoismanha) and !is_numeric($diadoistarde) and !is_numeric($diadoisnoite) and !is_numeric($integrante1) and !is_numeric($integrante2) and !is_numeric($integrante3) and !is_numeric($integrante4) and !is_numeric($integrante5) and !is_numeric($integrante6) and !is_numeric($integrante7))
	
{



	$integ= $integrante1."<br>\n".$integrante2."<br>\n".$integrante3."<br>\n".$integrante4."<br>\n".$integrante5."<br>\n".$integrante6."<br>\n".$integrante7;


	$escala= $diaumanha."<br>".$diaumtarde."<br>".$diaumnoite."<br>".$diadoismanha."<br>".$diadoistarde."<br>".$diadoisnoite;

	$sqlInsert = "INSERT INTO projeto VALUES(0,'$nome','$integ','$curso','$professor','$escala','$desc','$materiais','$obs')";
	$resultado = $mysql->sqlcadproj($sqlInsert);
}



else{


echo ' <script type = "text/javascript">
        alert("Erro! Preencha os dados corretamente. Dica: Evite usar valores numéricos.");
      </script>
        <meta http-equiv="refresh" content="0; url=index.php">';

}
?>
