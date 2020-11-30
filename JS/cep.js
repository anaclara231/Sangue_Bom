 $(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#RUA").val("");
    $("#BAIRRO").val("");
    $("#CIDADE").val("");
    $("#ESTADO").val("");
    //$("#ibge").val("");
}
//Quando o campo cep perde o foco.
$("#CEP").blur(function() {
//Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');
//Verifica se campo cep possui valor informado.
    if (cep != "") {
 //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
//Valida o formato do CEP.
        if(validacep.test(cep)) {
     //Preenche os campos com "..." enquanto consulta webservice.
            $("#RUA").val("...");
            $("#BAIRRO").val("...");
            $("#CIDADE").val("...");
            $("#ESTADO").val("...");
            //$("#ibge").val("...");
    //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#RUA").val(dados.logradouro);
                    $("#BAIRRO").val(dados.bairro);
                    $("#CIDADE").val(dados.localidade);
                    $("#ESTADO").val(dados.uf);
                    //$("#ibge").val(dados.ibge);
                } 
                else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
                }
            });
        } 
        else {
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } 
    else {
        limpa_formulário_cep();
    }
});
});
