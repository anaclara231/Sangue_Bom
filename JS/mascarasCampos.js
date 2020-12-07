/*    function mascara_cpf(){
    let cpf = document.getElementById('CPF')
    if(cpf.value.length == 3 || cpf.value.length == 7 ) {
    cpf.value += "."
    } else if(cpf.value.length == 11) {
        cpf.value += "-"
    }
 }
    
    function mascara_cep(){
        let cep = document.getElementById('CEP')
        if (cep.value.length == 5) {
            cep.value += "-"
        } 
    }
    Mascara antiga
    */

$(document).ready(function(){
    $('#cpf').mask('000.000.000-00', {reverse: false});
      })

$(document).ready(function(){
    

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };
      
      $('#NUM_TELEFONE').mask(SPMaskBehavior, spOptions);
    
});


function mascara_rg(){
    let rg = document.getElementById('RG')
    if(rg.value.length == 2 || rg.value.length == 6 ) {
        rg.value += "."
    }else if 
        (rg.value.length == 10) {
            rg.value += "-"
        }
}

