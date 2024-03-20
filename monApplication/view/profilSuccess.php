<?php

echo '<div class="result-profil">';
echo '<h2> Information</h2>';
echo '<div class="photo-container-profil"></div>';
echo '<h4>' . $_SESSION["nom"] . ' ' . $_SESSION["prenom"] . '</h4>';
echo '<br>';
echo '<span><strong>NUM: </strong>' . $_SESSION["id"] . '</span>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h2> Reservation</h2>';
echo '<table>';
echo '<tr><th>Ville de Depart</th><th>Ville de Arrivee</th><th>Avec le conducteur</th><th>Nb Places</th><th>Heure de Départ</th><th>Prix(€)</th><th>Distance (km)</th></tr>';
foreach ($context->reservation as $reservation) {
    echo '<tr>';
    echo '<td>' . $reservation->voyage->trajet->depart . '</td>';
    echo '<td>' . $reservation->voyage->trajet->arrivee . '</td>';
    echo '<td>' . $reservation->voyage->conducteur->nom . ' ' . $reservation->voyage->conducteur->prenom . '</td>';
    echo '<td>' . $reservation->voyage->nbplace . '</td>';
    echo '<td>' . $reservation->voyage->heuredepart . '</td>';
    echo '<td>' . $reservation->voyage->tarif . '</td>';
    echo '<td>' . $reservation->voyage->trajet->distance . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<h2> Voyage Proposer</h2>';
echo '<table>';
echo '<tr><th>Ville de Depart</th><th>Ville de Arrivee</th><th>Avec le conducteur</th><th>Nb Places</th><th>Heure de Départ</th><th>Prix(€)</th><th>Distance (km)</th></tr>';
foreach ($context->voyage as $voyage) {
    echo '<tr>';
    echo '<td>' . $voyage->trajet->depart . '</td>';
    echo '<td>' . $voyage->trajet->arrivee . '</td>';
    echo '<td>' . $voyage->conducteur->nom . ' ' . $voyage->conducteur->prenom . '</td>';
    echo '<td>' . $voyage->nbplace . '</td>';
    echo '<td>' . $voyage->heuredepart . '</td>';
    echo '<td>' . $voyage->tarif . '</td>';
    echo '<td>' . $voyage->trajet->distance . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</div>';


?>