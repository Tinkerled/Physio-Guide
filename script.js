
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

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

$(document).ready(function () {
    $('select').material_select();
});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

var elem = document.querySelector('.collapsible.expandable');
var instance = M.Collapsible.init(elem, {
    accordion: false
});
