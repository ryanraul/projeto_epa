<?php 
	$password = $_POST['senha'];
	$password1 = $_POST['senha2'];
	$password2 = $_POST['senha3'];
	$password3 = $_POST['senha4'];
	$password4 = $_POST['senha5'];
	$password5 = $_POST['senha6'];
	$password6 = $_POST['senha7'];
	$password7 = $_POST['senha8'];
	$password8 = $_POST['senha9'];
	$password9 = $_POST['senha10'];

	echo sha1($password)."---->".$password."<br>";
	echo sha1($password1)."---->".$password1."<br>";
	echo sha1($password2)."---->".$password2."<br>";
	echo sha1($password3)."---->".$password3."<br>";
	echo sha1($password4)."---->".$password4."<br>";
	echo sha1($password5)."---->".$password5."<br>";
	echo sha1($password6)."---->".$password6."<br>";
	echo sha1($password7)."---->".$password7."<br>";
	echo sha1($password8)."---->".$password8."<br>";
	echo sha1($password9)."---->".$password9."<br>";
 ?>