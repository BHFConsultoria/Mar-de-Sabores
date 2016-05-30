$(document).ready(function () {
 
    if ($("#acao").val() == 'alterar') {
        $("#cdCpf").attr("readonly", true);
        $("#cdCnpj").attr("readonly", true);
    }
    
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

function confirmarDesativarConta(){
    
    var x = confirm('Deseja realmente desativar sua conta?');
    
    if(x){
        return true;
    }else{
        return false;
    }
    
}
function numeroParaMoeda(n, c, d, t)
{
    c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
