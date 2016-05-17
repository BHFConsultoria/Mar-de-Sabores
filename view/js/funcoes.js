$(document).ready(function () {

});

function apenasNumeros(evento) {
    var tecla = (window.event) ? event.keyCode : evento.which;

    if (tecla == 44 || (tecla > 47 && tecla < 58))
        return true;

    else {
        if (tecla == 8 || tecla == 0)
            return true;
        else
            return false;
    }
}