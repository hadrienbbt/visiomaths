<html>
<body>	
	<?php 
		$nom = $_POST['nom'] ;
		$email = $_POST['email'] ;
		$subject = $_POST['subject'] ;
		$message = $_POST['message'] ;
		$to = 'hbarbat@ensc.fr';
		
		$header = 'From: '.$nom.' <'.$email.'>'."\r\n\r\n";
		 
		if(mail($to,$subject,$message,$header)) { 
			echo '<p>Votre message a bien ete envoye. Merci.</p><p><a href="index.html">Retour a la page d\'accueil</a></p>';
		}
		else
			echo'<p>Un probleme est survenu pendant l\'envoi du mail.</p><p><a href="index.html">Retour a la page d\'accueil</a></p>';
	?>
</body>
</html>