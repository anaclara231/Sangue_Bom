
function validarLogin(){
    let senha1 = document.getElementById('SENHA_USUARIO').value;
    let senha2 = document.getElementById('SENHA_USUARIO2').value;
     
    if (senha1 != senha2) {
        document.getElementById('SENHA_USUARIO').style.borderColor='red';
        document.getElementById('SENHA_USUARIO2').style.borderColor='red';
        document.getElementById('senhaErro').style.display='block';
        return false
      
    }else{
        document.getElementById('senhaErro').style.display="none";
        return true;

    }      
    
 }
 function validarLogin(){
    var cpf = document.getElementById('CPF').value

    if(cpf != 14){
        document.getElementById('cpfInvalido').style.display='block';
        return false
    }else{
        document.getElementById('cpfInvalido').style.display='none';
        return true
    }
 }

