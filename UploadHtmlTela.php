<html>
<body bgcolor="white">
<center>
<link rel="stylesheet" type="text/css" href="/iReaderWeb/css/stile.css"/>
<ul id="menu">
	<li><a> Upload </a></li>
	</br>
</ul>
<br/>
<FORM ENCTYPE="multipart/form-data" action="savepdf.php" method="POST">
<input name="ocultar1" type="radio" value="Oculto" method="POST" checked="checked" onclick="ocultar2.mark=false"/>
<strong> Oculto </strong>

<input name="ocultar1" type="radio" value="Visivel" mark="false" method="POST" checked="checked" onclick="ocultar1.mark=false"/>
<strong> Visivel </strong>

 <br/>
<label> Selecione o arquivo PDF: </label>
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="5000000">
<INPUT NAME="file" SIZE=50 TYPE="file" VALUE=""> <br/>
<INPUT NAME="submit" TYPE="submit" VALUE="Enviar">
<BR>
</FORM>



<?php 
	
	include "connection.php";
	$sql = mysql_query("SELECT * from arquivo");
	?>
	<?php
	while($linha = mysql_fetch_array($sql)){
		$nome = $linha['nome'];
		?>
		
			<li><a href = <?php echo "uploads/$nome"; ?> > <?php echo $nome;?> </a> <br/></li>
		
		<?php
	}
	?>
	

	


</center>
</body>

</html>
