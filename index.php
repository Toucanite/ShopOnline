<?php
	// On démarre une session
  session_start();
  $articles = array('appareil', 'mixer', 'barbecue', 'cartesd', 'jumelles', 'chocolats', 'telephones', 'lampe', 'porsche');
  $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
  if (isset($_GET['article'])) {
    array_push($panier, $_GET['article']);
  }

  $_SESSION['articles'] = $articles;
  $_SESSION['panier'] = $panier;
	// Si l'utilisateur demande de vider le panier on détruit la session et on en recréer une
  if (isset($_GET['detruire'])) {
    if ($_GET['detruire']) {
      session_destroy();
      exit;
    }
  }

	// On récupère le nombre d'objets
  $nbrObjets = count($panier);
  $_SESSION['nbrObjets'] = $nbrObjets;
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
			<a href="index.php?article=0"><img src="appareil.jpg" alt="appareil photo"/></a>
			<a href="index.php?article=1"><img src="mixer.jpg" alt="mixer"/></a>
			<a href="index.php?article=2"><img src="barbecue.jpg" alt="barbecue"/></a>
			<a href="index.php?article=3"><img src="cartesd.jpg" alt="cartesd"/></a>
			<a href="index.php?article=4"><img src="jumelles.jpg" alt="jumelles"/></a>
			<a href="index.php?article=5"><img src="chocolats.jpg" alt="chocolats"/></a>
			<a href="index.php?article=6"><img src="telephones.jpg" alt="telephones"/></a>
			<a href="index.php?article=7"><img src="lampe.jpg" alt="lampe"/></a>
			<a href="index.php?article=8"><img src="porsche.jpg" alt="porsche"/></a>
			<br/><br/>
			<?php
				echo '<p>Votre panier contient : <br/><br/>';
			?>
			<a href="panier.php">Voir mon panier</a>
		</div>
    </body>
</html>
