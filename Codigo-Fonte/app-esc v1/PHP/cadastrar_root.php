<?php 
//ESTABELECE CONEXÃO COM O BANCO DE DADOS, SE NÃO FOR POSSIVEL ENVIA MENSAGEM DE ERRO
$conexao = mysql_connect("localhost", "root","") or die ("Erro na conexão");

//SELECIONA O BANCO DE DADOS
$select_db = mysql_select_db("app_esc");

//CAPTURA VALORES DO METODO POST E ENVIA PARA VARIAVEIS DO PHP
$nome		= $_POST["nome"];
$senha		= $_POST["senha"];
$email		= $_POST["email"];
$permissao 	= "1";


//COMANDO SQL PARA INSERIR OS DADOS NO BANCO DE DADOS
$string_sql = "INSERT INTO root(id,nome,senha,email,permissao) VALUES (null,'$nome','$senha','$email','$permissao')";

//QUERY PARA ENVIAR O COMANDO E CONEXAO PARA O BANCO
mysql_query($string_sql,$conexao);

if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
       	echo '<a href="cadastro_root.php">';
} else {
	echo "Erro, não foi possível inserir no banco de dados";       	
     }
 mysql_close($conexao); 
?>