/*
 * Ajout de membres
 */

$(function() {
    var addUser = $('#addUser');
    var num = 1;

    $(addUser).on('click', function(e) {
        e.preventDefault();

        // Numéro de l'utilisateur
        num = num + 1;

        // Limiter le nombre de participants par équipe à 5
        if (num > 5) return;

        $('#userPanel').append($(
            '<div class="row"> \
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
    });
});

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

        var prenomChef = $.trim($('#prenom').val());
        var nomChef = $.trim($('#nom').val());
        var mailChef = $.trim($('#mail').val());

        // Vérification du formulaire
        if (!nomProjet) {
            $('#notification').text('Vous devez renseigner le nom du projet.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#titre').focus();
        } else if (!descProjet) {
            $('#notification').text('Vous présenter votre projet en quelques lignes.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#projet').focus();
        } else if ((nomEquipe).length < 2) {
            $('#notification').text('Le nom de l\'équipe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#equipe').focus();
        } else if ((prenomChef).length < 2) {
            $('#notification').text('Le prénom du chef de groupe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#prenom').focus();
        } else if ((nomChef).length < 2) {
            $('#notification').text('Le nom du chef de groupe doit contenir 2 caractères minimum.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#nom').focus();
        } else if (!mailChef || !isEmail(mailChef)) {
            $('#notification').text('L\'adresse email du chef de groupe n\'est pas valide.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#mail').focus();
        } else {
            $('#registerForm').submit();
        }
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
