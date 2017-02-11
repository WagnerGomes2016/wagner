<?php

//BASE DO SITE PARA WINDOWS
//define('BASE','http://localhost/CopiasDosSites/Site_definitivo/site-webwagner');

//BASE DO SITE PARA WINDOWS PENDRIVE
//define('BASE','http://localhost/CopiasDosSites/Site_definitivo/site-webwagner');

//BASE DO SITE PARA LINUX
define('BASE','http://localhost/git/wagner-linux/wagner.1');

//DEFINE O SERVIDOR DE E-MAIL
define('MAILUSER','');
define('MAILPASS','');
define('MAILPORT','');
define('MAILHOST','');

//MEUS DADOS
define('ENDERECO','');
define('TELEFONE','');

//DEFINE BANCO DEDADOS
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','projquery');

/*try {
		$conn = new PDO("mysql:host=HOST;dbname=DBSA", USER, PASS);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully"; 
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
*/



