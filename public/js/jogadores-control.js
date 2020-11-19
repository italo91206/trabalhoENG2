let index = {
    carregarTodosJogadores: function(){
        var tabela = document.getElementById('usuariosView')
        var tabelaHeader = tabela.innerHTML;

        let config = {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json'
            }
        };

        function calculaMedia(win, all){
            info = win/all*100;
            return info.toFixed(2) + "%";
        }

        fetch('/adm/config/user/carregarJogadores', config)
            .then(function(resposta){
                return resposta.json();
            })
            .then(function(resposta){
                var item = "";
                var i = 0;
                var acoes = `<button class="disabled"><span class="fa fa-times"></span></button>`;
                acoes += `<button class="disabled"><span class="fa fa-pencil-alt"></span></button>`;
                acoes += `<button class="disabled"><span class="fa fa-unlock-alt"></span></button>`;

                for(; i < resposta.length; i++){
                    item += "<tr>";
                    item += `<td class="id">${resposta[i].id}</td>`;
                    item += `<td class="nome">${resposta[i].name}</td>`;
                    item += `<td class="email">${resposta[i].email}</td>`;
                    item += `<td class="partidas">${resposta[i].partidas_jogadas}</td>`;
                    item += `<td class="winrate">${calculaMedia(resposta[i].vitorias, resposta[i].partidas_jogadas)}</td>`;
                    item += `<td class="opcoes">${acoes}</td>`;
                    item += "</tr>";
                }
                tabela.innerHTML = tabelaHeader + item;
                document.getElementById('user-count').innerText = i;
                document.getElementById('user-count').classList.remove("hidden");
            })
    }
};

index.carregarTodosJogadores();