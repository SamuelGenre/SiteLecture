<?php

// Renvoie la liste des produits
function getProduits() {
    $cnx = getCnx();
    $produits = $cnx->query('select id,categorie,nom,description,prix,stock,maj '
                            . 'from tbl_produits '
                            . ' order by id desc;');
    return $produits;
}

// Renvoie les informations sur un produits
function getProduit($id) {
    $cnx = getCnx();
    $strSQL = ("select * from tbl_produits where id = '". $id . "'");
    $Resultat = $cnx->query($strSQL);
    $nbLig = $Resultat->rowCount();
    if ($nbLig == 1) { // Vérification de l'existant du produit
    	 //Méthode fetch() extration ligne par ligne ici une seule ligne
    	$produit = $Resultat->fetch();
    	return $produit;
    }
    else 
	  {
	    //Stop l'exécution du programme sur une exception
	    throw new Exception("Produit inconnu");
	    return;
	  }
}

// Essai de connexion à la Base De Données
// Instancie et renvoie l'objet PDO associé ($cnx)
function getCnx() {
	// Paramètres de connexion 
    $PARAM_sgbd         ='mysql';       // SGBDR
    $PARAM_hote         ='localhost';   // le chemin vers le serveur 
    $PARAM_port         ='3306';        // Port de connexion
    $PARAM_nom_bd       ='dbailtech';   // le nom de votre base de données
    $PARAM_utilisateur  ='root';        // nom utilisateur 
    $PARAM_mot_passe    ='';            // mot de passe utilisateur
    $PARAM_dsn          =$PARAM_sgbd.':host='.$PARAM_hote.';dbname='.$PARAM_nom_bd; // Nom de la source de données

    $cnx = new PDO($PARAM_dsn, $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    return $cnx;

}

//$cnx­>commit()
//$cnx­>rollBack();

?>