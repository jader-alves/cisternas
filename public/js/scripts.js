async function buscaEndereco(cep) {
    try {
        const erro = document.querySelector("#cep_erro");
        erro.style.display='none';
        cep = cep.replace("-", "");
        var consultaCEP = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        var consultaCEPConvertida = await consultaCEP.json();
        if (consultaCEPConvertida.erro) {
            erro.style.display='block';
            throw Error('CEP não existente!');
        }
        const form =  document.querySelector('form');
        form.logradouro.value = consultaCEPConvertida.logradouro;
        form.cidade.value = consultaCEPConvertida.localidade;
        form.bairro.value = consultaCEPConvertida.bairro;
        form.estado.value = consultaCEPConvertida.uf;
        console.log(consultaCEPConvertida);

        return consultaCEPConvertida;
    } catch (erro) {
        console.log(erro);
    }
}

var cep = document.querySelector('#cep');
if (cep)
    cep.addEventListener('focusout',(event) => {buscaEndereco(cep.value);})
