let index = {
    carregarFormatos: function(){


        let config = {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json'
            }
        };

        fetch('/adm/formatos/carregar', config)
            .then(function(response){
                return response.json();
            })
            .then(function(response){
                console.log(response);
            })


    }
};

index.carregarFormatos();
