 <?php if($context->user != null){
   $_SESSION["nom"]=$context->user->nom;
   $_SESSION["prenom"]=$context->user->prenom;
   $_SESSION["id"]=$context->user->id;
    echo ' '.$context->user->nom.' '.$context->user->prenom ; 
   }else{
    echo "aucun";
   } 

?>