let index = {
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
                console.log(resposta);
                
                document.getElementById('user_id').value = resposta.id;
                document.getElementById('user_name').value = resposta.name;
                document.getElementById('user_email').value = resposta.email;
                document.getElementById('user_job').value = resposta.funcao;

                document.getElementById('loading').classList.toggle("hide");
            })
    }
};

index.carregarJogador();