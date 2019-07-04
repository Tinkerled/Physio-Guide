M.AutoInit();


// verifier que l'exercice a un nom avant de soumettre
function required(field)
{
    if (field.value.length == 0)
    {
        alert("Vous devez nommer l'exercice.");
        return false;
    }
    else{
        return true;
    }
}



$(document).ready(function(){
    console.log("loaded");
    $('.parallax').parallax();
    $('select').material_select();

    $('.modal-trigger').leanModal();

    $('.collectionContent').hide();

    $("#bouton").click(function(){
        console.log("clicked voir");
        $('.collectionContent').toggle();
    });

});


// empecher la formulaire de soumettre quand la fenetre refresh
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
