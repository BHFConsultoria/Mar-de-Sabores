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

function mascara(t, mask) {
    var i = t.value.length;
    var saida = mask.substring(1, 0);
    var texto = mask.substring(i)

    if (texto.substring(0, 1) != saida) {
        t.value += texto.substring(0, 1);
    }
}

function compararSenhas() {

    if ($("#dsConfirmaSenha").val() != $("#dsSenha").val()) {
        alert('Senhas não coincidem!');
        return false;

    }

}

function confirmarDesativar(){
    
    var x = confirm('Deseja realmente desativar sua conta?');
    
    if(x){
        return true;
    }else{
        return false;
    }
    
}
function ValidaValor(){
    
}