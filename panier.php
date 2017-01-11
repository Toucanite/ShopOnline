<?php
	// On démarre une session
	session_start();
  $articles = $_SESSION['articles'];
  $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
  if (isset($_GET['articleNum'])) {
    unset($panier[$_GET['articleNum']]);
		$panier = array_values($panier);
  }

  $_SESSION['panier'] = $panier;
	$nbrObjets = count($panier);
  $_SESSION['nbrObjets'] = $nbrObjets;
	// On récupère le nombre d'articles

	// Si l'utilisateur demande de vider le panier on détruit la session et on en recréer une

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
			<?php
				// Si il y a des objets dans le panier on les fait apparaitre sur la pge
				foreach ($panier as $key => $value) {
					echo '<a href="panier.php?articleNum='.$key.'"><img src="'.$articles[$value].'.jpg"/></a>';
				}
			?>
			<br/>
			<a href="index.php">Retour à l'accueil</a>&nbsp;&nbsp;&nbsp;<a href="index.php?detruire=true">Effacer mon panier</a>
		</div>
    </body>
</html>
