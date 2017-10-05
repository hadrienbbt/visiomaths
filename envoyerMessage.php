<?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'root', 'root');
mysql_select_db ('sharedPlayer', $base) ;
mysql_query("SET NAMES UTF8"); 

// lancement de la requete
	$sql = 'INSERT INTO `user` (nom, position, musique)
			VALUES ("Hadrien","a la casa","'.$_GET['message'].'");';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	
	mysql_free_result ($req);
	mysql_close (); 


	// header('Location: http://localhost:8888/admin.php');

?>