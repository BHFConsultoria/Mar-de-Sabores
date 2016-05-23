//Função para verificar se os campos do login estão vazios.
function verificaCampos(){
    
    if($('#nmEmail').val() == '' || $('#dsSenha').val() == ''){
        alert('Preencha o seu usuário e senha');
        return false;
    }        
    
    return true;
    
}