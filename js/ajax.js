$(document).ready(function () {
    function recharcher() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=resultatVoyage&depart=' + $('#depart').val() + '&arrivee=' + $('#arrivee').val(),
            success: function (data) {
                if (data != "aucun résultat trouvé") {
                    $('#affiche').html(data);
                    $('#err').text('Voyage trouvé');
                } else {
                    $('#err').text('Voyage introuvable');
                    $('#affiche').html('');
                }
            }
        });
    }

    $(document).on('click','#rech',function () {
        recharcher();
    });
 
 
    function retoureToConnexion() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=connecteUtilisateur',
            success: function (data) {
                    $('#page_maincontent').html(data);  
                    $('#err').html('');
            }
        });
    }

    $(document).on('click','#connexion' ,function () {
        retoureToConnexion();
    });

    function redirigerVersInscription() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=inscrireUtilisateur',
            success: function (data) {
                    $('#page_maincontent').html(data);   
            }
        });
    }

    $(document).on('click','#inscription' ,function () {
        redirigerVersInscription();
    });


    function connexion() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=connection&identifiant=' + $('#identifiant').val() + '&modePass=' + $('#modePass').val(),
            success: function (data) {
                if($.trim(data) != "aucun"){
                    $('#nom').html(data);  
                    $('#conteneur_profil').html('<button id="btnProfil">Profil</button>');
                    $('#err').text('Connexion réussi ');
                    $.ajax({
                        type: 'GET',
                        url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=viewFormulaire',
                        success: function (data) {
                                $('#page_maincontent').html(data);   
                        }
                    });
                }else{
                    $('#err').text('Connexion echoué ');
                }
            }
        });
    }

    $(document).on('click','#con' ,function () {
        connexion();
    });


    function inscrire() {
        $.ajax({
            type: 'GET',
            url:'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=inscrire&identifiant=' + $('#identifiant').val() + '&modePass=' + $('#modePass').val()+ '&nom=' + $('#nom').val() + '&prenom=' + $('#prenom').val(),

            success: function (data) {
                    $('#conteneur_profil').html('<button id="btnProfil">Profil</button>');
                    $('#err').text('Inscription réussi ');
                   $.ajax({
                   type: 'GET',
                   url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=viewFormulaire',
                    success: function (data) {
                         $('#page_maincontent').html(data);      
                           }
                         });
            }
        });
    }

    $(document).on('click','#insc' ,function () {
        inscrire();
    });


    function deconnexion() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=deconnexion',
            success: function (data) {                   
                    $.ajax({
                        type: 'GET',
                        url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=viewFormulaire',
                        success: function (data) {
                                $('#page_maincontent').html(data);   
                        }
                    });
                
            }
        });
    }

    $(document).on('click','#deconnexion' ,function () {
        deconnexion();
    });


    function profil() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=profil',
            success: function (data) {
                $('#page_maincontent').html(data);  
            }
        });
    }

    $(document).on('click','#btnProfil' ,function () {
        profil();
    });

    function reserver(id) {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=reserver&voyage_id='+id,
            success: function (data) {
                
            }
        });
    }

    $(document).on('click','#reserver' ,function () {
        reserver($(this).attr('class'));
    });


    function Proposer() {
        $.ajax({
            type: 'GET',
            url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=ProposerVoyage',
            success: function (data) {
                    $('#page_maincontent').html(data);  
            }
        });
    }

    $(document).on('click','#Proposer' ,function () {
        Proposer();
    });



    function creer() {
        $.ajax({
            type: 'GET',
            url:'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=creerVoyage&villeDepart=' + $('#villeDepart').val() + '&villeArrivee=' + $('#villeArrivee').val()+ '&heuredepart=' + $('#heuredepart').val() + '&nombreplaces=' + $('#nombreplaces').val()  + '&tarif=' + $('#tarif').val()  + '&contraintes=' + $('#contraintes').val() ,

            success: function (data) {
                   $.ajax({
                   type: 'GET',
                   url: 'https://pedago.univ-avignon.fr/~uapv2300275/CERICar/squelette_L3/monApplicationajax.php?action=viewFormulaire',
                    success: function (data) {
                         $('#page_maincontent').html(data);      
                           }
                         });
            }
        });
    }

    $(document).on('click','#creer' ,function () {
        creer();
    });


});