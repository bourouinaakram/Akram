<?php
// Inclusion de la classe utilisateur
require_once "utilisateur.class.php";

class utilisateurTable {

  public static function getUserByLoginAndPass($login,$pass)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;    //  connexion à la base de données.

	$userRepository = $em->getRepository('utilisateur');  // etuliser la class'utilisateur' pour interroger la base de données.
	$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => $pass));// Cherche un seul utilisateur par son 'identifiant' et 'pass' (mot de passe) dans la base de données.
	
    
	return $user; 
	}


	public static function getUserById($id)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$iduserRepository = $em->getRepository('utilisateur');
	$iduser = $iduserRepository->findOneBy(array('id'=>$id));	
	
	if ($iduser == false){
		echo 'Erreur sql';
			   }
	return $iduser; 
	}
    
    
	public static function inscriptionUser($login,$pass,$nom,$prenom)
	{
	    $em = dbconnection::getInstance()->getEntityManager(); // Connexion à la base de données.

    // Vérifier si l'utilisateur existe déjà
    $userRepository = $em->getRepository('utilisateur');
    $existingUser = $userRepository->findOneBy(array('identifiant' => $login));

    if ($existingUser) {
        // L'utilisateur existe déjà, retourner une erreur ou prendre une autre action appropriée
        return null;
    }

    // Créer une nouvelle instance de la classe 'utilisateur' et définir les propriétés
    $newUser = new utilisateur();
    $newUser->identifiant=$login;
    $newUser->pass=$pass; // Vous devrez peut-être hacher le mot de passe ici
    $newUser->nom=$nom;
    $newUser->prenom=$prenom;

    // Ajouter l'utilisateur à la base de données
    $em->persist($newUser);
    $em->flush();

    // Retourner l'utilisateur nouvellement créé
    return $newUser;
	}
  
}


?>
