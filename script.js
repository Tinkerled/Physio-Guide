
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

$('.voir-exe').click(function(){
    console.log("clicked");
    $('.hideSection').slideToggle('slow');
});

// empecher la formulaire de soumettre quand la fenetre refresh
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}


$(document).ready(function () {
    $('select').material_select();
});
