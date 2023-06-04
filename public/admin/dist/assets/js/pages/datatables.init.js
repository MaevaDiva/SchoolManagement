$(document).ready(function() {
    jQuery.extend( jQuery.fn.dataTableExt.oSort, {
        "date-uk-pre": function ( a ) {
            if (a == null || a == "") {
                return 0;
            }
            var ukDatea = a.split('/');
            return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
        },
     
        "date-uk-asc": function ( a, b ) {
            return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        },
     
        "date-uk-desc": function ( a, b ) {
            return ((a < b) ? 1 : ((a > b) ? -1 : 0));
        }

    });
 

    $("#usertable").DataTable({
        "sDom": 'f<"top">tip',
        "language": {

            "processing": "Traitement en cours...",

            "search": "Rechercher",

            "width": "10%",

            "lengthMenu": "Afficher _MENU_ ",

            "info": "Affichage de _START_ &agrave; _END_ sur _TOTAL_ ",

            "infoEmpty": "Affichage de 0 &agrave; 0 sur 0 ",

            "infoFiltered": "(filtr&eacute; de _MAX_  au total)",

            "infoPostFix": "",

            "loadingRecords": "Chargement en cours...",

            "zeroRecords": "Rien &agrave; afficher",

            "emptyTable": "Aucune donnée disponible dans le tableau",

            "paginate": {

                first: "Premier",

                previous: "Pr&eacute;c&eacute;dent",

                next: "Suivant",

                last: "Dernier"

            },

        }
    });


   
    $("#demande").DataTable({

        "order": [0, "desc" ],
        columnDefs: [
            { type: 'date-uk', targets: 5 }
          ],

        "sDom": 'f<"top">tip',
        "language": {

            "processing": "Traitement en cours...",

            "search": "Rechercher",

            "width": "10%",

            "lengthMenu": "Afficher _MENU_ ",

            "info": "Affichage de _START_ &agrave; _END_ sur _TOTAL_ ",

            "infoEmpty": "Affichage de 0 &agrave; 0 sur 0 ",

            "infoFiltered": "(filtr&eacute; de _MAX_  au total)",

            "infoPostFix": "",

            "loadingRecords": "Chargement en cours...",

            "zeroRecords": "Rien &agrave; afficher",

            "emptyTable": "Aucune donnée disponible dans le tableau",

            "paginate": {

                first: "Premier",

                previous: "Pr&eacute;c&eacute;dent",

                next: "Suivant",

                last: "Dernier"

            },

        }
    });

 


  
});