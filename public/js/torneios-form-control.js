var nome = document.getElementById('input-torneio-nome');
var formato = document.getElementById('select-formatos-de-jogo');
var max_qtd = document.getElementById('input-max-participantes');
var valor = document.getElementById('input-valor-inscricao');
var max_data = document.getElementById('input-data-limite-inscricao');
var data_inicio = document.getElementById('input-data-comeco-torneio');
var botao = document.getElementById('torneio-btn');
var erros = document.getElementsByClassName('form-erro');

function carregarFormatos(){
    let config = {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            'Accept': 'application/json'
        }
    };
    fetch('/adm/torneios/criar/recuperarFormatos', config)
        .then(function(resposta){
            resposta = resposta.json();
        })
        .then(function(resposta){
            console.log(resposta);
        })
}

nome.addEventListener('change', function(){
    var node = document.createElement("p");
    if(erros[0].firstChild != null)
        erros[0].removeChild(erros[0].firstChild);

    if (this.value.length < 10)
    {
        node.innerText = "Não possui a quantidade mínima de caracteres";
        erros[0].appendChild(node);
    }
    else if(this.value.length >= 50){
        node.innerText = "Ultrapassou o limite máximo de caracteres";
        erros[0].appendChild(node);
    }
    else if(this.value.length > 10 && this.value.length <= 50){
        carregarFormatos();
        formato.disabled = false;
    }
});