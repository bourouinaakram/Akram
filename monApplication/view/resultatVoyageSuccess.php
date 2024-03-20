<?php
// ...

if (count($context->voyage) != 0) {
    echo '<div class="result-container">';
    foreach ($context->voyage as $voyages) {
        echo '<div class="result-card">';
        echo '<div class="result-item">';
        echo '<h4>' . $voyages->conducteur->nom . ' ' . $voyages->conducteur->prenom . '</h4>';
       // echo '<span><strong>Num:</strong> ' . $voyages->id . '</span>';
        echo '<span><strong>Nb Places:</strong> ' . $voyages->nbplace . '</span>';
        echo '<span><strong>Heure de Départ:</strong> ' . $voyages->heuredepart . '</span>';
        echo '</div>';
        echo '<div class="result-item right-content">';
        echo '<span><strong>Prix:</strong> ' . $voyages->tarif . ' <span class="euro-symbol">€</span></span>';
        echo '<span class="distance"><strong>Distance (km):</strong> ' . $voyages->trajet->distance . '</span>';
        if(isset($_SESSION["nom"]) && isset($_SESSION["prenom"]) && isset($_SESSION["id"])){        
        echo '<button id="reserver" class="'.$voyages->id.'" onclick="reserver()"  type="button">Reserver</button>';
        }
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'aucun résultat trouvé';
}
?>
