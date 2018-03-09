<?php 
	$titre = "Jouons";
	ob_start(); //stockage en tampon
?>
			


<?php 
	$contenu = ob_get_clean();//vidage du tampon
	require 'template.html';
?>