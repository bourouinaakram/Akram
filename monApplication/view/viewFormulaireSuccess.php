
       <?php
        if(isset($_SESSION["nom"]) && isset($_SESSION["prenom"]) && isset($_SESSION["id"])){
                   
            echo '<button id="btnProfil" onclick="profil()"  type="button">profil</button>';

        }
        ?> 
    <div class="search-voyage">
        
            <label for="depart">Départ:</label>
            <input type="text" id="depart"  placeholder="Saisir le lieu de départ...">

            <label for="arrivee">Arrivée:</label>
            <input type="text" id="arrivee" placeholder="Saisir le lieu d'arrivée...">

            <button id="rech" onclick="recharcher()" type="submit">Rechercher</button>
        <?php
        if(!isset($_SESSION["nom"]) && !isset($_SESSION["prenom"]) && !isset($_SESSION["id"])){
                   
            echo '<button id="connexion" onclick="retoureToConnexion()"  type="button">Connexion</button>';

        }else{
            echo '<button id="Proposer" onclick="Proposer()"  type="button">Proposer</button>';
            echo' ';
            echo '<button id="deconnexion" onclick="deconnexion()"  type="button">Deconnexion</button>';
                

        }
        
        ?>         

    </div>

    <div id="affiche">
        
    </div>

