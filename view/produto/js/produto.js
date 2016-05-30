$(document).ready(function () {


});


function confirmarDesativarProduto(){
    
    var x = confirm('Deseja realmente desativar este produto?');
    
    if(x){
        return true;
    }else{
        return false;
    }
    
}

function confirmarExcluirProduto(){
    
    var x = confirm('Deseja realmente excluir este produto?');
    
    if(x){
        return true;
    }else{
        return false;
    }
    
}