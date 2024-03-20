<?php

class mainController
{

	public static function helloWorld($request,$context)
	{
		$context->mavariable="hello world";
		$context->notification="hello world";
		return context::SUCCESS;
	}



	public static function index($request,$context){
		
		$context->notification="index";
		return context::SUCCESS;
	}

    
	public static function superTest($request,$context){

		$context->notification="superTest";
		if(isset($request["PARAM1"])){
			$context->mavariable1=$request["PARAM1"];
		}

		if(isset($request["PARAM2"])){
			$context->mavariable2s=$request["PARAM2"];
		}

		return context::SUCCESS;
	}

 public static function connection($request,$context){
  
	$context->user=utilisateurTable::getUserByLoginAndPass($request['identifiant'], $request['modePass']);
  
	return context::SUCCESS;
 }

 public static function inscrire($request,$context){
  
	$context->user=utilisateurTable::inscriptionUser($request['identifiant'], $request['modePass'],$request['nom'],$request['prenom']);
  
	return context::SUCCESS;
 }

 public static function numtrajet($request,$context){
  
	$context->trajet=trajetTable::getTrajet('Brest', 'Amiens');
  
	return context::SUCCESS;
 }
 
 public static function collectvoyages($request,$context){
  
	$context->voyage=voyageTable::getVoyagesByTrajet(355);
  
	return context::SUCCESS;
 }

 public static function collectreservation($request,$context){
  
	$context->reservation=reservationTable::getReservationByVoyage(1);
  
	return context::SUCCESS;
 }

 public static function ifnoutilisateur($request,$context){
  
	$context->iduser=utilisateurTable::getUserById(1);
  
	return context::SUCCESS;
 }

 public static function viewFormulaire($request,$context){
  
	return context::SUCCESS;

 }

 public static function resultatVoyage($request,$context){
 
	$context->trajet=trajetTable::getTrajet($request['depart'], $request['arrivee']);
	$context->voyage=voyageTable::getVoyagesByTrajet($context->trajet);

	return context::SUCCESS;
 }

 public static function connecteUtilisateur($request,$context){
  
	return context::SUCCESS;

 }

 public static function inscrireUtilisateur($request,$context){
  
	return context::SUCCESS;

 }

 public static function deconnexion($request,$context){
  
	session_destroy();
	return context::SUCCESS;

 }

 public static function profil($request,$context){
 
    $context->reservation=reservationTable::getReservationByidVoyageur($_SESSION['id']);
	$context->user=utilisateurTable::getUserById($_SESSION['id']);
	$context->voyage=voyageTable::getVoyagesByIdconducteur($context->user);

	return context::SUCCESS;

 }
 

 public static function reserver($request, $context) {

    $voyageId = $request['voyage_id'];
    $reservation = reservationTable::effectuerReservation($voyageId,$_SESSION['id']);
	return context::SUCCESS;
}

public static function ProposerVoyage($request,$context){

	return context::SUCCESS;

 }

 public static function creerVoyage($request,$context){
  
	$context->trajet=trajetTable::getTrajet($request['villeDepart'], $request['villeArrivee']);
	$context->voyage=voyageTable::ajoutVoyage($context->trajet,$_SESSION['id'],$request['tarif'],$request['nombreplaces'],$request['heuredepart'],$request['contraintes']);
  
	return context::SUCCESS;
 }


}
