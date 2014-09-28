/*
 * Ajout de membres
 */
num = 1;

$(function() {
    var addUser = $('#addUser');

    $(addUser).on('click', function(e) {
        e.preventDefault();

        // Numéro de l'utilisateur
        num = num + 1;

        // Limiter le nombre de participants par équipe à 5
        if (num >= 5) return;

        $('#userPanel').append($(
            '<div class="row" id="user-' + num + '"> \
                <div class="col-3"> \
                    <input type="text" name="prenom' + num + '" id="prenom' + num + '" placeholder="Prénom"> \
                </div> \
                <div class="col-3"> \
                    <input type="text" name="nom' + num + '" id="nom' + num + '" placeholder="Nom"> \
                </div> \
                <div class="col-3"> \
                    <input type="email" name="mail' + num + '" id="mail' + num + '" placeholder="Adresse e-mail"> \
                </div> \
            </div>'
        ).fadeIn());

        if (num == 4) $('#addUser').hide();
    });
});

/*
 * Suppression de participants
 */

/*$(function() {
    for (var i; i < num; i++) {
        $('#delete-' + i).on('click', function(event) {
            event.preventDefault();
            $('#user-' + i).slideUp();
            num = num - 1;
        });
    }
});*/

/*
 * Envoi du formulaire
 */

$(function() {
    var registerBtn = $('#registerBtn');

    $(registerBtn).on('click', function(e) {
        e.preventDefault();

        // Déclaration des variables
        var nomProjet = $.trim($('#titre').val());
        var descProjet = $.trim($('#projet').val());
        var nomEquipe = $.trim($('#equipe').val());

        var prenomChef = $.trim($('#prenom0').val());
        var nomChef = $.trim($('#nom0').val());
        var mailChef = $.trim($('#mail0').val());

        // Vérification du formulaire
        if (!nomProjet) {
            $('#notification').text('Vous devez renseigner le nom du projet.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#titre').focus();
            return;
        } else if (!descProjet) {
            $('#notification').text('Vous devez présenter votre projet en quelques lignes.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#projet').focus();
            return;
        } else if ((nomEquipe).length < 2) {
            $('#notification').text('Le nom de l\'équipe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#equipe').focus();
            return;
        } else if ((prenomChef).length < 2) {
            $('#notification').text('Le prénom du chef de groupe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#prenom0').focus();
            return;
        } else if ((nomChef).length < 2) {
            $('#notification').text('Le nom du chef de groupe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#nom0').focus();
            return;
        } else if (!mailChef || !isEmail(mailChef)) {
            $('#notification').text('L\'adresse email du chef de groupe n\'est pas valide.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#mail0').focus();
            return;
        } else {
            for (var i = 1; i <= num; i++) {
                if (($('#prenom' + i).val()).length < 2) {
                    $('#notification').text('Le prénom du participant n°' + i + ' est trop court (2 caractères minimum).').miniNotification({
                        time: 3000,
                        showSpeed: 400,
                    });
                    $('#prenom' + i).focus();
                    return;
                } else if (($('#nom' + i).val()).length < 2) {
                    $('#notification').text('Le nom du participant n°' + i + ' est trop court (2 caractères minimum).').miniNotification({
                        time: 3000,
                        showSpeed: 400,
                    });
                    $('#nom' + i).focus();
                    return;
                } else if (!$('#mail' + i).val() || !isEmail($('#mail' + i).val())) {
                    $('#notification').text('Le email du participant n°' + i + ' n\'est pas valide.').miniNotification({
                        time: 3000,
                        showSpeed: 400,
                    });
                    $('#mail' + i).focus();
                    return;
                }
            }
        }

        $('#registerForm').submit();
    });
});

/*
 * Vérification de l'adresse email
 */

function isEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(email)) {
        return false;
    } else {
        return true;
    }
}

/*
 * Autosize des textarea
 */

$(function() {
    $('body').on('click', 'textarea', function() {
        $('textarea').autosize();
    });
});
