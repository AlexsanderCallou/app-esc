// Classe para chamar o Json.
function json(){
	var qtd;
	var retorno;

	// Resgatar valores.
	json.prototype.resgatarValores = function(){
		$('#resultadoEditais').html('Carregando dados...');

		// Estrutura de resultado.
		$.getJSON('http://marcosmatiasti.atspace.cc/CRUD/jsons/cadEditais.json', function(data){
			this.qtd = data.length;
			this.retorno = '';

			for (i = 0; i < this.qtd; i++){
				this.retorno += '<h1>' + data[i].titulo + '</h1>';
				this.retorno += '<p>Data: ' + data[i].data + '</p>';
				this.retorno += '<img id="imagem" src="' + data[i].urlimg + '"/>';
                this.retorno += '<p>' + data[i].conteudo + '</p>';
                this.retorno += '<a href="' + data[i].urllink + '">Veja mais</a>';
                this.retorno += '<p>Categoria: ' + data[i].categoria + '</p><br/><hr/><br/>';
			}

			$('#resultado').html(this.retorno);
		});

	}

}

// Objeto.
var obj = new json();
obj.resgatarValores();
