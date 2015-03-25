<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário Root</title>
</head>
<body>
<form method="POST" action="cadastrar_root.php">
	<label id="nome">Nome</label>
	<input type="text" name="nome" maxlenght="40" required/>

	<label id="senha">Senha</label>
	<input type="password" name="senha" maxlenght="8" required/>

	<label id="email">E-mail</label>
	<input type="email" name="email" maxlenght="255" required/>

	<label id="enviar"></label>
	<input type="submit" value="Enviar"/>
</form>
</body>
</html>