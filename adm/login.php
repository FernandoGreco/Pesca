<?php
$tipo=$_POST["tipo"];
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "pesca";

if($tipo=="1"){
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$u=$_POST["user"];
		$s=$_POST["senha"];
		$sql = "SELECT * FROM login WHERE user= ".$u."  AND senha=".$s.";";
		$result = $conn->query($sql);

		if ($result == 0) {
			
			//INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
			$rand=rand();
			$sql = "INSERT INTO ticket (hash) VALUES (\"".$rand."\")";
			$conn->query($sql);
			echo $rand;
		}else{
			// output data of each row
			echo "0";
		}
	}elseif($tipo=="2"){

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM ticket WHERE hash=\"".$_POST['cookie']."\"";
		$result = $conn->query($sql);
		
		if ($result->num_rows == 0) {
			// output data of each row
			echo "0";
		}else{
			//INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
			$rand=rand();
			$sql = "INSERT INTO ticket (hash) VALUES (\"".$rand."\")";
			$conn->query($sql);
			echo "true";
		}
		
	}
exit;
?>