<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "pesca";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if(!isset($_COOKIE["ticket"])) {
			$redirect = "http://localhost:25565/adm/";
 
			#abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
			#sua vez aponta para o endereço de onde ocorrerá o redirecionamento
			header("location:$redirect");
		} else {
			
		
		
		$cuqui=$_COOKIE["ticket"];
		$sql = "SELECT * FROM ticket WHERE hash=\"".$cuqui."\"";
		$result = $conn->query($sql);
		
		if ($result->num_rows == 0) {
			// output data of each row
			echo "0";
			#abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
			$redirect = "http://localhost:25565/adm/";
 
			#abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
			#sua vez aponta para o endereço de onde ocorrerá o redirecionamento
			header("location:$redirect");
		}else{

		}
		}
?>		