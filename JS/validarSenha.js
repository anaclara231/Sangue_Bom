

function validarLogin(){
    let senha1 = document.getElementById('SENHA_USUARIO').value;
    let senha2 = document.getElementById('SENHA_USUARIO2').value;
    
    if (senha1 != senha2) {
        return false
      
    }
    return true;
        
          
    
 }