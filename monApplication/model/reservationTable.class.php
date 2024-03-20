<?php
// Inclusion de la classe utilisateur
require_once "reservation.class.php";

class reservationTable {

  public static function getReservationByVoyage($voyage)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$reservationRepository = $em->getRepository('reservation');
	$reservation = $reservationRepository->findBy(array('voyage'=>$voyage));	    // La méthode 'findBy' est utilisée pour récupérer des collections d'objets 
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation; 
	}


	public static function effectuerReservation($voyageId,$idvoyageur) {
		$em = dbconnection::getInstance()->getEntityManager();
	
		// Récupérer le voyage par son ID
		$voyageRepository = $em->getRepository('voyage');
		$voyage = $voyageRepository->findOneBy(array('id'=>$voyageId));
	
		// Vérifier si le voyage existe
		if (!$voyage) {
			echo 'Erreur: Voyage non trouvé';
			return false;
		}

		$voyageRepository = $em->getRepository('utilisateur');
		$user = $voyageRepository->findOneBy(array('id'=>$idvoyageur));
	
		// Vérifier si le voyage existe
		if (!$user) {
			echo 'Erreur: user non trouvé';
			return false;
		}
	
		// Vérifier s'il y a des places disponibles
		if (($voyage->nbplace) <= 0) {
			echo 'Erreur: Aucune place disponible pour ce voyage';
			return false;
		}
	
		// Décrémenter le nombre de places disponibles
		$voyage->nbplace=(($voyage->nbplace) - 1);
	
		// Créer une nouvelle réservation
		$reservation = new reservation();
		$reservation->voyage=$voyage;
	    $reservation->voyageur=$user;
		// Ajouter la réservation à la base de données
		$em->persist($reservation);
		$em->flush();
	
		// Mettre à jour le voyage dans la base de données
		$em->persist($voyage);
		$em->flush();
	
		// Retourner la réservation
		return $reservation;
	}


	public static function getReservationByidVoyageur($idvoyageur)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$reservationRepository = $em->getRepository('reservation');
	$reservation = $reservationRepository->findBy(array('voyageur'=>$idvoyageur));	    // La méthode 'findBy' est utilisée pour récupérer des collections d'objets 
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation; 
	}
	

  
}


?>
