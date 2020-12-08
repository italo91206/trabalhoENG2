let index = { 
    carregarFormatos: function(){
        document.getElementById('loading').classList.toggle('hide');
        let config = {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json'
            }
        };
        fetch('/adm/torneios/criar/recuperarFormatos', config)
            .then(function(resposta){
                return resposta.json();
            })
            .then(function(resposta){
                console.log(resposta);
                var node;
                
                for(var i=0; i < resposta.length; i++){
                    node = document.createElement("option");
                    node.value = resposta[i].id;
                    node.innerText = resposta[i].nome;
                    document.getElementById('select-formatos-de-jogo').appendChild(node);
                    document.getElementById('loading').classList.toggle('hide');
                }
            })
    },
    cadastrarTorneio: function(){

    },
    validaForm: function(){
        var nome = document.getElementById('input-torneio-nome');
        var formato = document.getElementById('select-formatos-de-jogo');
        var max_qtd = document.getElementById('input-max-participantes');
        var valor = document.getElementById('input-valor-inscricao');
        var max_data = document.getElementById('input-data-limite-inscricao');
        var data_inicio = document.getElementById('input-data-comeco-torneio');
        var botao = document.getElementById('torneio-btn');
        var erros = document.getElementsByClassName('form-erro');

        var node = document.createElement("p");
        if(erros[0].firstChild != null)
            erros[0].removeChild(erros[0].firstChild);
        if (nome.value.length < 10)
        {
            node.innerText = "Não possui a quantidade mínima de caracteres";
            erros[0].appendChild(node);
        }
        else if(nome.value.length >= 50){
            node.innerText = "Ultrapassou o limite máximo de caracteres";
            erros[0].appendChild(node);
        }
        else if(nome.value.length > 10 && nome.value.length <= 50){
            this.carregarFormatos();
            formato.disabled = false;
        }
    }
};