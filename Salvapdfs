<?php
	$uploaddir = 'uploads';
	$uploadfile = $uploaddir.$_FILES['file']['name'];
	$teste=$_POST['ocultar1'];
	$resp=strcmp($teste , "Visivel");
	if($resp==0){ 
		$visibility = 0;
	}else{
		$visibility = 1;
	}
	if (move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$uploadfile)) {
		include "connection.php";
		session_start();
		$login = $_SESSION['login_usuario'];

		$sql2 = mysql_query("SELECT * from usuario where login = '$login'");
		while($linha = mysql_fetch_array($sql2)){
			$id = $linha['id_usuario'];
		}
		$sql = mysql_query("Insert into arquivo(id_usuario,Nome,Link,Oculto) value ('$id','$uploadfile','$uploadfile',$visibility)") or die(mysql_error());
		header("Location: uploading.php");
		
	} else {
	// Caso seja falso, retornará o erro
	 echo "Nao foi possivel enviar o arquivo";
	}

	#include "connection.php";
	#$pdf = $_POST['pdf'];

	#$sql = mysql_query("Insert into arquivos(Nome,Link,Oculto) value ()") or die(mysql_error());
	#if(mysql_num_rows($sql) == 1){
#		header("Location: uploading.html");
#	}else{
#		echo "<meta http-equiv='refresh' content='0; url= Usuario.html' />
#		<script type='text/javascript'> alert('Senha ou Login nao correspondem.')</script>";
#	}
	
?>
