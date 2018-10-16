<html>
<head>
</head>
<body>
<?php
	include "check.php";
?>
<?php
if(false){
	
	
	
}else{
		
	$msgid = $_POST['html'];
	$title = $_POST['title'];
	$cam=$_POST['guia'];
	$prev=$_POST['demo'];
	$oldMessage = "<!--html-->";
	$oldtitle = "<!--title-->";
	//cria o arquivo
	$model = fopen("model.html", "r");
	//read the entire string
	$str=fread($model,10240);

	//replace something in the file string - this is a VERY simple example
	$str=str_replace($oldMessage,$msgid,$str);
	$str=str_replace($oldtitle,$title,$str);
	//write the entire string
	
	//Meu codigo^^
	//procura a img principal
	$pos=strpos($str, "alt=\"princ\"");
	if($pos!=FALSE){
		$posi=$pos;
		$posf=$pos;
		do{
			$posi--;
		
		}while($str[$posi]!="<");
		do{
			$posf++;
		
		}while($str[$posf]!=">");
		$lenght=$posf-$posi;
		$lenght++;
		$imag=substr($str, $posi, $lenght);
		$imag=preg_replace("~\"~","'",$imag);
	}else{
		$pos=strpos($str, "<img src");
		$posi=$pos;
		$posf=$pos;
		do{
			$posf++;
		
		}while($str[$posf]!=">");
		$lenght=$posf-$posi;
		$lenght++;
		$imag=substr($str, $posi, $lenght);
		$imag=preg_replace("~<img~","<img class=\"imgss\"",$imag);
		$imag=preg_replace("~\"~","'",$imag);
		
		
	}
	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "pesca";
	$user = "root";
	$pass = "root";
	// conecta ao banco de dados
	$conn = mysqli_connect($host, $user, $pass, $db); 
	// cria a instrução SQL que vai selecionar os dados
	$sql = "INSERT INTO posts (titulo,img,guia,p) VALUES (\"".$title."\",\"".$imag."\",\"".$cam."\",\"".$prev."\");";
	// executa a query
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "SELECT MAX(postid) FROM posts;";
	// executa a query
	 $result=mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		//termina de escrever o arquivo
		$nfile = fopen("../".$cam."/".implode("|",$row).".html", "w");
		fwrite($nfile, $str);
	
	
/*	
	 SELECT MAX(postid) FROM posts
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);
	
*/
}
?>
</body>
</html>