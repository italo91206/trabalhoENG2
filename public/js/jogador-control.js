let jogador;

let index = {
    carregarFuncoes: function(){
        let config = {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json'
            }
        }

        fetch(`/carregarFuncoes`, config)
            .then(function(response){
                return response.json();
            })
            .then(function(response){
                // console.log(response);
                var funcoes = response;

                var node;
                for(var i=0; i < funcoes.length; i++){
                    node = document.createElement("option");
                    node.value = funcoes[i].id;
                    node.innerText = funcoes[i].nome;
                    if(this.jogador.funcao == funcoes[i].id)
                        node.selected = true;
                    document.getElementById('user_job').appendChild(node);
                }
                if(this.jogador.funcao != 3){
                    document.getElementById('user_job').disabled = false;
                    document.getElementById('is_active').disabled = false;
                }
                document.getElementById('loading').classList.toggle("hide");
            })
    },
    carregarJogador: function(){
        var url = window.location.href.split('/');
        var id = url[url.length-1];
        var token = document.getElementsByName('_token')[0].value;
        let config = {
            method: "POST",
            body: {
                id: id
            },
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json',
                'X-CSRF-TOKEN': token
            }
        };

        fetch(`/adm/config/user/edit/carregarJogador/${id}`, config)
            .then(function(resposta){
                return resposta.json();
            })
            .then(function(resposta){
                resposta = resposta[0]
                this.jogador = resposta;
                // console.log(resposta);
                
                document.getElementById('user_id').value = resposta.id;
                document.getElementById('user_name').value = resposta.name;
                document.getElementById('user_email').value = resposta.email;
                document.getElementById('user_job').value = resposta.funcao;
                var opcoes = document.getElementById('is_active');

                for(var i=0; opcoes.options.length; i++){
                    if(this.jogador.is_active == opcoes.options[i].value)
                        opcoes.options[i].selected = true;
                }

            })

        
    },
    validaForm: function(){
        document.getElementById('save_edit').disabled = false;
    },
    mandarAlteracoes: function(){
        var is_active = document.getElementById('is_active').value;
        var user_job = document.getElementById('user_job').value;
        var user_id = document.getElementById('user_id').value;
        var token = document.getElementsByName('_token')[0].value;

        let config = {
            method: "POST",
            body:{
                'user_id': parseInt(user_id, 10),
                'novo_is_active': parseInt(is_active, 10),
                'novo_user_job': parseInt(user_job, 10)
            },
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json',
                'X-CSRF-TOKEN': token
            }
        };

        fetch('/usuarios/editar/salvar', config)   
            .then(function(response){
                console.log(config.body);
                return response.json();
            })
            .then(function(response){
                console.log(response);
            })
    }
    
};

index.carregarJogador();
index.carregarFuncoes();