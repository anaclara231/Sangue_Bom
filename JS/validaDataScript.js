class util {

    static validaData(dataRecebida){
        var dataAux = dataRecebida.split("/");
//        var ano = parseInt(dataAux[2]);
//        var mes = parseInt(dataAux[1]);
//        var dia = parseInt(dataAux[0]);

        var ano = dataAux[2];
        var mes = dataAux[1];
        var dia = dataAux[0];


        if ( (ano == null) || (mes == null) || (dia == null) )
        {
            return false;
        }

        if ( this.eNumeroValido(ano) && this.eNumeroValido(mes) && this.eNumeroValido(dia) ){

            if (ano>0){
                if ( (mes<=0) || (mes>12) ){
                    console.log('Número mês menor que 1 ou maior que 12 inválido!');
                    return false;
                }

                if ( (dia>31) || (dia <=0) ){
                    console.log('Número dia maior que 31 ou menor que 1 inválido!');
                    return false;
                }
                
                if ( (dia>=30) && (mes==2) ){
                    console.log('Número dia 30 ou maior para fevereiro inválido!');
                    return false;
                }

                if ( (dia==29) && (mes==2) && ( (ano % 4) != 0 ) ){
                    console.log('Número dia 29 para fevereiro não bissexto inválido!');
                    return false;
                }

                if ( (dia==31) && ( (mes==2) || (mes==4) || (mes==6) || (mes==9) || (mes==11)  ) ){
                    console.log('Número dia 31 para mês inválido!');
                    return false;
                }

                if ( (1<=mes<=12) && (1<=dia<=31) ){
                    console.log('Data Validada!'+dia+'/'+mes+'/'+ano);
                    return true;
                }

            }
            else
            {
                console.log('Ano negativo. Invalidado!');
                return false;            
            }                

            }
            else{ 
                console.log('Dados não numéricos. Invalidado!');
                return false;
            } 
       
        return false;

    } // fim validaData

    static eNumeroValido(valor){
        return !isNaN(valor) && isFinite(valor);
        //return typeof valor === "number";
    } 

    static eNumeroFloatValido(valor){
        return !isNaN(parseFloat(valor)) && isFinite(n);
        //return typeof valor === "number";
    }

} //fim classe util

//var objUtil = new util;
document.getElementById('#data')
if (util.validaData('21/13/2004') ){
    console.log('Validado!');
    document.write('VALIDADO');
}
else{
    console.log('NÃO VALIDADO!');
    document.write('NÃO VALIDADO!');    
}


//document.getElementById("conteudo").innerHTML = textoIdade;