// Classe para chamar o Json.
function json(){
	var qtd;
	var retorno;

	// Resgatar valores.
	json.prototype.resgatarValores = function(){
		$('#resultado').html('Carregando dados...');

		// Estrutura de resultado.
		$.getJSON('http://marcosmatiasti.atspace.cc/cursos.json', function(data){
			this.qtd = data.cursos.length;
			this.retorno = '';

			for (i = 0; i < this.qtd; i++){
				this.retorno += '<h1>' + data.cursos[i].titulo + '</h1>';
				this.retorno += '<p>Ano: ' + data.cursos[i].ano + '</p>';
				this.retorno += '<p>' + data.cursos[i].conteudo + '</p><br />';
			}

			$('#resultado').html(this.retorno);
		});

	}

}

// Objeto.
var obj = new json();
obj.resgatarValores();
