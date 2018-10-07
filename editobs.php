	<?php

if(!function_exists("antisql")) {
function antisql($campo, $adicionaBarras = false) {
// remove palavras que contenham sintaxe sql
$campo = preg_replace("/(from|alter table|select|insert|delete|update|where|drop table|show tables|#|\*|\\\\)/i","-----",$campo);
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
$obs=$_POST['obs'];
$obs=antisql($obs);
$proj=$_POST['proj'];
if(isset($_POST['nota'])){
$nota=$_POST['nota'];
$nota=antisql($nota);

$sql="UPDATE avaliacoes set obsprof='$obs', nota='$nota' where projeto='$proj'";
}
else{

$sql="UPDATE avaliacoes set obsprof='$obs' where projeto='$proj'";

}

$resultado = $mysql->sqlobs($sql);


?>