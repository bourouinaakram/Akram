<div class="registration-container">
    <h2>Proposer un voyage</h2>
    
        <label for="depart">ville de Départ:</label>
        <input type="text" id="villeDepart" name="depart" required>

        <label for="arrivee">ville de Arrivée:</label>
        <input type="text" id="villeArrivee" name="arrivee" required>

        <label for="heure">heure de départ:</label>
        <input type="text" id="heuredepart" name="heure" required>

        <label for="nbplace">le nombre de places disponibles:</label>
        <input type="text" id="nombreplaces" name="nbplace" required>

        <label for="tarif">tarif:</label>
        <input type="text" id="tarif" name="tarif" required>

        <label for="commentaires">contraintes particulières:</label>
        <input type="text" id="contraintes" name="commentaires" required>

        <button id ="creer" onclick="creer()" type="submit">Creer</button>
    
</div>