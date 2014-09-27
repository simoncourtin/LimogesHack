$(function() {
    var sendBtn = $('#sendBtn');

    $(sendBtn).on('click', function(e) {
        e.preventDefault();

        // Déclaration des variables
        var prenom = $.trim($('#prenom').val());
        var nom = $.trim($('#nom').val());
        var mail = $.trim($('#mail').val());
        var message = $.trim($('#message').val());

        // Vérification du formulaire
        if ((prenom).length < 2) {
            $('#notification').text('Votre prénom doit contenir au moins 2 caractères.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#prenom').focus();
        } else if ((nom).length < 2) {
            $('#notification').text('Votre nom doit contenir au moins 2 caractères.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#nom').focus();
        } else if (!mail || !isEmail(mail)) {
            $('#notification').text('Votre adresse email n\'est pas valide.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#mail').focus();
        } else if ((message).length < 2) {
            $('#notification').text('Votre message est trop court.').miniNotification({
                time: 3000,
                showSpeed: 400,
            });
            $('#message').focus();
        } else {
            $('#contactForm').submit();
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
