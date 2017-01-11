<?php
	// On démarre une session
        session_start();
	
	// Si l'utilisateur demande de vider le panier on détruit la session et on en recréer une
	
	
	// On récupère le nombre d'objets
	
	
	// Si l'utilisateur à appuyé sur une image on incrémente le numéro d'objet et on ajoute l'article
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Session</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>		
		<div>			
			Choisissez un article
			<br/><br/>
			<a href="index.php?article=appareil"><img src="appareil.jpg" alt="appareil photo"/></a>
			<a href="index.php?article=mixer"><img src="mixer.jpg" alt="mixer"/></a>
			<a href="index.php?article=barbecue"><img src="barbecue.jpg" alt="barbecue"/></a>
			<a href="index.php?article=cartesd"><img src="cartesd.jpg" alt="cartesd"/></a>
			<a href="index.php?article=jumelles"><img src="jumelles.jpg" alt="jumelles"/></a>
			<a href="index.php?article=chocolats"><img src="chocolats.jpg" alt="chocolats"/></a>
			<a href="index.php?article=telephones"><img src="telephones.jpg" alt="telephones"/></a>
			<a href="index.php?article=lampe"><img src="lampe.jpg" alt="lampe"/></a>
			<a href="index.php?article=porsche"><img src="porsche.jpg" alt="porsche"/></a>			
			<br/><br/>
			<?php
				echo '<p>Votre panier contient : <br/><br/>';
			?>
			<a href="panier.php">Voir mon panier</a>
		</div>		                                            
    </body>
</html>