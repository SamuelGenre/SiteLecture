<?php
// Dispatcher
require('./controleur/Controleur.php');

try {
  if (isset($_GET['action'])) 
  {
    if ($_GET['action'] == 'alphabet') {
      alphabet() ; // Acceuil du site
      exit;
    }
    if ($_GET['action'] == 'syllabes') {
      syllabes();  // Liste des produits
      exit;
    }
    if ($_GET['action'] == 'jeux') {
      jeux();  // Liste des produits
      exit;
    }

    else{
      throw new Exception("Action non valide : page non trouvée");
    }
  }

  else {
    alphabet();  // action par défaut
  }
}
catch (Exception $e) {
    erreur($e->getMessage());
}
?>

