<?php
// Inclusion de la classe utilisateur
require_once "voyage.class.php";

class voyageTable {

  public static function getVoyagesByTrajet($trajet)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$voyageRepository = $em->getRepository('voyage');
	$voyage = $voyageRepository->findBy(array('trajet'=>$trajet));	
	

	return $voyage; 
	}

  public static function getVoyagesByIdconducteur($idconducteur)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$voyageRepository = $em->getRepository('voyage');
	$voyage = $voyageRepository->findBy(array('conducteur'=>$idconducteur));	
	

	return $voyage; 
	}

  
	public static function ajoutVoyage($idtrajet, $idconducteur, $tarif, $nbp, $heuredepart, $contraintes)
{ 
    $em = dbconnection::getInstance()->getEntityManager(); // Connexion à la base de données.

    // Récupérer l'objet utilisateur correspondant à partir de l'identifiant
    $userRepository = $em->getRepository('utilisateur');
    $conducteur = $userRepository->find($idconducteur);

    // Vérifier si l'utilisateur existe déjà
    if (!$conducteur) {
        // Gérer l'erreur, l'utilisateur n'existe pas
        return null;
    }

    // Créer une nouvelle instance de la classe 'voyage' et définir les propriétés
    $newVoyage = new voyage();
    $newVoyage->trajet = $idtrajet;
    $newVoyage->conducteur = $conducteur; // Assigner l'objet utilisateur
    $newVoyage->tarif = $tarif;
    $newVoyage->nbplace = $nbp;
    $newVoyage->heuredepart = $heuredepart;
    $newVoyage->contraintes = $contraintes;

    // Ajouter le voyage à la base de données
    $em->persist($newVoyage);
    $em->flush();

    // Retourner le voyage nouvellement créé
    return $newVoyage;
} 

}


?>
