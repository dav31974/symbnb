// ******fonction d'ajout d'une image******
$('#add-image').click(function(){
    // je récupère le numéro des futurs champs que je vais créer
    const index = +$('#widgets-counter').val();
    // je récupère le protoype des entrées
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);
    // l'injecte le code du prototype au sein de la div
    $('#ad_images').append(tmpl);

    $('#widgets-counter').val(index + 1);
    // je gère le bouton supprimer
    handleDeleteButtons();

});
// ******fonction de suppression d'une image******
function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter() {
    const count = +$('#ad_images div.form-group').length;

    $('#widgets-counter').val(count);
}
updateCounter();

// j'appel la fonction des suppression d'image au chargement au k ou il y'ait deja des images
handleDeleteButtons();