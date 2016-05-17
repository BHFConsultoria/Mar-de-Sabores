//Função para verificar se os campos do login estão vazios.
function verificaCampos(){
    
    if($('#nmEmail').val() == '' && $('#dsSenha').val() == ''){
        alert('Preencha o seu usuário e senha');
        return false;
    }        
    
    if($('#tpUsuario').val()==''){
        alert('Selecione o seu tipo de usuário');
        return false;
    }
    
    return true;
    
}