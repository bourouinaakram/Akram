<?php

foreach ($context->reservation as $reservation) {
    echo 'La reservation n° ' . $reservation->id . ' avec le voyageur n° ' . $reservation->voyageur->id. ' : ' . $reservation->voyageur->nom. '  ' . $reservation->voyageur->prenom . ' est le conducteur n° ' . $reservation->voyage->conducteur->id. ' : ' . $reservation->voyage->conducteur->nom. ' ' . $reservation->voyage->conducteur->prenom  ;
    echo '<br>';
}
?>
