<?php
	class BancodeDados{
		private $host = "sql10.freemysqlhosting.net
:3306";
		private $user = "sql10253233";
		private $pass = "I3LMa99yGC
";
		private $banco = "sql10253233";
		public $con;

		function conecta(){
			$this->con =mysqli_connect($this->host,$this->user,$this->pass,$this->banco);
			
			if (!$this->con) {
				die("Problemas de conexão: ".mysqli_connect_error($this->con)); //O "mysqli_connect_error" ele aponta o erro.
			} 
				
			
		}
		function fechar(){
			mysqli_close($this->con);
			return;
		}

		function sqlquery($string){
			$resultado = mysqli_query($this->con,$string);
			if(!$resultado){
				 die('query invalida:'.mysqli_error($this->con));

			}else{
				$num = mysqli_num_rows($resultado);
				if ($num == 0) {
					echo "Registro Não localizado<br><br>";
				echo '<input type="button" onclick ="window.location='."'$caminho'".';"value = "voltar" ><br><br>';
				exit;
				}else {

					$dados = mysqli_fetch_array($resultado);

				}
			}
			$this->fechar();
			return $dados;
		}
		function sqlcadproj($string){
			$resultado = mysqli_query($this->con,$string);
			if(!$resultado){

				echo'<input type="button" onclick="window.location'."'cadastro.php'".';"value="voltar"><br><br>';
				die('Query inválido: '.mysqli_error($this->con));

			}else{

			echo ' <script type = "text/javascript">
        alert("Projeto cadastrado com sucesso!");
      </script>
        <meta http-equiv="refresh" content="0; url=cadastro.php">';

			}
			
		}


			
			
		}



			
			
		
	
?>