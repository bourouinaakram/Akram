<?php

foreach ($context->voyage as $voyages) {
    echo 'Le voyage n° ' . $voyages->id . ' avec le conducteur n° ' . $voyages->conducteur->id . ' : ' . $voyages->conducteur->nom. ' ' . $voyages->conducteur->prenom. ' du prix ' . $voyages->tarif . ' avec un nombre de places ' . $voyages->nbplace . ' à l\'heure de départ ' . $voyages->heuredepart;
    echo '<br>';
}
?>
