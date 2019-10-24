


	
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";

	if(s1.value == "CARTÃO"){
		var optionArray = ["1|A VISTA","2|2x","3|3x","4|4x", "5|5x", "6|6x", "7|7x", "8|8x", "9|9x", "10|10x"];
	}
	else if(s1.value == "DINHEIRO"){
		var optionArray = ["A COMBINAR | A COMBINAR"];
	}
		else if(s1.value == "DÉBITO"){
		var optionArray = ["A COMBINAR | A COMBINAR"];
	}
	else if(s1.value == "PERMUTA"){
		var optionArray = ["A COMBINAR | A COMBINAR"];
    }
    else if(s1.value == "TRANSFERÊNCIA"){
		var optionArray = ["A COMBINAR | A COMBINAR"];
    }
    else if(s1.value == "DEPÓSITO"){
		var optionArray = ["A COMBINAR | A COMBINAR"];
	}
	else if(s1.value == "BOLETO"){
			var optionArray = ["1|A VISTA","2|2x","3|3x","4|4x", "5|5x", "6|6x", "7|7x", "8|8x", "9|9x", "10|10x"];
	}
	else if(s1.value == "CHEQUE"){
		var optionArray = ["1|ADCIONAR CHEQUES"];
    }
    
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
	





/*CEP*/
       $(document).ready(function() {
		$("#cep").mask("99999-999");
            function limpa_formulario_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
               // $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                       // $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                //$("#ibge").val(dados.ibge);
                                //$("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulario_cep();
                }
            });
        });



/*outros*/
	

	
	

	
	var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
