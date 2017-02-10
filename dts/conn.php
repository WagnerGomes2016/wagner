<?php

	try{
		$conn = new PDO('mysql:host=localhost; dbname=site_webwagner', 'root', '' );
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conetado com sucesso </br>";
	}
	catch(PDOException $e){
		print "Conexão falida:" .$e->getMessage();
	}

?>